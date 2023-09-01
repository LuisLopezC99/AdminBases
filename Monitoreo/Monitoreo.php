<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../S1AdminBases.css">
    <link rel="stylesheet" href="../Grafica.css">
    <script type="text/javascript" src="Monitoreo.js"></script>
    <title>Monitoreo</title>
</head>
<header>
    <?php include('../Header.php'); ?>
</header>

<body>








    <div class="container">
        <a href="../Monitoreo/realtimeMonitoreo" class="btn btn-primary" role="button">REAL TIME MONITOREO</a>
        <h2>Monitoreo y Análisis de las Principales Estructuras de Memoria del Sistema Administrador de Bases de
            Datos </h2>

        <div class="row">
            <div class="col">
                <h3>ESTADO DEL BUFFER DEL CACHE</h3>
                <div class="scrollable-table-container">
                    <table class="" style="color: darkred ">
                        <tr>
                            <th>SIZE (MB)</th>
                            <th>USED (MB)</th>
                            <th>FREE (MB)</th>

                        </tr>

                        <tr>
                            <td>800</td>
                            <td>515</td>
                            <td>285</td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col">
                <h3>GRAFICA DEL ESTADO DEL BUFER DE CACHE</h3>
                <div style="color: darkred " class="sub_board">
                    <div class="sep_board"></div>
                    <div class="cont_board">
                        <div class="graf_board">
                            <div class="barra">
                                <div class="sub_barra b5">
                                    <div class="tag_g">800</div>
                                    <div class="tag_leyenda">SIZE</div>
                                </div>
                            </div>

                            <div class="barra">
                                <div class="sub_barra b3">
                                    <div class="tag_g">515</div>
                                    <div class="tag_leyenda">USED</div>
                                </div>
                            </div>

                            <div class="barra">
                                <div class="sub_barra b1">
                                    <div class="tag_g">285</div>
                                    <div class="tag_leyenda">FREE</div>
                                </div>
                            </div>
                        </div>
                        <div class="tag_board">
                            <div class="sub_tag_board">
                                <div>1000</div>
                                <div>800</div>
                                <div>700</div>
                                <div>600</div>
                                <div>500</div>
                                <div>400</div>
                                <div>300</div>
                                <div>200</div>
                                <div>100</div>
                                <div>10</div>
                            </div>
                        </div>
                    </div>
                    <div class="sep_board"></div>
                </div>
            </div>


        </div>

    </div>

    

</body>

</html>