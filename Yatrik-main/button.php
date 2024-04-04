<!DOCTYPE html>
<html>
<head>
    <title>Switch Containers</title>
</head>
<body>
    <h1>First Page</h1>
    <button onclick="openContainer(1)">Open Container 1</button>
    <button onclick="openContainer(2)">Open Container 2</button>
    <button onclick="openContainer(3)">Open Container 3</button>
    <button onclick="openContainer(4)">Open Container 4</button>
    <button onclick="openContainer(5)">Open Container 5</button>

    <script>
        function openContainer(containerNumber) {
            window.location.href = `containers.php?container=${containerNumber}`;
        }
    </script>
</body>
</html>
