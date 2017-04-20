<?php

    $points = array
        (
            array("0-10","16/16"),
            array("11-23","15/17"),
            array("24-36","14/18"),
            array("37-49","13/19"),
            array("50-62","12/20"),
            array("63-75","11/21"),
            array("76-88","10/22"),
            array("89-102","9/23"),
            array("103-116","8/24"),
            array("117-130","7/25"),
            array("131-144","6/26"),
            array("145-158","5/27"),
            array("159-172","4/28"),
            array("173-186","3/29"),
            array("187-200","2/30"),
            array("201+","1/31")
        );
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Points and Ratings
    </title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>
            Points and Ratings
        </h1>

        <table class="table table-bordered">
            <tr>
                <th>Point Difference</th>
                <th>Rating Points</th>
            </tr>

                <?php
                    foreach($points as $point){
                        echo "<tr>";
                        echo "<td>".$point[0]."</td>";
                        echo "<td>".$point[1]."</td>";
                        echo "</tr>";
                    }
                ?>


        </table>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
