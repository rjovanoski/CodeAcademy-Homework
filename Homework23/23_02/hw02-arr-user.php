<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework23-02_arr-user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
<?php

    echo "<h3>How's your weather?</h3>";

    if (isset($_POST['city']) && isset($_POST['month']) && isset($_POST['year'])):{

        $inputArr = [
        
            $_POST['city'],
            $_POST['month'],
            $_POST['year']
    
        ];

        echo "In " . ucfirst($inputArr[0]) . " in the month of " . ucfirst($inputArr[1]) . " " . $inputArr[2] . ", you observed the following weather: ";
             
        foreach ($_POST['weather'] as $value) {
            
            echo "<li>" . ucfirst($value) . "</li>";

        }
    };
    
?>

<?php

    else:;

?>

    <form class="m-3" action="" method="POST">
        <p>Please enter your information:</p>
        <div class="form-group row">
            <label for="inputCity">City</label>
                <div class="col-sm-3">
                    <input type="text" class="col-md-12 col-form-control" id="inputCity" name="city">
                </div>
                    <label for="inputCity">Month</label>
                        <div class="col-sm-3">
                        <input type="text" class="col-md-12 col-form-control" id="inputMonth" name="month">
                        </div>
                            <label for="inputYear">Year</label>
                                <div class="col-sm-3">
                                    <input type="text" class="col-md-12 col-form-control" id="inputYear" name="year">
                                </div>
        </div>
            <p>Please choose the kinds of weather you experienced from the list bellow.</p>
            <p>Choose all that apply</p>
                <div class="form-group">
                    <input type="checkbox" id="sunshine" name="weather[]" value="sunshine">
                    <label>Sunshine</label>
                </div>
                    <div class="form-group">
                        <input type="checkbox" id="cloud" name="weather[]" value="clouds">
                        <label>Clouds</label>
                    </div>
                        <div class="form-group">
                            <input type="checkbox" id="rain" name="weather[]" value="rain">
                            <label>Rain</label>
                        </div>
                            <div class="form-group">
                                <input type="checkbox" id="hail" name="weather[]" value="hail">
                                <label>Hail</label>
                            </div>
                                <div class="form-group">
                                    <input type="checkbox" id="sleet" name="weather[]" value="sleet">
                                    <label>Sleet</label>
                                </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="snow" name="weather[]" value="snow">
                                        <label>Snow</label>
                                    </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="wind" name="weather[]" value="wind">
                                            <label >Wind</label>
                                        </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="cold" name="weather[]" value="cold">
                                                <label>Cold</label>
                                            </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="heat" name="weather[]" value="heat">
                                                    <label>Heat</label>
                                                </div>
                                                    <button type="submit" class="btn btn-primary">GO</button>
    </form>

<?php

    endif;
?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>