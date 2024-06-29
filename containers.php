<!DOCTYPE html>
<html>
<head>
    <title>Switch Containers</title>
</head>
<body>
    <h1>Second Page</h1>
    <div id="container0" style="display: none;">
        <h2>Container 0</h2>
        <p>This is container 0.</p>
    </div>
    <div id="container1" style="display: none;">
        <h2>Container 1</h2>
        <p>This is container 1.</p>
    </div>
    <div id="container2" style="display: none;">
        <h2>Container 2</h2>
        <p>This is container 2.</p>
    </div>
    <div id="container3" style="display: none;">
        <h2>Container 3</h2>
        <p>This is container 3.</p>
    </div>
    <div id="container4" style="display: none;">
        <h2>Container 4</h2>
        <p>This is container 4.</p>
    </div>
    <div id="container5" style="display: none;">
        <h2>Container 5</h2>
        <p>This is container 5.</p>
    </div>
    <div id="container6" style="display: none;">
        <h2>Container 6</h2>
        <p>This is container 6.</p>
    </div>
    <div id="container7" style="display: none;">
        <h2>Container 7</h2>
        <p>This is container 7.</p>
    </div>
    <div id="container8" style="display: none;">
        <h2>Container 8</h2>
        <p>This is container 8.</p>
    </div>
    <div id="container9" style="display: none;">
        <h2>Container 9</h2>
        <p>This is container 9.</p>
    </div>
    <div id="container10" style="display: none;">
        <h2>Container 10</h2>
        <p>This is container 10.</p>
    </div>
    <div id="container11" style="display: none;">
        <h2>Container 11</h2>
        <p>This is container 11.</p>
    </div>
    <div id="container12" style="display: none;">
        <h2>Container 12</h2>
        <p>This is container 12.</p>
    </div>
    <script>
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const containerNumber = parseInt(urlParams.get('container'));

        function showContainer(containerNumber) {
            for (let i = 0; i <= 11; i++) {
                const container = document.getElementById(`container${i}`);
                container.style.display = i === containerNumber ? 'block' : 'none';
            }
        }

        showContainer(containerNumber);
    </script> 
</body>
</html>