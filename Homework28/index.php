<?php

$filename = "movielist/movies.csv";

$handle = fopen($filename, 'r');

$fileResult = [];

while (!feof($handle)) {

    $fileResult[] = fgetcsv($handle);

};

fclose($handle);

array_shift($fileResult);

$filterGenre= $fileResult;

if(isset($_POST['genre'])){

    $filterGenre = [];
    $selectedGenre = $_POST['genre'];

    foreach ($fileResult as $line) {

        $fileGenre = $line[1];

        if($selectedGenre == $fileGenre){

            $filterGenre[] = $line;

        }
    }
};

$filterYear = $fileResult;

if(isset($_POST['year'])){

    $filterYear = [];
    $selectedYear = $_POST['year'];

    foreach ($fileResult as $line) {

        $fileYear = $line[7];

        if($selectedYear == $fileYear){

            $filterYear[] = $line;

        }
    }
};

$filterStudio = $fileResult;

if(isset($_POST['studio'])){

    $filterStudio = [];
    $selectedStudio = $_POST['studio'];

    foreach ($fileResult as $line) {

        $fileStudio = $line[2];

        if($selectedStudio == $fileStudio){

            $filterStudio[] = $line;

        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework28</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-3">
        <form class="form-row mb-3" method="POST" >
            <div class="col-md-4">
                <label for="inputGenre">Select By Genre:</label>
                <select class="custom-select my-1 mr-sm-2" name="genre">
                    <option selected>Choose...</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Romance">Romance</option>
                    <option value="Drama">Drama</option>
                    <option value="Animation">Animation</option>
                    <option value="Fantasy">Fantasy</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputYear">Select By Year:</label>
                <select class="custom-select my-1 mr-sm-2" name="year">
                    <option selected>Choose...</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputStudio">Select By Studio:</label>
                <select class="custom-select my-1 mr-sm-2" name="studio">
                    <option selected>Choose...</option>
                    <option value="Independent">Independent</option>
                    <option value="The Weinstein Company">The Weinstein Company</option>
                    <option value="20th Century Fox">20th Century Fox</option>
                    <option value="Summit">Summit</option>
                    <option value="CBS">CBS</option>
                    <option value="Fox">Fox</option>
                    <option value="Universal">Universal</option>
                    <option value="New Line">New Line</option>
                    <option value="Disney">Disney</option>
                    <option value="Paramount">Paramount</option>
                    <option value="Warner Bros.">Warner Bros.</option>
                </select>
            </div>
                <button class="btn btn-block btn-secondary mt-3" type="submit">Search</button>
        </form>        
           <table class="table table-striped table-light mt-3">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Year</th>
                    </tr>
                </thead>
            <tbody>

            <?php foreach($filterGenre as $line) :?>
               
                <tr>
                    <td><?php echo $line[0]?></td>
                    <td><?php echo $line[1]?></td>
                    <td><?php echo $line[2]?></td>
                    <td><?php echo $line[7]?></td>
                </tr>

            <?php endforeach;?>

            <?php foreach($filterYear as $line) :?>               
            
               <tr>
                   <td><?php echo $line[0]?></td>
                   <td><?php echo $line[1]?></td>
                   <td><?php echo $line[2]?></td>
                   <td><?php echo $line[7]?></td>
               </tr>               
               
            <?php endforeach;?>

            <?php foreach($filterStudio as $line) :?>
                           
                <tr>
                   <td><?php echo $line[0]?></td>
                   <td><?php echo $line[1]?></td>
                   <td><?php echo $line[2]?></td>
                   <td><?php echo $line[7]?></td>
                </tr>               
               
            <?php endforeach;?>

            </tbody>
        </table>
    </div>
    
</body>
</html>
