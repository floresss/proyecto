<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Ventas</title>
    </head>
    <body style="background: #f3f2f4">
        <br />
        <div align="center">
            <h1>VENTAS</h1>
        </div>

        <div align="right">
            <a href="index.html">Salir</a>
        </div>
        <hr />
        <br />

        <?php
            if(isset($_GET['producto']))
            {
                include('Conexion.php');
                $con = new Conexion();
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
                //echo " datos de producto ".$_GET['producto']."--- Precio ".$_GET['precio'];
                $consulta=$con->query($query);
                $con->close();
             ?>
                <table align="center" border=1>
                    <tr>
                        <td>
                            <p>Producto</p>
                        </td>
                        <td>
                            <p>Precio</p>
                        </td>
                    </tr>
                    <?php
                         
                         $con = new Conexion();
                        $query="SELECT * FROM `carrito` WHERE 1;";
                        $pro=$con->query($query);
                        $con->close();
                        
                        while($row=mysqli_fetch_assoc($pro))
                        {
                            echo "
                                <tr>
                                    <td>
                                        <p>".$row['producto']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['precio']."</p>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            <?php                   
            }
        ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="clo-10 ">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Agregar Carrito</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/airforce1.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Nike Air Force 1, la historia de un icono. Las Air Force 1 aparecieron por primera vez en 1982 y revolucionaron el mundo de las zapatillas. Fueron las primeras zapatillas de baloncesto con Nike Air, aunque desde entonces su naturaleza innovadora ha dejado paso a su estatus como icono del estilo urbano.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 150.00</p>
                                </td>
                                <td>
                                    <a href="?producto=airforce1&precio=150">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/jordan1.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Las Air Jordan I se diseñaron para Michael Jordan y aquello supuso muchos cambios. El primero, que por primera vez un jugador negro era la imagen de una marca tan grande como Nike. La leyenda de las Air Jordan 1 creció a la par que la de Michael Jordan. En el verano de 1984 la fortuna del equipo cambió cuando obtuvieron la tercera elección del Draft de 1984, tras Houston y Portland. Los Rockets eligieron a Hakeem Olajuwon, mientras que los Blazers elegían a Sam Bowie, dejando en bandeja de plata a los Bulls la elección del escolta de la Universidad de Carolina, Michael Jordan.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 280.00</p>
                                </td>
                                <td>
                                    <a href="?producto=jordan1&precio=280">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/97.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Nos gustan las zapatillas porque son bombas de tiempo. Pocos artefactos de moda definen tan bien una época, un momento de nuestra vida, una manera de hacer las cosas. Las Air Max 97 son exactamente eso: representan fielmente los últimos años 90, un poco locos, un poco inestables. Son las Nike que llevaba la Spice Girl deportista, las que promocionaba Carl Lewis, las que avanzaban con su tono brillante un nuevo milenio que después, es así, no fue para tanto. Pero son también las primeras deportivas aceptadas en masa por la escena fashion, una suerte de pieza de culto que entendieron mejor los expertos. Estos misiles plateados estallan en recuerdos.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 230.00</p>
                                </td>
                                <td>
                                    <a href="?producto=97&precio=230">Comprar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>