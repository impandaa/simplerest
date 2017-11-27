<?php
$nama   = $_POST['nama'];
$nim    = $_POST['nim'];
$prodi  = $_POST['prodi'];
$ipk    = $_POST['ipk'];
// {"nama":"jsjs","nim":"snnsjs","prodi":"bzbzjz","ipk":"nznznz"}
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
            'content'   =>  http_build_query($senddata)
        )
    );

$context  = stream_context_create( $context );
$url      = "http://localhost/kuliah/rest/putrest.php?mahasiswa_id=".$_GET['mahasiswa_id'];
$result   = file_get_contents( $url, false, $context );
$response = json_decode($result, true);
var_dump($response);
if($response['status'] == '200')
  header('Location: readrest.php');

 ?>
