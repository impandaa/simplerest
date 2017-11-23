<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TITLE</title>
    <meta name="description" content="DESCRIPTION">
   <link rel="stylesheet" href="PATH">

    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
 <form action="submit.php" method="post">
   <table>
       <tr>
           <td>Nama</td>
           <td>:</td>
           <td><input type="text" name="nama"></td>
       </tr>
       <tr>
           <td>Nim</td>
           <td>:</td>
           <td><input type="text" name="nim"></td>
       </tr>
       <tr>
           <td>Program Studi</td>
           <td>:</td>
           <td><input type="text" name="prodi"></td>
       </tr>
       <tr>
           <td>IPK</td>
           <td>:</td>
           <td><input type="text" name="ipk"></td>
       </tr>       
       <tr>
           <input type="submit" name="kirim">
       </tr>
   </table>
 </form>
</body>

</html>
