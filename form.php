<!DOCTYPE html>
<html lang="en">
    <head>

        <title>โปรแกรมหาจำนวนเฉพาะ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>


        <div class="container bg-grey">
            <br><br>
            <h2 class="text-center set_head">โปรแกรมหาจำนวนเฉพาะ</h2>
            <br><br>
            <div class="row">

                <form method="post">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input class="form-control" value="0" id="number1" name="number1" placeholder="จำนวนตั้งแต่" type="number" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <input class="form-control" value="10" id="number2" name="number2" placeholder="ถึงจำนวน" type="number" required>
                            </div>
                        </div>
                        <button class="btn btn-default pull-left" type="submit">ตกลง</button>
                        <br>
                    </div>
                </form>
                <div class="col-sm-6 form-group pull-left">
                    <div class="set_show"><?php
                        $stotol = '';
                        if (isset($_POST['number1']) && isset($_POST['number2'])) {
                            $stotol = number($_POST['number1'], $_POST['number2']);
                            printlog($_POST['number1'], $_POST['number2'], $stotol);
                            echo $stotol;
                        } else {
                            echo "กรุณาป้อนข้อมูล";
                        }
                        ?></div>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>


        <footer> @2017 โปรแกรมหาจำนวนเฉพาะ Created by  นาเมียนประ / แก้มแว่น / โบ๊ทเยส / โอเชียน/ เนสศรราม</footer>

    </body>

    <?php

    function number($num1, $num2) {
        $x = $num1;
        $x2 = '';
        $total = '';
        while ($x <= $num2) {
            if (($x != 7) && ($x % 7) == 0){
                $x = $x++;
            }
            elseif (($x != 5) && ($x % 5) == 0){
                $x = $x++;
            }
            elseif (($x != 3) && ($x % 3) == 0){
                $x = $x++;
            }
            elseif (($x != 2) && ($x % 2) == 0){
                $x = $x++;
            }
            else{
                $total .= $x . " , ";
            }
            $x++;
        }
        return $total;
    }

    function printlog($num1, $num2, $stotol1) {
        $file = 'log.txt';
        $oldContents = file_get_contents($file);
        $fr = fopen($file, 'w');
        $strText2 = "$num1  to  $num2  =  $stotol1 Date: " . date('d/m/Y', time()) . "\n";
        fwrite($fr,$strText2);
        fwrite($fr, $oldContents);
        fclose($fr);
    }
    ?>

    <style>
        footer{
            color: #000;
            text-align: center;
            padding-bottom: 50px;
            position: absolute;
            bottom: 0px;
            width: 100%;

        }
        .set_head{
            font-size: 41px;
            font-weight: bolder;
            letter-spacing: 4px;
            color: whitesmoke;
            text-shadow: 1px 1px 2px #9c9393, 0 0 25px #b9b2b2, 0 0 5px white;
        }

        .btn-default {
            width: 100%;
            height: 115px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .set_show{
            background-color: white;
            height: 163px;
            font-size: 25px;
            text-align: left;
            padding: 9px;
            overflow: auto;
        }

        html,body{
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(141deg, #2b9a93 0%, #175b63 51%, #1b3d4a 75%);
            background-repeat: no-repeat;
            font-size: 16px;
        }


    </style>


</html>
