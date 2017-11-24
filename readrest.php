<?php
$endpoint           = 'http://localhost/kuliah/rest/putrest.php';
$session            = curl_init($endpoint);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$data               = curl_exec($session);
curl_close($session);
$search_results     = json_decode($data, true);
if ($search_results === NULL) die('Error parsing json');

echo '<table>';
foreach ($search_results['data'] as $mahasiswa) {

    $nama     = $mahasiswa["nama"];
    $nim      = $mahasiswa["nim"];
    $umur     = $mahasiswa["prodi"];
    $gambar   = $mahasiswa["ipk"];
    $id       = $mahasiswa["idmahasiswa"];

    echo '<tr>
          <td>' . $nama . '</td>
          <td>' . $nim . '</td>
          <td>' . $umur . '</td>
          <td>' . $gambar . '</td>
          <td>
            <a href="http://localhost/kuliah/rest/edit.php?idmahasiswa='.$id.'">Edit</a>
            <a href="http://localhost/kuliah/rest/hapus.php?idmahasiswa='.$id.'">Hapus</a>
          </td>
    </tr>';


}
echo '</table>';
