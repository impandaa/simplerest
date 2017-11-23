<?php
$nama   = $_POST['nama'];
$nim    = $_POST['nim'];
$prodi  = $_POST['prodi'];
$ipk    = $_POST['ipk'];
$senddata = array(
        'nama'  => $nama,
        'nim'   => $nim,
        'prodi' => $prodi,
        'ipk'   => $ipk,
                  );
$data   = json_encode( array( 'data' => $senddata  ), JSON_FORCE_OBJECT );

$context = array(
    'http' => array(
            'method'    =>  'POST',
            'header'    =>  "Content-Length: " . strlen( $data ) . "\r\nContent-Type: application/json\r\n",
            'content'   =>  $data
        )
    );

$context  = stream_context_create( $context );
$url      = "http://localhost/kuliah/rest/putrest.php";
$result   = file_get_contents( $url, false, $context );
$response = json_decode($result, true);

if($response['status'] == '200')
  header('Location: readrest.php');

 ?>
