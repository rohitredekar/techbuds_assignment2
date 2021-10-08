<?php 

class database{

	private $db_host="localhost";
	private $db_user="root";
	private $db_pass="";
	private $db_name="TechBuds";

	private $conn= false;
	private $mysqli="";
	private $result=array();

	public function __construct()
	{
		if(!$this->conn){
		$this->mysqli =new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		$this->conn=true;
		if($this->mysqli->connect_error){
		array_push($this->result, $this->mysqli->connect_error);
		return false;
		}
		}else{
		return true;
		}

	}

	public function insert($fname,$gender,$designation,$city)
	{
		$this->sql="INSERT INTO employee_details(`name`,`gender`,`designation`,`city`) VALUES('$fname','$gender','$designation','$city')";
		$this->result = mysqli_query($this->mysqli,$this->sql);
		return $this->result; 
		
	}


  public function update($id,$name,$gender,$designation,$city)
  {
     
		$this->sql = "update employee_details set name='$name', gender='$gender', designation='$designation', city='$city' where id='$id'";
		$this->result = mysqli_query($this->mysqli,$this->sql);
		return $this->result;
   }


	public function delete($id)
	{
		$this->sql="DELETE FROM employee_details WHERE id=$id";
		$this->result2=mysqli_query($this->mysqli,$this->sql);
		return $this->result2;
	}

	

	public function select()
	{
		$this->query = "SELECT * FROM employee_details";
		$this->result = mysqli_query($this->mysqli, $this->query);
		while ($this->row = mysqli_fetch_array($this->result)) {
		$this->data[] = $this->row;
		}
		return $this->data;
	}


	public function __destruct()
	{
		if($this->conn){
		if($this->mysqli->close()){
		$this->conn=false;
		return true;
		}

		}else{
		return false;
		}
	}


}



?>