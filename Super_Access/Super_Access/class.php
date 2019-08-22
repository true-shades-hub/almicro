<?php
error_reporting(0);
class DataBase {
	private $servername;
	private $username;
	private $password;
	private $dbname;
	function connect() {
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "almicro";
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		return $conn;
	}
}	

// Create Connectin
class Insert extends DataBase {
    public $insert_name,$meta,$insert_keyword,$discripation,$display,$insert_cid,$insert_catlog,$insert_sid,$insert_url,$insert_order;
 

    public function Category($name,$title,$keyword,$descr){
        $this->insert_name = $name;
        $this->meta = $title;
        $this->insert_keyword = $keyword;
        $this->discripation = $descr;
        $insert = "INSERT INTO category (`category`, `titlewords`, `keywords`, `descr`)VALUES ('$this->insert_name', '$this->meta', '$this->insert_keyword', '$this->discripation')";
         
            $qry =$this->connect()->query($insert);

        if($qry)
        {
			$this->display = "<div class='alert alert-success' role='alert'>
			<strong>Well done!</strong> Successfully  Add new category.
			</div>";
        }
        else
        {
			$this->display ="<div class='alert alert-danger' role='alert'>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>";
        }
	}
	
	function Sub_Category($name,$cid,$title,$keyword,$descr){
		$this->insert_name = $name;
		$this->insert_cid = $cid;
		$this->meta = $title;
        $this->insert_keyword = $keyword;
        $this->discripation = $descr;
        $insert = "INSERT INTO subcategory (`subc_name`, `catid`,`meta`,`keywords`, `descr`)VALUES ('$this->insert_name','$this->insert_cid', '$this->meta', '$this->insert_keyword', '$this->discripation')";
		$qry =$this->connect()->query($insert);

        if($qry)
        {
			$this->display = "<div class='alert alert-success' role='alert'>
			<strong>Well done!</strong> Successfully  Add new Sub category.
			</div>";
        }
        else
        {
			$this->display ="<div class='alert alert-danger' role='alert'>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>";
        }

	}
	
	Public function Banner($title,$url)
	{
		
		$this->insert_name = $title;
		$this->insert_url = $url;

		 $insert = "INSERT INTO `banners` (`b_titile`, `b_url`) VALUES ('$this->insert_name', '$this->insert_url') ";
		$qry =$this->connect()->query($insert);
		echo $insert;
        if($qry)
        {
			$this->display = "<div class='alert alert-success' role='alert'>
			<strong>Well done!</strong> Successfully  Add new Banner.
			</div>";
        }
        else
        {
			$this->display ="<div class='alert alert-danger' role='alert'>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>";
        }
	}
	Public function Gallery($title,$url)
	{
		
		$this->insert_name = $title;
		$this->insert_url = $url;

		 $insert = "INSERT INTO `gallery` (`g_title`, `g_url`) VALUES ('$this->insert_name', '$this->insert_url') ";
		$qry =$this->connect()->query($insert);
		echo $insert;
        if($qry)
        {
			$this->display = "<div class='alert alert-success' role='alert'>
			<strong>Well done!</strong> Successfully  Add Image.
			</div>";
        }
        else
        {
			$this->display ="<div class='alert alert-danger' role='alert'>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>";
        }
	}

	function Product($name,$cid,$sid,$url,$title,$keyword,$descr,$order,$clog){
		$this->insert_name = $name;
		$this->insert_order = $order;
		$this->insert_cid = $cid;
		$this->insert_sid = $sid;
		$this->insert_url = $url;
		$this->meta = $title;
        $this->insert_keyword = $keyword;
		$this->discripation = $descr;
		$this->insert_catlog = $clog;
		$insert = "INSERT INTO product (`product`, `catid`,`subcatid`,`path`,`orders`, `titlewords`,`keywords`,`descr`,`clog_path`)VALUES ('$this->insert_name','$this->insert_cid', '$this->insert_sid', '$this->insert_url', '$this->insert_order', '$this->meta', '$this->insert_keyword', '$this->discripation','$this->insert_catlog')";
	
		$qry =$this->connect()->query($insert);
		
        if($qry)
        {
			$this->display = "<div class='alert alert-success' role='alert'>
			<strong>Well done!</strong> Successfully  Added New PRoduct.
			</div>";
        }
        else
        {
			$this->display ="<div class='alert alert-danger' role='alert'>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>";
        }

	}

}
// Select Class
Class Select extends Database {
	public $cate_name,$meta,$keyword,$discripation,$display,$iwere;
	Public function Category()
	{
		
        $select = "Select * from Category";
        $result = $this->connect()->query($select);
        //$result = mysqli_query($conn,$select);

        return $result; 
	}
	Public function Category_were($were)
	{
		$this->iwere = $were;
		$select = "Select * from Category where catid ='$this->iwere' ";
		$result = $this->connect()->query($select);
		//$fetch = $result->fetch_assoc();
		return $result; 
	}
	Public function Subc_were($were)
	{
		$this->iwere = $were;
		$select = "Select * from subcategory where s_id ='$this->iwere' ";
		$result = $this->connect()->query($select);
	
		return $result; 
	}
	Public function Sub_were($were)
	{
		$this->iwere = $were;
		$select = "Select * from subcategory where catid ='$this->iwere' ";
		$result = $this->connect()->query($select);
		
		return $result;
	
	}
	Public function p_were($were)
	{
		$this->iwere = $were;
		$select = "Select * from product where pid ='$this->iwere' ";
		$result = $this->connect()->query($select);
		
		return $result;
	
	}
	Public function Subcategory()
	{
		
        $select = "Select * from subcategory  ";
        $result = $this->connect()->query($select);
        //$result = mysqli_query($conn,$select);

        return $result; 
	}

	Public function Banner()
	{
		
		$select = "Select * from banners  ";
        $result = $this->connect()->query($select);
        //$result = mysqli_query($conn,$select);

        return $result; 
	}
	Public function Gallery()
	{
		
		$select = "Select * from gallery  ";
        $result = $this->connect()->query($select);
        //$result = mysqli_query($conn,$select);

        return $result; 
	}
	Public function Product()
	{
		
		$select = "Select * from product";
        $result = $this->connect()->query($select);
       // $result = mysqli_query($conn,$select);
        return $result; 
	}


}

// Delete 
Class Delete Extends DataBase{

	public function Category($were){
		$this->iwere = $were;
		$delete ="DELETE FROM `category` WHERE `category`.`catid` = '$this->iwere'";
		$this->connect()->query($delete);
		
	}
	public function Subcategory($were){
		$this->iwere = $were;
		$delete ="DELETE FROM `subcategory` WHERE `subcategory`.`s_id` = '$this->iwere'";
		$this->connect()->query($delete);
		
	}

	public function Banner($were){
		$this->iwere = $were;
		$select ="Select * FROM `banners` WHERE `banners`.`b_id` = '$this->iwere'";
		$file = $this->connect()->query($select);
		$filename = $file->fetch_assoc();
		$filenam = $filename[b_url];
		if (file_exists($filenam)) {
		  unlink($filenam);
		}
		$delete ="DELETE FROM `banners` WHERE `banners`.`b_id` = '$this->iwere'";
		$this->connect()->query($delete);
		echo $delete;
	}
	public function Gallery($were){
		$this->iwere = $were;
		$select ="Select * FROM `gallery` WHERE `gallery`.`g_id` = '$this->iwere'";
		$file = $this->connect()->query($select);
		$filename = $file->fetch_assoc();
		$filenam = $filename[g_url];
		if (file_exists($filenam)) {
		  unlink($filenam);
		}
		
		  
		$delete ="DELETE FROM `gallery` WHERE `gallery`.`g_id` = '$this->iwere'";
		$this->connect()->query($delete);
		
	}
	public function Product($were){
		$this->iwere = $were;
		$select ="Select * FROM `product` WHERE `product`.`pid` = '$this->iwere'";
		$file = $this->connect()->query($select);
		$filename = $file->fetch_assoc();
		$filenam = $filename[path];
		$filecate = $filename[clog_path];
		if (file_exists($filenam)) {
		  unlink($filenam);
		}
		if (file_exists($filecate)) {
			unlink($filecate);
		  }
		$delete ="DELETE FROM `product` WHERE `product`.`pid` = '$this->iwere'";
		$this->connect()->query($delete);
		
	}
}
	// Update
Class Update Extends DataBase{

	function Category($catid,$name,$meta,$key,$desr)

	{
		$update = "UPDATE `category` SET 
						`category` = '$name' ,
						`titlewords` = '$meta' ,
						`keywords` = '$key' ,
						`descr` = '$desr' 
						 WHERE `category`.`catid` = $catid" ;
			 
		$qry = $this->connect()->query($update);
		if($qry)
		{
			echo "<script> window.location = 'show_cate.php'  </script>";
		}
}

function Subcategory($scid,$catid,$name,$meta,$key,$desr)

{
	$update = "UPDATE `subcategory` SET 
					`catid` = '$catid',
					`subc_name` = '$name' ,
					`meta` = '$meta' ,
					`keywords` = '$key' ,
					`descr` = '$desr' 
					 WHERE `subcategory`.`s_id` = $scid" ;
		
	$qry = $this->connect()->query($update);
	if($qry)
	{
		echo "<script> window.location = 'show_subcate.php'  </script>";
	}
}

function Product($pid,$scid,$catid,$name,$path,$order,$meta,$key,$desr,$clog)

{
	$update = "UPDATE `product` SET 
				
					`catid` = '$catid',
					`subcatid` = '$scid',
					`product` = '$name' ,
					`orders` = '$order',
					`path` = '$path',
					`titlewords` = '$meta' ,
					`keywords` = '$key' ,
					`descr` = '$desr' ,
					`clog_path` = '$clog'
					 WHERE `product`.`pid` = $pid" ;
	$update;	 
	$qry = $this->connect()->query($update);
	if($qry)
	{
		echo "<script> window.location = 'showproducts.php'  </script>";
	}
}
}
