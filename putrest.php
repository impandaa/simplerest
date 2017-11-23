<?php

  include_once 'conn.php';
  function get_mahasiswa($mhs_id=""){
    global $conn;
    header("Content-Type:application/json");
    $response = array();
    if($conn){
      header("HTTP/1.1 200 ". "Retrieving Students");
      $sql  = "SELECT * FROM mahasiswa";

      $result = $conn->query($sql);
      $data = array();
      $response['status']          = 200;
      $response['status_message']  = "Data Found";

      $i=0;
      while ($row = $result->fetch_assoc()) {
        $data[$i]['nama']   = $row['nama'];
        $data[$i]['nim']    = $row['nim'];
        $data[$i]['prodi']  = $row['programstudi'];
        $data[$i]['ipk']    = $row['ipk'];
        $i++;
      }
      $response['data']=$data;
      echo json_encode($response);

    }
    else{
      echo "Error connecting";
    }
  }

  function insert_mahasiswa(){
    global $conn;
    header("Content-Type:application/json");
    $response = array();
    if($conn){
      header("HTTP/1.1 200 ". "Inserting");
      $data   = json_decode(file_get_contents('php://input'), true);

      $nama   = $data['data']['nama'];
      $nim    = $data['data']['nim'];
      $prodi  = $data['data']['prodi'];
      $ipk    = $data['data']['ipk'];
      $sql    = "INSERT INTO mahasiswa(`nama`, `nim`, `programstudi`, `ipk`)
                          VALUES('$nama', '$nim', '$prodi', '$ipk')";
      if ($conn->query($sql)){
          $data = array();
          $response['status']          = 200;
          $response['status_message']  = "Insert Success";
          echo json_encode($response);
      }
      else
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    else{
      echo "Error connecting";
    }
  }

	$request_method=$_SERVER["REQUEST_METHOD"];
	switch($request_method)
	{
		case 'GET':
			// Retrive Products
			if(!empty($_GET["mahasiswa_id"]))
			{
				$product_id=intval($_GET["product_id"]);
				get_mahasiswa($product_id);
			}
			else
			{
				get_mahasiswa();
			}
			break;
		case 'POST':
			// Insert Product
      insert_mahasiswa();
			break;
		case 'PUT':
			// Update Product
      $mahasiswa_id=intval($_GET["mahasiswa_id"]);
			update_product($mahasiswa_id);
			break;
		case 'DELETE':
			// Delete Product
			$mahasiswa_id=intval($_GET["mahasiswa_id"]);
			delete_product($mahasiswa_id);
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
