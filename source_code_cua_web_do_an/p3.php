<!DOCTYPE html>
<html>
<?php
if (isset($_POST['Tim_kiem']) == true) {
    $search = $_POST['Tim_kiem'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lam_web_buon_ban_thuc_pham";
    $huy = mysqli_connect($servername, $username, $password, $dbname);
    if ($huy == false) die("Ket Noi That Bai" . mysqli_connect_error());
    $query = "SELECT Product_name,Price,Amount FROM products  WHERE Product_name LIKE '$search%' ORDER BY Amount DESC";
    $result = mysqli_query($huy, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo  $row[0] . " " . $row[1] . " " . $row[2] . "<br>";
        }
    }
}
?>

</html>