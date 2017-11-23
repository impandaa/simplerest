<?php

include_once 'conn.php';
header("Content-Type:application/json");
$response = array();
if($conn){
  header("HTTP/1.1 200 ". "Product Found");
  $sql  = "SELECT * FROM mahasiswa";
  if ($conn->query($sql)){
      $result = $conn->query($sql);
      $data = array();

      $response['status']          = 200;
    	$response['status_message']  = "Data Found";

      $i=0;
      while ($row = $result->fetch_assoc()) {
        $data[$i]['nama']   = $row['nama'];
        $data[$i]['nim']    = $row['nim'];
        $data[$i]['programstudi']   = $row['programstudi'];
        $data[$i]['ipk'] = $row['ipk'];
        $i++;
      }
      $response['data']=$data;
      $json_response = json_encode($response);
      echo $json_response;
  }
  else
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else{
  echo "Error connecting";
}
?>
