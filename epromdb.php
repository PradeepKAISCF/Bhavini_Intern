<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'kaiscf') or die("Connect Failed:".mysqli_connect_error());
    $eic_name = $_POST['Name'];
    $igcar_even = $_POST['igcare'];
    $igcar_odd = $_POST['igcaro'];
    $comp_even = $_POST['compe'];
    $comp_odd = $_POST['compo'];
    $fuse_even = $_POST['fusee'];
    $fuse_odd = $_POST['fuseo'];
    $nameh = $_POST['NameH'];
    $namehd = $_POST['NameHD'];
    $date = date('Y-m-d H:i:s');
    $no = $_POST['noEprom'];
    $nameh = $_POST['NameH'];
    $namehd = $_POST['NameHD'];
    
    $sql = "INSERT INTO `eprom_fusion` VALUES ('$eic_name', '$date','$igcar_even','$igcar_odd','$comp_even','$comp_odd',
    '$fuse_even','$fuse_odd','$igcar_even_r','$igcar_odd_r','$comp_even_r','$comp_odd_r','$fuse_even_r','$fuse_odd_r',
    '$no','$nameh','$namehd')";
    $query = mysqli_query($conn,$sql);
   }
?>