<?PHP
include "../config.php";
class quizC {

    function ajouterQuiz($quiz){
		$sql="insert into quiz (q1,q2,q3,q4,q5)values(:q1,:q2,:q3,:q4,:q5)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $q1=$quiz->getQ1();
        $q2=$quiz->getQ2();
        $q3=$quiz->getQ3();
        $q4=$quiz->getQ4();
        $q5=$quiz->getQ5();
        
        $req->bindValue(':q1',$q1);
		$req->bindValue(':q2',$q2);
		$req->bindValue(':q3',$q3);
		$req->bindValue(':q4',$q4);
		$req->bindValue(':q5',$q5);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 	function recupererFormateur(){
		
		$req="SELECT * FROM formateur ";
		$db = config::getConnexion();
		$clt=$db->query($req);
		return $clt->fetchAll();
	}
	function recupererFormation(){
		
		$req="SELECT * FROM formation ";
		$db = config::getConnexion();
		$clt=$db->query($req);
		return $clt->fetchAll();
	}
}