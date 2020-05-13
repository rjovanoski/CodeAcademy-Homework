<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php

    echo "<h3>Pick a Day</h3>";
 
    $day = $_POST['day'];

    if (isset($_POST['day'])): {
        
        switch ($day) {
            case 'Monday':
                $days =  "Laugh on Monday, laugh for danger.";
                echo $days;
                echo "<form action='hw02-switch.php'><button class='btn btn-primary mt-3'>Back</button></form>";
                break;
            case 'Tuesday':
                $days = "Laugh on Tuesday, kiss a stranger.";
                echo $days;
                echo "<form action='hw02-switch.php'><button class='btn btn-primary mt-3'>Back</button></form>";
                break;
            case 'Wednesday':
                $days ="Laugh on Wednesday, laugh for letter.";
                echo $days;
                echo "<form action='hw02-switch.php'><button class='btn btn-primary mt-3'>Back</button></form>";
                break;
            case 'Thursday':
                $days = "Laugh on Thursday, something better.";
                echo $days;
                echo "<form action='hw02-switch.php'><button class='btn btn-primary mt-3'>Back</button></form>";
                break;
            case 'Friday':
                $days = "Laugh on Friday, laugh for sorrow.";
                echo $days;
                echo "<form action='hw02-switch.php'><button class='btn btn-primary mt-3'>Back</button></form>";
                break;
            case 'Saturday':
                $days = "Laugh on Saturday, joy tomorrow.";
                echo $days;
                echo "<form action='hw02-switch.php'><button class='btn btn-primary mt-3'>Back</button></form>";
                break;
            case 'Sunday':
                $days = "Laugh on Saturday, joy tomorrow.";
                echo $days;
                echo "<form action='hw02-switch.php'><button class='btn btn-primary mt-3'>Back</button></form>";
                break;
            default:
                echo "Nothing Selected!";
                break;
        }
    };

?>
<?php

    else:;

?>

    <form action="" method="POST">
        <label for="select">Please choose a day:</label>
            <select id="day" class="form-control col-md-3" name="day">
                <option value="" selected>Choose...</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
                <button type="submit" class="btn btn-primary mt-3">GO</button>
    </form>

<?php

    endif;
    
?>

</body>
</html>