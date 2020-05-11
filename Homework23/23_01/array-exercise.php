<?php

$a = array( 0, 1, 2, 3, 4 );

echo "<h2>" . $a[3] . "</h2>";

$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );

echo "<h2>" . $a['three'] . "</h2>";

$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);

echo "<h2>" . $a[1][1][0] . "</h2>";

$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1 //mistake on this you did't close quotation marks in the homework that you gave us
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);

echo "<h2>" . $a['b']['o']['b'] . "</h2>";


$a = "a,b,c,d,e,f";
$aexplode = explode(",",$a);
var_dump($aexplode);

echo "<br>";
echo "<br>";

$arrFromFive;
foreach ($aexplode as $value){
    $arrFromFive[$value] = $value;
};
var_dump($arrFromFive);

echo "<br>";
echo "<br>";

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// want to output
/*$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"
);*/
$keysAndValues = array_combine($keys, $values);
var_dump($keysAndValues);

echo "<br>";
echo "<br>";

$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

// outputs
/*$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3,
        "amount"=>1
    ),
    array(
        "debit"=>15,
        "credit"=>14,
        "amount"=>1
    )
);*/

$amountOne = abs ($transactions[0]["debit"] - $transactions[0]["credit"]);
$amountTwo = abs ($transactions[1]["debit"] - $transactions[1]["credit"]);

$transactions[0]["amount"] = $amountOne;
$transactions[1]["amount"] = $amountTwo;

var_dump($transactions);


echo "<br>";
echo "<br>";

$a = array( 0, 1, 2, 3, 4, 5, 6 );
$sum = 0;

foreach($a as $value){
    $sum +=$value;
}
echo "Sum of array is: " . $sum;

?>