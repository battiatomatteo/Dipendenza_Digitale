<?php
require("../config/connessione.php");
session_start();
if(!isset($_SESSION["user"]))
    header("location: questionario.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/graficis.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>DIPENDENZA DIGITALE • GRAFICI</title>
    
               
</head>
    <body>
        <h1>GRAFICI</h1>
        
        <?php
            echo "<h2>" ."Benvenuto/a ". $_SESSION["user"] . "</h2>";

            echo "<p>"."Qua si possono trovare i grafici che mostrano le percentuali di risposta di chi ha compilato il nostro questionario"."</p>";

            $domanda_1 = [];
            $domanda_2 = [];
            $domanda_3 = [];
            $domanda_4 = [];
            $domanda_5 = [];
            $domanda_6 = [];

            $rdm1A = 0;
            $rdm1B = 0;
            $rdm1C = 0;
            $rdm1D = 0;

            $rdm2A = 0;
            $rdm2B = 0;
            $rdm2C = 0;
            $rdm2D = 0;

            $rdm3A = 0;
            $rdm3B = 0;
            $rdm3C = 0;
            $rdm3D = 0;

            $rdm4A = 0;
            $rdm4B = 0;
            $rdm4C = 0;
            $rdm4D = 0;

            $rdm5A = 0;
            $rdm5B = 0;
            $rdm5C = 0;
            $rdm5D = 0;

            $rdm6A = 0;
            $rdm6B = 0;
            $rdm6C = 0;
            $rdm6D = 0;
            
            $query = "SELECT domanda_1, domanda_2, domanda_3, domanda_4, domanda_5, domanda_6 FROM risposte";
            $a = $conn->query($query);
            if($a == false){
                exit("cannot connect with the database");
            }
            if($a == null)
                echo "empty database";
            if($a->num_rows > 0){
                for ($i=0; $i < $a->num_rows; $i++) { 
                    $row = $a->fetch_assoc();
                    $dm1 = $row["domanda_1"];
                    array_push($domanda_1, $dm1);
                    //controllo risposta
                    switch($dm1){
                        case "A":
                            $rdm1A +=1;
                            break;
                        case "B":
                            $rdm1B +=1;
                            break;
                        case "C":
                            $rdm1C +=1;
                            break;
                        case "D":
                            $rdm1D +=1;
                            break;
                    }
                    $dm2 = $row["domanda_2"];
                    array_push($domanda_2, $dm2);
                    switch($dm2){
                        case "A":
                            $rdm2A +=1;
                            break;
                        case "B":
                            $rdm2B +=1;
                            break;
                        case "C":
                            $rdm2C +=1;
                            break;
                        case "D":
                            $rdm2D +=1;
                            break;
                    }
                    $dm3 = $row["domanda_3"];
                    array_push($domanda_3, $dm3);
                    switch($dm3){
                        case "A":
                            $rdm3A +=1;
                            break;
                        case "B":
                            $rdm3B +=1;
                            break;
                        case "C":
                            $rdm3C +=1;
                            break;
                        case "D":
                            $rdm3D +=1;
                            break;
                    }
                    $dm4 = $row["domanda_4"];
                    array_push($domanda_4, $dm4);
                    switch($dm4){
                        case "A":
                            $rdm4A +=1;
                            break;
                        case "B":
                            $rdm4B +=1;
                            break;
                        case "C":
                            $rdm4C +=1;
                            break;
                        case "D":
                            $rdm4D +=1;
                            break;
                    }
                    $dm5 = $row["domanda_5"];
                    array_push($domanda_5, $dm5);
                    switch($dm5){
                        case "A":
                            $rdm5A +=1;
                            break;
                        case "B":
                            $rdm5B +=1;
                            break;
                        case "C":
                            $rdm5C +=1;
                            break;
                        case "D":
                            $rdm5D +=1;
                            break;
                    }
                    $dm6 = $row["domanda_6"];
                    array_push($domanda_6, $dm6);
                    switch($dm6){
                        case "A":
                            $rdm6A +=1;
                            break;
                        case "B":
                            $rdm6B +=1;
                            break;
                        case "C":
                            $rdm6C +=1;
                            break;
                        case "D":
                            $rdm6D +=1;
                            break;
                    }
                }
            }
            //conto il numero di elementi presenti nell'array
            $n_domnda_1 = count($domanda_1);
            
            $percd1A = ($rdm1A*100)/$n_domnda_1;
            $percd1C = ($rdm1C*100)/$n_domnda_1;
            $percd1D = ($rdm1D*100)/$n_domnda_1;
            $percd1B = ($rdm1B*100)/$n_domnda_1;
            $ad1 = [$percd1A, $percd1B , $percd1C, $percd1D ];
            
            $percd2A = ($rdm2A*100)/$n_domnda_1;
            $percd2C = ($rdm2C*100)/$n_domnda_1;
            $percd2D = ($rdm2D*100)/$n_domnda_1;
            $percd2B = ($rdm2B*100)/$n_domnda_1;
            $ad2 = [$percd2A, $percd2B , $percd2C, $percd2D ];

            $percd3A = ($rdm3A*100)/$n_domnda_1;
            $percd3C = ($rdm3C*100)/$n_domnda_1;
            $percd3D = ($rdm3D*100)/$n_domnda_1;
            $percd3B = ($rdm3B*100)/$n_domnda_1;
            $ad3 = [$percd3A, $percd3B , $percd3C, $percd3D ];

            $percd4A = ($rdm4A*100)/$n_domnda_1;
            $percd4C = ($rdm4C*100)/$n_domnda_1;
            $percd4D = ($rdm4D*100)/$n_domnda_1;
            $percd4B = ($rdm4B*100)/$n_domnda_1;
            $ad4 = [$percd4A, $percd4B , $percd4C, $percd4D ];

            $percd5A = ($rdm5A*100)/$n_domnda_1;
            $percd5C = ($rdm5C*100)/$n_domnda_1;
            $percd5D = ($rdm5D*100)/$n_domnda_1;
            $percd5B = ($rdm5B*100)/$n_domnda_1;
            $ad5 = [$percd5A, $percd5B , $percd5C, $percd5D ];

            $percd6A = ($rdm6A*100)/$n_domnda_1;
            $percd6C = ($rdm6C*100)/$n_domnda_1;
            $percd6D = ($rdm6D*100)/$n_domnda_1;
            $percd6B = ($rdm6B*100)/$n_domnda_1;
            $ad6 = [$percd6A, $percd6B , $percd6C, $percd6D ];

            $tutto =[$ad1, $ad2, $ad3, $ad4, $ad5, $ad6];
        ?>

        <div class="chart-container"> 
            <br>
            
                <canvas id="myChart1" class="myChart1"></canvas>  
                <script >
                    function crea(p_r, testo){ 
                        var risposte_1 = ["A", "B", "C", "D"];
                        
                        var barColors = [
                            "#b91d47",
                            "#00aba9",
                            "#2b5797",
                            "#e8c3b9"
                        ];

                        new Chart("myChart1", {
                        type: "pie",
                        data: {
                            labels: risposte_1,
                            datasets: [{
                            backgroundColor: barColors,
                            data: p_r
                            }]
                        },
                        options: {
                            title: {
                            display: true,
                            text: testo
                            }
                        }
                        });
                    }

                    var p_r = <?php echo json_encode($tutto); ?>;
                    var testo = ["Prima domanda", "Seconda domanda", "Terza domanda", "quarta domanda", "Quinta domanda" , "Sesta domanda"];
                    for (let x in p_r) {
                        crea(p_r[x], testo[x]);
                        var a_capo = "ciao\n";
                    }
                </script> 
        </div>
        
    </body>
</html>