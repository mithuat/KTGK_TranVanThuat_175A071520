
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>175a071520- tran van thuat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ĐỘC GIẢ - ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">THÔNG TIN</h5>
            <div>
                <a href="add_employee.php" class="btn btn-primary">THÊM</a>
            </div>
            <table class="table">
        <thead>
            <tr>
                <th scope="col">MÃ ĐỌC GIẢ</th>
                <th scope="col">HỌ VÀ TÊN</th>
                <th scope="col">GIỚI TÍNH</th>
                <th scope="col">NĂM SINH</th>
                <th scope="col">NGHỀ NGHIỆP</th>
                <th scope="col">NAGYF CẤP THẺ</th>
                <th scope="col">NGÀY HẾT HAN</th>
                <th scope="col">ĐỊA CHỈ</th>
                <th scope="col">SỬA</th>
                <th scope="col">XÓA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //b1 ket noi data base sever
            $conn = mysqli_connect('localhost','root','','175a071520_libraries');
            if(!$conn){
                die("ket noi that bai vui long ktra lai thong tin may chu");
            }
            //b2 thuc hien truy van
            $sql = "SELECT * FROM db_docgia";
            $result = mysqli_query($conn,$sql);
            //b3 xu ly ket qua truy van
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <tr>
                <th scope="row"><?php echo $row['madg']?></th>
                <td><?php echo $row['hovaten']?></td>
                <td><?php echo $row['gioitinh']?></td>
                <td><?php echo $row['namsinh']?></td>
                <td><?php echo $row['nghenghiep']?></td>
                <td><?php echo $row['ngaycapthe']?></td>
                <td><?php echo $row['ngayhethan']?></td>
                <td><?php echo $row['diachi']?></td>
                <td><a href="update.php?id=<?php echo $row['madg'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="delete.php?id=<?php echo $row['madg']?>"><i class="bi bi-trash"></i></a></td>
            </tr>
           <?php
                }
            }
            ?>
        </tbody>
        </table>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>