<?PHP

include "../entities/quiz.php";
include "../core/quizC.php";

if (isset ($_POST['q1']) and isset($_POST['q2']) and isset($_POST['q3']) and isset($_POST['q4']) and isset($_POST['q5'])){
$quiz1=new quiz($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$quiz1C=new quizC();
$quiz1C->ajouterQuiz($quiz1);
var_dump($quiz1);

	
}else{
	echo "vérifier les champs";
	var_dump($_POST['q1']);
	var_dump($_POST['q2']);
	var_dump($_POST['q3']);
    var_dump($_POST['q4']);
    var_dump($_POST['q5']);
}
//*/

?>