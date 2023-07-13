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
                    <a href="#"> 
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
            <a href="catalogo.php">catalogo</a>
        </nav>
    </div>

    <main>
    <?php
            
        $cn=mysqli_connect("localhost","root","");
        $n = mysqli_select_db($cn,"market peru s.a");
        $codigo=$_POST["codigo"];
        $consulta="SELECT * FROM catalogo WHERE productoID=$codigo";
        $resultado=$cn->query($consulta);

        if($resultado->num_rows>0){
            while($producto=$resultado->fetch_assoc()){
                echo "<h2 class='titulo-producto'>".$producto["nombre_producto"]."</h2>";
                echo "<div class='producto'>";
                echo "<img src='../imagenes/".$producto["productoID"].".jpg' width='400px'>";
                echo "<p>Precio: S/ "."<span>".$producto["Precio"]."</span>"."</p>";
                echo "<p>Numero Pedido: N° "."<span>".$producto["Numero_pedido"]."</span>"."</p>";
                echo "<p>Unidad de Medida: "."<span>".$producto["Empaque"]."</span>"."</p>";           
                echo "</div>";
                }
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