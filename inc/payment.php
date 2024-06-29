<!DOCTYPE html>
<html>
<head>
  <title>Payment Gateway</title>
	<link rel="icon" type="image/x-icon" href="../images/top.ico">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
*{
    font-family:'Poppins', sans-serif;
    margin: 0;
    padding:0;
    box-sizing:border-box;
    outline:none;
    border:none;
    text-transform:capitalize;
    transition: all .2s linear;
}
body{
  background-color: #fff;
  /* background-color: floralwhite; */
  overflow: hidden;
}

.left-design h1{
  position: absolute;
  margin-left: 905px;
  margin-top:6%;
  text-transform: uppercase;
  font-size:150%;
  z-index:3;
  -webkit-backdrop-filter: blur(20px);
  
}
.left-design .quote{
  font-size: 300%;
  color: rgb(13, 60, 70);

}



.beach-img{
  position: absolute;
  margin-left: 650px;
  margin-top: 10px;
  z-index:1;
  border-radius: 10px;
  opacity: 0.7;
  max-width: 50vw;
  max-height: 90vh;
  overflow: hidden;
  filter: blur(1px);
  
  
  
}
   
.container {
    max-width: 500px;
    margin: 50px 50px;
    padding: 20px;
    margin-left: 70px;
    margin-top: 80px;
    border-radius: 25px;
    z-index:5;
    border: 1px solid #ccc;
  }
  
  h1 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  .form-group {
    margin-bottom: 10px;
    margin-left: 10px;
  }
  
  label {
    display: block;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="password"],
  input[type="date"],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  button {
    display: block;
    width: 100%;
    padding: 15px;
    background-color: #f0c14b;
    color: #111;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .payment-details {
    display: none;
    margin-top: 20px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  .payment-details.active {
    display: block;
  }
  @media screen and (max-width: 600px) {
  .container {
    padding: 10px;
  }
  
  h1 {
    font-size: 20px;
  }
  
  input[type="text"],
  select {
    padding: 8px;
  }
  
  button {
    padding: 12px;
  }
}




 /* Preloader round---------------------------------------------------- */
 .preloader{
	 background:#000;
	 background-size:10%;
	 height:100%;
	 width:100%;
	 display:flex;
	 align-items:center;
	 justify-content:center;
	 position:fixed;
	 z-index:100;
	 transition:opacity 0.95s, visibility 0.95s;
 }
 .preloader::after{
	 content:"";
	 width:50px;
	 height:50px;
	 border:5px solid #fff;
	 border-top-color:var(--pink);
	 border-radius:50%;
	 animation: loading 0.95s ease infinite;
 }
 .preloader--hidden{
	opacity:0;
	visibility:hidden;
}
 
@keyframes loading{
	from{transform:rotate(0turn)}
	to{transform:rotate(1turn)}
}
</style>

<body>

<!-- preloading screen section -->
<div class=preloader></div>

  <div class="left-design">
  <img src="../images/beach-1.jpg" class="beach-img">
  <h1 class="quote left-design">Few<br> Steps<br> away<br> from<br> your<br> destination</h1>
</div>

  <div class="container">
    
    <h1>Checkout</h1>
    <form id="payment-form">
      <div class="form-group">
        <label for="payment-method">Payment Method:</label>
        <select id="payment-method" name="payment-method">
            <option value="credit-card">-- Select a Payment Method --</option>
          <option value="credit-card">Credit Card</option>
          <option value="net-banking">Net Banking</option>
          <option value="upi">UPI</option>
          
          <!-- Add more payment method options as needed -->
        </select>
      </div>
      <div id="credit-card-details" class="payment-details">
        <div class="form-group">
          <label for="card-number">Card Number:</label>
          <input type="text" id="card-number" name="card-number">
        </div>
        <div class="form-group">
          <label for="card-name">Cardholder Name:</label>
          <input type="text" id="card-name" name="card-name">
        </div>
        <div class="form-group">
          <label for="card-expiry">Expiration Date:</label>
          <input type="date" id="card-expiry" name="card-expiry">
        </div>
        <div class="form-group">
          <label for="card-cvc">CVV:</label>
          <input type="password" id="card-cvc" name="card-cvc" maxlength="3">
        </div>
      </div><br>
      <div id="net-banking-details" class="payment-details">
        <div class="form-group">
          <label for="bank-name">Bank Name:</label>
          <input type="text" id="bank-name" name="bank-name">
        </div>
        <div class="form-group">
          <label for="account-number">Account Number:</label>
          <input type="text" id="account-number" name="account-number">
        </div>
        <!-- Add more net banking-specific input fields as needed -->
      </div>
      <div id="upi-details" class="payment-details">
        <div class="form-group">
          <label for="upi-id">UPI ID:</label>
          <input type="text" id="upi-id" name="upi-id" placeholder="Ex:MobileNumber@upi">
        </div><br>

        <!-- Add more UPI-specific input fields as needed -->
      </div>
      <br>
      
      <!-- Add more payment method-specific details sections as needed -->
      <button type="submit" id="pay-button">Proceed</button>
    </form>
  </div>

  
</body>
<script>
    document.getElementById('payment-method').addEventListener('change', function() {
    var selectedPaymentMethod = this.value;
    var paymentDetails = document.getElementsByClassName('payment-details');
  
    // Hide all payment details sections
    for (var i = 0; i < paymentDetails.length; i++) {
      paymentDetails[i].style.display = 'none';
    }
  
    // Show the selected payment details section
    var selectedPaymentDetails = document.getElementById(selectedPaymentMethod + '-details');
    if (selectedPaymentDetails) {
      selectedPaymentDetails.style.display = 'block';
    }
  });
  
  document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
  
    // Get the selected payment method
    var selectedPaymentMethod = document.getElementById('payment-method').value;
  
    // Get the form values based on the selected payment method
    var formData = {};
  
    if (selectedPaymentMethod === 'credit-card') {
      formData.cardNumber = document.getElementById('card-number').value;
      formData.cardName = document.getElementById('card-name').value;
      formData.cardExpiry = document.getElementById('card-expiry').value;
      formData.cardCvc = document.getElementById('card-cvc').value;
    } else if (selectedPaymentMethod === 'net-banking') {
      formData.bankName = document.getElementById('bank-name').value;
      formData.accountNumber = document.getElementById('account-number').value;
    } else if (selectedPaymentMethod === 'upi') {
      formData.upiId = document.getElementById('upi-id').value;
    } else if (selectedPaymentMethod === 'paypal') {
      // Get PayPal-specific form values
    } else if (selectedPaymentMethod === 'google-pay') {
      // Get Google Pay-specific form values
    }

    console.log('Payment Method:', selectedPaymentMethod);
    console.log('Form Data:', formData);
  });
</script>



 <!--....................preloader........................-->

 <script>

  <!--window.addEventListener("load", () => {document.querySelector(".preloader").classList.add("preloader--hidden");})-->
   window.addEventListener("load", ()=>{
   const loader =document.querySelector(".preloader");
   loader.classList.add("preloader--hidden");
   loader.addEventListener("transitionend",()=>{
   document.body.removeChild(loader);
   })
   })
  </script>
</html>