<html>
<head>
    <link rel="stylesheet" href="../estilos/diseños.css">
    <link rel="stylesheet" href="../estilos/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <header class="sitio-header">
            <div class="contenido-header">
                <div class="sitio">
                    <a href="index.php"> 
                        <img src="../imagenes/removido.png">
                    </a>
                    <h1>MARKET PERU S.A</h1>
                </div>
            </div> 
    </header>

    <div class="barra">
        <nav class="opciones">
            <a href="index.php">Inicio</a>
            <a href="nosotros.php">Quienes Somos</a>
            <a href="#">catalogo</a>
        </nav>
    </div>

    <main>
        <div class="titulo-catalogo">
            <h2>Catalogo</h2>
        </div>
        <?php
            $cn=mysqli_connect("localhost","root","");
            $n = mysqli_select_db($cn,"market peru s.a");

            $consulta="SELECT * FROM catalogo";
            $resultado=$cn->query($consulta);

            if($resultado->num_rows>0){
                echo "<ul class='lista-productos'>";
                while($producto=$resultado->fetch_assoc()){
                    $codigo=$producto["productoID"];
                    echo "<li>";
                    echo "<a href='#'><img src='../imagenes/".$producto["productoID"].".jpg' width='200px'></a>";
                    echo "<p></p>";
                    echo "<form action='producto.php' method='post'>";
                    echo "<input type='hidden' name='codigo' value='".$codigo."'>";
                    echo "<input type='submit' value='".$producto['nombre_producto']."'>";
                    echo "</form>";
                    echo "</li>";
                }
                echo "</ul>";
            }
        ?>
    </main>

    <footer class="site-footer seccion">  
        <div class="contenedor-footer">
            <p>Direccion:<span> Paseo de la República 3455 Lima</span></p>
            <p>Teléfono:<span> 4678900</span></p>
            <p>Derechos Reservados <span>2022</span></p>
            <p>Correo: <span>marketperu@mkp.com.pe</span></p>
        </div>             
    </footer>
</body>
</html>