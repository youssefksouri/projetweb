<?php
var_dump($_POST['thing']);
if($_POST['thing']=='quiz1')
header('Location: quiz.html');  
else
header('Location: quiz2.html');  

?>