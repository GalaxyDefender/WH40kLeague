<?php 

include("connection.php");

    if( isset( $_POST["add"] ) ) {
        
        // build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
            return $formData;
        }
        
        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function
        
        //set all variables to empty on default
        $player_name = $email = $faction = "";
        
        if( !$_POST["player_name"] ) {
            $nameError = "Please enter your name!<br>";
        } else {
            $player_name = validateFormData( $_POST["player_name"] );
        }
        
        if( !$_POST["email"] ) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData( $_POST["email"] );
        }
        
//        if( !$_POST["password"] ) {
//            $passwordError = "Please enter a password <br>";
//        } else {
//            $password = validateFormData( $_POST["password"] );
//        }
//        
        if ($player_name && $email) {
            
            $query = "INSERT INTO players (id, player_name, army_faction, email, signup_date) 
            VALUES (NULL, '$player_name', '', '$email', CURRENT_TIMESTAMP)" ;

            if(mysqli_query($conn, $query)){
                echo "<div class='alert alert-success'>New record in database</div>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn); 
            }      
        }
    }
        mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Sign up
    </title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>
            Player Sign up
        </h1>


        <p class="text-danger">* Required fields</p>

        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
            <small class="text-danger">* <?php echo $nameError; ?></small>
            <input type="text" placeholder="Full name" name="player_name"><br><br>
            
            <?php
            
                $factions = array
                    (
                        array("Space Marines","SM"),
                        array("Dark Angels","DA"),
                        array("Blood Angels","BA"),
                        array("Space Wolves","SW"),
                        array("Grey Knights","GK"),
                        array("Skitarii","skitarii"),
                        array("Chaos Space Marines","CSM"),
                        array("Eldar","eldar"),
                        array("Astra Millitarum","ASM"),
                        array("Millitarum Tempestus","MT"),
                        array("Inquisition","inq"),
                        array("Adepta Sororitas","AS"),
                        array("Cult Mechanicus","admech"),
                        array("Fallen Angels","fallen"),
                        array("Chaos Daemons", "deamons"),
                        array("Dark Eldar", "DE"),
                        array("Harlequins", "harleys"),
                        array("Ynnari", "ynnari"),
                        array("Tau", "tau"),
                        array("Orks", "orks"),
                        array("Necrons", "necrons"),
                        array("Tyranids", "nids"),
                        array("Genestealer Cults", "GC"),
                        array("Sisters of Silence", "SS"),
                        array("Adeptus Custodes", "custodes")           
                    );
                sort($factions);
            
                echo "<select name='faction' class='form-control'>";
                echo "<option value=''>Please Select Faction</option>";
                foreach($factions as $faction){
                    echo "<option value=".$faction[1].">".$faction[0]."</option>";
                }
                echo "</select>";
                
            ?>

            <small class="text-danger">* <?php echo $emailError; ?></small>
            <input type="text" placeholder="Email" name="email"><br><br>
                    
            <input type="submit" name="add" value="Sign Up">
        </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
