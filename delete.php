<?php

$madg = $_GET['id'];
            //b1 ket noi data base sever
            $conn = mysqli_connect('localhost','root','','175a071520_libraries');
            if(!$conn){
                die("ket noi that bai vui long ktra lai thong tin may chu");
            }
            //b2 thuc hien truy van
            $sql = "delete  from db_docgia  where madg = '$madg'";
            $number = mysqli_query($conn,$sql);
            if($number >0){
                header("location: admin.php");
            }else{
               echo <"error">;
            }
             // Bước 03: Đóng kết nối
                 mysqli_close($conn);
  ?>
           