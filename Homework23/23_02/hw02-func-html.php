<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
<?php

    echo "<h3>Days in a Month</h3>";

    $months = [
        "January" => 31, 
        "Fevruary" => "28 days, if leap year 29",
        "March" => 31, 
        "April" => 30, 
        "May" => 31, 
        "June" => 30, 
        "July" => 31, 
        "August" => 31, 
        "September" => 30, 
        "October" => 31, 
        "November" => 30,
        "December" => 31
    ];
    
    if (isset($_POST['months'])): {
        
        $month = $_POST['months'];
        
        foreach ($months as $key => $value) {
            
            if ($month === $key) {
                
                echo "The Mounth of " . $month . " has ". $value . " days.<br>";

            }
        }
        
    }; 
    
?>

<?php

    else:;

?>
    <form action="" method="post">
        <label for="select">Please choose a month:</label>
            <select id="month" class="form-control col-md-3 mb-3" name="months">
                <option value="" selected>Choose...</option>
                <option value="January">January</option>
                <option value="Fevruary">Fevruary</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
                <button class="btn btn-primary mt-3" type="submit">GO</button>
    </form>

<?php

    endif;

?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>