<?PHP

include "../entities/reclamation.php";
include "../core/ReclamationC.php";

if (isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['subject']) and isset($_POST['message'])){
$reclamation1=new Reclamation(null,$_POST['nom'],$_POST['email'],$_POST['subject'],$_POST['message']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
var_dump($reclamation1);

	
}else{
	echo "vérifier les champs";
	var_dump($_POST['nom']);
	var_dump($_POST['email']);
	var_dump($_POST['subject']);
	var_dump($_POST['message']);
}
//*/

?>