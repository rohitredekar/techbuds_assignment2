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
		$sql="INSERT INTO employee_details(`name`,`gender`,`designation`,`city`) VALUES('$fname','$gender','$designation','$city')";

		if($this->mysqli->query($sql)){
		array_push($this->result, $this->mysqli->insert_id);
		return false;
		}else{
		array_push($this->result, $this->mysqli->error);
		return false;

		}
	}


  public function update($id,$name,$gender,$designation,$city)
  {
     
		$sql = "update employee_details set name='$name', gender='$gender', designation='$designation', city='$city' where id='$id'";
		$result = mysqli_query($this->mysqli,$sql);
		return $result;
   }


	public function delete($id)
	{
		$sql="DELETE FROM employee_details WHERE id=$id";
		$result2=mysqli_query($this->mysqli,$sql);
		return $result2;
	}

	

	public function select()
	{
		$query = "SELECT * FROM employee_details";
		$result = mysqli_query($this->mysqli, $query);
		while ($row = mysqli_fetch_array($result)) {
		$data[] = $row;
		}
		return $data;
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