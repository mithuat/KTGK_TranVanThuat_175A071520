<?php
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $madg = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','175a071520_libraries');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_docgia WHERE madg = '$madg";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $ma_donvi = $row['madg'];
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLU - Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
</div>
            </nav>
        </div>
    </header>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin Danh bạ nhân viên</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-update-employee.php" method="post">
            <div class="form-group">
                <label for="txtdocgia">Mã Độc Giả</label>
                <input type="text" class="form-control" id="txtdocgia" name="txtdocgia" placeholder="Mã đọc giả" value="<?php echo $row['madg']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" value="<?php echo $row['hovaten']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtChucVu">Giới Tính</label>
                <input type="text" class="form-control" id="txtgioitinh" name="txtgioitinh" placeholder="Nhập gioi tinh" value="<?php echo $row['gioitinh']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtnamsinh">Năm Sinh</label>
                <input type="text" class="form-control" id="txtnamsinh" name="txtnamsinh" placeholder="Nhập nam sinh" value="<?php echo $row['namsinh']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtnghenghiep">Nghề Nghiệp</label>
                <input type="text" class="form-control" id=txtnghenghiep" name="txtnghenghiep" placeholder="nghenghiep" value="<?php echo $row['nghenghiep']; ?>">
                
            </div>
            <div class="form-group">
                <label for="txtngaycapthe">Ngày Cấp Thẻ</label>
                <input type="date" class="form-control" id="txtngaycapthe" name="txtngaycapthe" placeholder="Nhập ngay cap the" value="<?php echo $row['ngaycapthe']; ?>">
               
            </div>
            <div class="form-group">
                <label for="txtngayhethan">Ngày Hết Hạn</label>
                <input type="date" class="form-control" id="txtngayhethan" name="txtngayhethan" placeholder="Nhập ngay hethan" value="<?php echo $row['ngayhethan']; ?>">
               
            </div>
            <div class="form-group">
                <label for="txtdiachi">Địa Chỉ</label>
                <input type="text" class="form-control" id="txtdiachi" name="txtdiachi" placeholder="Nhập dia chi" value="<?php echo $row['diachi']; ?>">
               
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Lưu Lại</button>
        </form>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>