<?php
  include_once 'conn.php';
  function get_mahasiswa($mhs_id=""){
    global $conn;
    $response = array();
    if($conn){
      if($mhs_id == "")
        $sql                         = "SELECT * FROM mahasiswa";
      else
        $sql                         = "SELECT * FROM mahasiswa WHERE idmahasiswa=$mhs_id";
      $result                      = $conn->query($sql);
      $data                        = array();
      $response['status']          = 200;
      $response['status_message']  = "Data Found";
      $i=0;
      while ($row = $result->fetch_assoc()) {
        $data[$i]['nama']         = $row['nama'];
        $data[$i]['idmahasiswa']  = $row['idmahasiswa'];
        $data[$i]['nim']          = $row['nim'];
        $data[$i]['prodi']        = $row['programstudi'];
        $data[$i]['ipk']          = $row['ipk'];
        $data[$i]['foto']         = $row['foto'];
        $i++;
      }
      $response['data']=$data;
      echo json_encode($response);
    }
    else{
      $response['status']          = 412;
      $response['status_message']  = "Read Failure";
      echo json_encode($response);
    }
  }
  function submit_mahasiswa($idmhs=""){
    global $conn;
    $response = array();
    $nama   = $_POST['nama'];
    $nim    = $_POST['nim'];
    $prodi  = $_POST['prodi'];
    $ipk    = $_POST['ipk'];
    if($conn){
      if($idmhs == ""){

        $sql    = "INSERT INTO mahasiswa(`nama`, `nim`, `programstudi`, `ipk`)
                          VALUES('$nama', '$nim', '$prodi', '$ipk')";
      }
      else
      {
        // $_PUT = json_decode(file_get_contents("php://input"), true);
        //
        // $nama   = $_PUT['nama'];
        // $nim    = $_PUT['nim'];
        // $prodi  = $_PUT['prodi'];
        // $ipk    = $_PUT['ipk'];
        $sql = "UPDATE `mahasiswa`
               SET `nama`='$nama',
                   `nim`='$nim',
                   `programstudi`='$prodi',
                   `ipk`='$ipk'
               WHERE `idmahasiswa`=$idmhs";
      }
  
      if ($conn->query($sql)){
          $data = array();
          $response['status']          = 200;
          $response['status_message']  = "Commit Success";
          echo json_encode($response);
      }
      else{
        $response['status']          = 417;
        $response['status_message']  = "Commit Failure";
        echo json_encode($response);
      }

    }
    else{
      $response['status']          = 412;
      $response['status_message']  = "Error Connecting";
      echo json_encode($response);
    }
  }

	$request_method=$_SERVER["REQUEST_METHOD"];
  header("Content-Type:application/json");
	switch($request_method)
	{
		case 'GET':
			// Retrive Products
      header("HTTP/1.1 200 ". "Perfectly Fine");
			if(!empty($_GET["mahasiswa_id"]))
			{
				$mhs_id=intval($_GET["mahasiswa_id"]);
				get_mahasiswa($mhs_id);
			}
			else
			{
				get_mahasiswa();
			}
			break;
		case 'POST':
      header("HTTP/1.1 200 ". "Perfectly Fine");
			// Insert Product

      if(isset($_GET["mahasiswa_id"])){
         $mahasiswa_id=intval($_GET["mahasiswa_id"]);
			   submit_mahasiswa($mahasiswa_id);
      }
      else
        submit_mahasiswa();
			break;
		case 'PUT':
			// Update Product
      header("HTTP/1.1 200 ". "Perfectly Fine");
      $mahasiswa_id=intval($_GET["mahasiswa_id"]);
			submit_mahasiswa($mahasiswa_id);
			break;
		case 'DELETE':
			// Delete Product
      header("HTTP/1.1 200 ". "Perfectly Fine");
			$mahasiswa_id=intval($_GET["mahasiswa_id"]);
			delete_product($mahasiswa_id);
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.1 405 Method Not Allowed");
			break;
	}
