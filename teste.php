<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body >
<div onload="teste()">
        asdadasdasd
    </div>

    <script>
        function teste() {
            document.getElementById("corpo").innerHTML = "Alterou o corpo?";
        }

    </script>

    <button onclick=teste()>login</button>
    <div id="corpo">
    </div>
   
    <!-- coloco essa função no menu, onde monto somente um arquivo e menu.php e nele faço a separação por perfil -->
</body>

</html>