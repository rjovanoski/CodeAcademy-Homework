<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework23_hw02-else-if</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<?php

    echo "<h3>Days of the Week</h3>";

    $day = $_POST['day'];

    if ($day == "Monday"): {
        echo "Laugh on Monday, laugh for danger.";
    }
    elseif ($day == "Tuesday"): {
        echo "Laugh on Tuesday, kiss a stranger.";
    }
    elseif ($day == "Wednesday"): {
        echo "Laugh on Wednesday, laugh for letter.";
    }
    elseif ($day == "Thursday"): {
        echo "Laugh on Thursday, something better.";
    }
    elseif ($day == "Friday"): {
        echo "Laugh on Friday, laugh for sorrow.";
    }
    elseif ($day == "Saturday"): {
        echo "Laugh on Saturday, joy tomorrow.";
    }
    elseif ($day == "Sunday"): {
        echo "Laugh on Sunday, enjoy day at home.";
    };

?>
<?php

    else :{};

?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="day">Please enter days of week:</label>
                <input type="text" class="form-control col-md-3" name="day" id="day">
                <button type="submit" class="btn btn-primary mt-3">GO</button>
        </div>
    </form>

<?php

    endif;
?>

</body>
</html>