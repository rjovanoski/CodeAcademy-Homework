#  Homework26
Create "Homework26" folder in your C:\caphp\public folder

##  Homework 26 01

### Contact form   

Copy contact_form into your Homework26 directory   
Access url: ```app.test/Homework26/contact_form/index.php```   
Modify save_form.php file to accept data from form and save this data to file requests.txt (Check comments in save_form.php for details). Check out EXAMPLE_requests.txt file (ONLY AS DEMO FILE FOR YOU) - such file you should get as result of your script - if you enter few times message in contact form it will add the data into the file line by line.

## Homework 26 02

### Visit counter 
Access url: ```app.test/Homework26/visit_counter/index.php```
Copy visit_counter into your Homework26 directory. In index.php on top of file start session, everytime you refresh the page counter on the page should increase by one

## Homework 26 03
### Javascript Quiz
Access url: ```app.test/Homework26/quiz/index.php```   

1. Modify index.php to start a session. If Post variable "answer" exist (which means we sent answer form) create in $_SESSION variable associative array of type ['quiz']['q1'] and assgin the answer from a form there for first question, ['quiz']['q2'] for second question and so on...
In this way we will keep the array of each user question and answer as key value pair in $_SESSION['quiz'] variable.   

2. Modify result.php in such way it will read the file with answers (answers.ini) and than in foreach loop compare array of correct answers with user answers that are in $_SESSION['quiz'], create a result array $results that will have keys :   
 - "question" that will consist the question name in form "q1","q2" 
 - "user_answer" that will consist the user answer from $_SESSION['quiz'] array( represented by number)
 - "correct_answer" that will consist the correct answer from answers.ini file array( represented by number)   
 Print this array in tbody of table in result.php

Extra: To make it more fun try to highlight correct answers with green background, and not correct with red.

3. Create 3 more your questions about Javascript(q3.php, q4.php, q5.php in folder \questions). For this create q3.php in questions folder, copy paste the template code from q2.php, modify the question in paragraph and answers accordinly. Make same for p4.php, p5.php. Modify SWITCH statement in index.php to display the answers. Add correct answers in answers.ini file in format question id (q3) = correct answer ( For example q3=1 if first radio button is correct answer)  

4. Study this project and try to create other Quiz(Be creative) from scratch to memorize the techniques used in this project   

5. Check yourself and your friends Javascript skills in this quiz !   


GOOD LUCK!
