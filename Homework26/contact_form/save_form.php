<?php 
// validate with isset() if $_POST variables name, email and message are set(exist)

// create a string of POST data in format  name | email | message use "\n" to create end of line in file
// for example: alex | alex@app.com | Hello this is my message 

// use file_put_contents()  to  save form data in file requests.txt  use FILE_APPEND to append to the file (not overwrite it)
// check documentation https://www.php.net/manual/en/function.file-put-contents.php for examples

// inform user with Echo that his request is saved and he will be contacted soon via email

$file = "requests.txt";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $input = $_POST['name'] . " | " . $_POST['email'] . " | " . $_POST['message'] . " | " . "\n"; 
    

    if (file_exists($file) && is_writable($file)) {
       
        file_put_contents($file, $input, FILE_APPEND);
        
       
    }
  
    echo "Dear " . $_POST['name'] . ", your request is saved and you will be contacted soon via email message";

}


?>