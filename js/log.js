 // Get DOM elements
 const loginLink = document.getElementById('login-link');
 const logoutLink = document.getElementById('logout-link');
 const loginForm = document.getElementById('login-form');
 const usernameInput = document.getElementById('username');
 const passwordInput = document.getElementById('password');
 var attempt = 3;
 // Add event listeners
 loginLink.addEventListener('click', showLoginForm);
 logoutLink.addEventListener('click', logout);
 loginForm.addEventListener('submit', login);
 
 
 // Functions
 function showLoginForm() {
   loginLink.style.display = 'none';
   logoutLink.style.display = 'none';
   loginForm.style.display = 'block';
 }
 
 function login(e) {
   e.preventDefault(); 
   const username = usernameInput.value;
   const password = passwordInput.value;
 
   if (username === 'admin@gmail.com' && password === '123') {
     loginLink.style.display = 'none';
     loginForm.style.display = 'none';
     logoutLink.style.display = 'inline';
     alert ("Login successfully");
     // window.location = "#"; // Redirecting to other page.
     return false;
   }
   else{
     attempt --;
     
     alert("You have left "+attempt+" attempt;");
     if( attempt == 0){
       usernameInput.disabled = true;
       passwordInput.disabled = true;
       document.getElementById("submit").disabled = true;
       return false;
     }
   }
 }
 
 
 function logout() {
   loginLink.style.display = 'inline';
   logoutLink.style.display = 'none';
   loginForm.style.display = 'none';
   usernameInput.value = '';
   passwordInput.value = '';

 }

 