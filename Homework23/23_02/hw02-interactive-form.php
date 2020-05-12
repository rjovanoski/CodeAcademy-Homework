

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework23_hw02-interactive-form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<?php
    echo "<h3>Favorite City</h3>";
    
    $city = $_POST['city'];
    
    if (isset($_POST['city'])):
        echo "Your favorite city is: " . $city;
?> 


<?php
    
    else :

?>
    
        <form action="" method="POST">
            <div class="form-group">
                <label for="city">Please enter your favorite city:</label>
                    <input type="text" class="form-control col-md-3" name="city" id="city">
                        <button type="submit" class="btn btn-primary mt-3">GO</button>
            </div>
        </form>
    
        
<?php

    endif

?>




</body>
</html>