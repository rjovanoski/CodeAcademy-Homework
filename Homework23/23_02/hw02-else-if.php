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

    else:;

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>