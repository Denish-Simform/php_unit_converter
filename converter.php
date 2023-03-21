<?php
    $length = array(
        "Inch" => 0.0254,
        "Foot" => 0.3048,
        "Yard" => 0.9144,
        "Mile" => 1609.344,
        "Millimeter" => 0.001,
        "Centimeter" => 0.01,
        "Meter" => 1,
        "Kilometer" => 1000,
    );
    $liter = array(
        "Cubic Meter" => 1000,
        "Cubic Centimeter" => 0.001,
        "Cubic Millimeter" => 0.000001,
        "Liter" => 1
    );
    $speed = array(
        "Lightspeed" => 1079252848.8,
        "Mach" => 1255.08,
        "Mlph" => 1.609344,
        "Mps" => 3.6,
        "Kmph" => 1,
        "Kmps" => 3600,
        "Knot" => 1.852
    );
    $weight = array(
        "Ounce" =>  0.0283495,
        "Pound" => 0.453592,
        "stones" => 6.35029,
        "Tonne" => 1000,
        "Gram" => 0.001,
        "Kilogram" => 1
    );
    if(isset($_GET["data"])) {
        $property = $_GET["data"];  
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/style.css">
</head>
<body>
    <div class="container">
        <div class="parent-wrap p-5 col-6 d-flex flex-column text-center">
            <h1>Convert <?php echo ucfirst($property)?></h1> 
            <div class="div-wrap d-flex justify-content-center mt-3">
                <label for="from" class="col-1 me-1">From:</label>
                <input type="number" name="from" id="from" class="col-2 me-1" min=0>
                <select name="parameter1" id="parameter1">
                    <?php
                        if($property == "length") {
                            foreach($length as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                        if($property == "volume") {
                            foreach($liter as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                        if($property == "speed") {
                            foreach($speed as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                        if($property == "weight") {
                            foreach($weight as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="div-wrap d-flex mt-3 justify-content-center">
                <label for="to" class="col-1 me-1">To:</label>
                <input type="number" name="to" id="to" class="col-2 me-1" disabled>
                <select name="parameter2" id="parameter2">
                    <?php
                        if($property == "length") {
                            foreach($length as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                        if($property == "volume") {
                            foreach($liter as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                        if($property == "speed") {
                            foreach($speed as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                        if($property == "weight") {
                            foreach($weight as $key => $val) {
                                echo "<option value='$val'>" . ucfirst($key) . "</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="mt-3 col-3 submit" onclick="convert()">Convert</button>
        </div>
    </div>
</body>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/font-awesome/js/fontawesome.min.js"></script>
<script src="assets/bootstrap/js/jquery-3.6.3.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/script.js"></script>
</html>