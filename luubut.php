<?php
require 'serverconnect.php';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comefrom = $_POST['comefrom'];
    $web = $_POST['web'];
    $gender = $_POST['gender'];
    $havewemet = $_POST['have_we_met'];
    $whywemet = $_POST['whywemet'];
    $ourmemory = $_POST['ourmemory'];
    $iam = $_POST['iam'];
    $dislike = $_POST['dislike'];
    $somelines = $_POST['somelines'];
    $signature_data = $_POST['signature_data'];
    $sql = "INSERT INTO luubut (name, email, comefrom, web, gender,havewemet, whywemet, ourmemory, iam, dislike, somelines, signature_data) VALUES ('$name', '$email', '$comefrom', '$web', '$gender','$havewemet', '$whywemet', '$ourmemory', '$iam', '$dislike', '$somelines', '$signature_data')";

if ($conn->query($sql) === TRUE) {
  echo "Đã ghi nhận dữ liệu trên máy chủ!";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    echo "<h1>Hệ thống đã nhận được lưu bút của bạn</h1>";
    echo "<h3>Với nội dung:</h3>";
    echo "<b>Tên: </b>{$name}<br><b>Email: </b>{$email}<br><b>Đến từ: </b>{$comefrom}<br><b>Web: </b>{$web}<br><b>Giới tính: </b>{$gender}<br><b>Chung ta da gap nhau chua: </b>{$havewemet}<br><b>Tại sao chúng ta gặp nhau: </b>{$whywemet}<br><b>Kỉ niệm: </b>{$ourmemory}<br><b>Mình là người: </b>{$iam}<br><b>Điểm không thích: </b>{$dislike}<br><b>Vài dòng đến mình: </b>{$somelines}<br><b>Dữ liệu chữ ký: </b>{$signature_data}<br>";
    echo "<br>Made in 7 hours (all night long) with love by Fatties Software / Duong Tung Anh<br>More feature coming soon...!";
    echo "<br><a href='/'>Quay lại trang chủ</a>";
}
?>