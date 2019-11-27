<?PHP
class quiz{
	private $q1;
	private $q2;
	private $q3;
    private $q4;
    private $q5;
	
	function __construct($q1,$q2,$q3,$q4,$q5){
		$this->q1=$q1;
		$this->q2=$q2;
		$this->q3=$q3;
		$this->q4=$q4;
		$this->q5=$q5;
	}
	
	function getQ1(){
		return $this->q1;
	}
	function getQ2(){
		return $this->Q2;
	}
	function getQ3(){
		return $this->q3;
	}
	function getQ4(){
		return $this->q4;
	}
	function getQ5(){
		return $this->q5;
	}
        function setQ1($q1){
		$this->q1=$q1;
	}

	function setQ2($q2){
		$this->q2=$q2;
	}
	function setQ3($Q3){
		$this->q3=$q3;
	}
	function setQ4($q4){
		$this->q4=$q4;
	}
	function setQ5($q5){
		$this->q5=$q5;
	}
	
}

?>