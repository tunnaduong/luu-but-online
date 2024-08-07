<?php
require 'serverconnect.php';
?>
<!doctype html>
<html>

<head>
  <title>Lưu bút của Tùng Anh (Tunna Duong)</title>
  <meta charset='utf-8' />
  <meta content='width=device-width, initial-scale=1' name='viewport' />
  <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
  <meta content='width=device-width, initial-scale = 1.0, user-scalable = no' name='viewport' />
  <link href='favicon.png' rel='icon' type='image/x-icon' />
  <link rel="stylesheet" href="style.css">
  <link href='https://luubut.tunnaduong.com/' rel='canonical' />
  <meta content='https://luubut.tunnaduong.com/' property='og:url' />
  <meta content='Lưu bút của Tùng Anh (Tunna Duong)' property='og:title' />
  <meta content='Đơn giản chỉ là một trang web lưu bút trực tuyến' property='og:description' />
  <meta property="og:image" content="https://luubut.tunnaduong.com/screenshot.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
</head>

<body class="loaded">
  <div id="particles-js"></div>
  <div class="content">
    <div class="panel" id="panel-home" style="display: block;height: 265px;">
      <h1>lưu bút</h1>
      <span class="luubut-version">v1.0.3</span>
      <h2>Một lưu bút trực tuyến bởi<br>Tùng Anh (Tunna Duong)</h2>
      <ul>
        <li>
          <a href="#" onclick="luubut()">
            <span class="label">Tiếp tục</span>
            <i class="fas fa-chevron-circle-right" style="font-size: 18px;"></i>
          </a>
        </li>
        <li>
          <a href="#" onclick="xem()">
            <span class="label">Xem lưu bút</span>
            <i class="fas fa-eye" style="font-size: 18px;"></i>
          </a>
        </li>
        <li>
          <a href="#" onclick="coffee()">
            <span class="label">Ủng hộ tôi</span>
            <i class="fas fa-coffee" style="font-size: 18px;"></i>
          </a>
        </li>
      </ul>
    </div>
    <div id="luubut" class="panel-luubut" style="display: none;overflow: hidden;overflow-y: scroll" onscroll="hide_scroll()">
      <div id="luubut-start" style="overflow: hidden">
        <h1 style="margin-bottom: 8px;">viết lưu bút</h1>
        <p>Xin chào, người đang xem trang web này.<br><br>
          Mình rất vui khi biết bạn đã bấm vào đường link này trên Facebook. Mình sẽ còn vui hơn nữa nếu bạn để lại cho
          mình đôi dòng lưu bút cho quãng đời học sinh của chúng ta. Có thể chúng ta vẫn còn xa lạ hay có thể đã từng
          thân thiết nhưng hãy cứ rũ bỏ sự ngại ngùng đi và đừng chần chừ gì mà viết lưu bút này cho mình. Mình sẽ trân
          trọng nó, y như cách mình trân trọng cuộc đời bạn vậy. Trong quá trình viết lưu bút, mình sẽ hỏi bạn một số
          thông tin cá nhân nhằm xác minh bạn là ai. Thông tin này sẽ được xử lý và hiển thị trên trang Xem lưu bút ở
          trang chủ. Vậy nên hãy cố gắng viết một cách đàng hoàng nhất nhé!<br><br>
          Cảm ơn bạn!<br>
          Dương Tùng Anh
        </p>
        <ul>
          <li>
            <a href="#" onclick="luubut_tieptuc()" style="margin-top: 17px;">
              <span class="label">Mình hiểu, tiếp tục</span>
              <i class="fas fa-chevron-circle-right" style="font-size: 18px;"></i>
            </a>
          </li>
        </ul>
      </div>
      <div id="luubut-batdauviet" style="display: none;">
        <h1 style="margin-bottom: 8px;">viết lưu bút</h1>
        <div class="box" id="box">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <form method="POST" id="form_luubut" action="luubut.php">
          <span>Bạn hãy điền đầy đủ các thông tin vào ô bên dưới, ký chữ ký, ấn lưu chữ ký rồi nhấn nút Gửi lưu bút để
            gửi lưu bút. Các ô có dấu *
            là bắt buộc nhập. Chúc bạn vui vẻ.</span><br><br>
          <label for="name">*Họ và tên:</label><br>
          <input type="text" class="css-input" id="name" name="name" required><br><br>
          <label for="name">Email:</label><br>
          <input type="email" class="css-input" id="email" name="email"><br><br>
          <label for="comefrom">Đến từ:</label><br>
          <input type="text" class="css-input" id="comefrom" name="comefrom"><br><br>
          <label for="web">Trang web của bạn (FB, YouTube, Instagram,...):</label><br>
          <input type="text" class="css-input" id="web" name="web"><br><br>
          <p>Bạn là:</p>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Nam</label><br>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Nữ</label><br><br>
          <p>Chúng mình từng gặp nhau chưa?</p>
          <input type="radio" id="olog" name="have_we_met" value="only_look_or_greet">
          <label for="olog">Mới chỉ chào hỏi/nhìn từ xa thôi</label><br>
          <input type="radio" id="talked" name="have_we_met" value="talked">
          <label for="talked">Nói chuyện với nhau rồi</label><br>
          <input type="radio" id="notyet" name="have_we_met" value="notyet">
          <label for="notyet">Chưa</label><br><br>
          <label for="whywemet">Sao mình quen nhau vậy?</label><br>
          <input type="text" class="css-input" id="whywemet" name="whywemet"><br><br>
          <label for="ourmemory">Một kỉ niệm giữa chúng mình:</label><br>
          <input type="text" class="css-input" id="ourmemory" name="ourmemory"><br><br>
          <label for="iam">Đối với bạn, tớ là một người:</label><br>
          <input type="text" class="css-input" id="iam" name="iam"><br><br>
          <label for="dislike">Điều bạn không thích ở tớ:</label><br>
          <input type="text" class="css-input" id="dislike" name="dislike"><br><br>
          <label for="somelines">Vài dòng cho tớ:</label><br>
          <input type="text" class="css-input" id="somelines" name="somelines"><br><br>
          <label for="signature_box">*Chữ ký của bạn:</label><br>
          <canvas class="signature_box" id="signature_box" width="340" height="200" style="border:1px solid;background-color: white"></canvas>
          <button type="button" style="background: #3498db;border-radius: 28px;color: #ffffff;font-size: 14px;padding: 5px 10px 5px 10px;text-decoration: none;-webkit-transition: background 0.2s ease, color 0.2s ease;transition: background 0.2s ease, color 0.2s ease" id="draw" onclick="var ctx = canvas.getContext('2d');
    console.log(ctx.globalCompositeOperation);
    ctx.globalCompositeOperation = 'source-over';">Vẽ</button>
          <button type="button" style="background: #3498db;border-radius: 28px;color: #ffffff;font-size: 14px;padding: 5px 10px 5px 10px;text-decoration: none;-webkit-transition: background 0.2s ease, color 0.2s ease;transition: background 0.2s ease, color 0.2s ease" id="erase" onclick="var ctx = canvas.getContext('2d');
    ctx.globalCompositeOperation = 'destination-out';">Tẩy</button>
          <button type="button" style="background: #3498db;border-radius: 28px;color: #ffffff;font-size: 14px;padding: 5px 10px 5px 10px;text-decoration: none;-webkit-transition: background 0.2s ease, color 0.2s ease;transition: background 0.2s ease, color 0.2s ease" id="clear" onclick="signaturePad.clear();">Xoá</button>
          <input type="hidden" name="signature_data" id="dulieu">
          <ul>
            <li>
              <a href="#" onclick="guiluubut()" style="margin-top: 17px;">
                <span class="label">Gửi lưu bút</span>
                <i class="fas fa-paper-plane" style="font-size: 18px;"></i>
              </a>
            </li>
          </ul>
        </form>
      </div>
    </div>

    <div id="luubut-xem" class="panel-luubut" style="display: none;overflow: hidden;overflow-y: scroll" onscroll="hide_scroll()">
      <!-- View Luu But -->
      <h1 style="margin-bottom: 8px;">xem lưu bút</h1>
      <div id="luubut-list">
        <?php
        $sql = "SELECT * FROM luubut WHERE isApproved = 1 ORDER BY id DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="luubut-item">
              <div class="luubut-item-header">
                <span class="luubut-item-name"><?= $row["name"] ?></span>
                <span class="luubut-item-email"><?= $row["email"] ?></span>
              </div>
              <div class="luubut-item-body">
                <span class="luubut-item-comefrom"><b>Đến từ: </b><?= $row["comefrom"] ?></span>
                <span class="luubut-item-web"><b>Trang web: </b><?= $row["web"] ?></span>
                <span class="luubut-item-gender"><b>Giới tính: </b><?= $row['gender'] == "female" ? 'Nữ' : 'Nam' ?></span>
                <span class="luubut-item-have_we_met"><b>Chúng mình đã gặp nhau chưa: </b><?= ($row['havewemet'] == "notyet") ? "Chưa" : (($row['havewemet'] == "talked") ? "Nói chuyện với nhau rồi" : "Mới chỉ chào hỏi/nhìn từ xa thôi") ?></span>
                <span class="luubut-item-whywemet"><b>Tại sao mình gặp nhau: </b><?= $row['whywemet'] ?></span>
                <span class="luubut-item-ourmemory"><b>Kỉ niệm chung: </b><?= $row['ourmemory'] ?></span>
                <span class="luubut-item-iam"><b>Tớ là một người: </b><?= $row['iam'] ?></span>
                <span class="luubut-item-dislike"><b>Điểm không thích ở tớ: </b><?= $row['dislike'] ?></span>
                <span class="luubut-item-somelines"><b>Vài dòng đến tớ: </b><?= $row['somelines'] ?></span>
                <img src="<?= $row['signature_data'] ?>" class="luubut-item-signature">
              </div>
            </div>
        <?php
          }
        } else {
          echo "Không có lưu bút nào!";
        }
        ?>
      </div>
    </div>

    <div id="comingsoon" class="panel-luubut" style="display: none">
      <h1>Tính năng đang xây dựng...</h1>
      <span>Hãy cùng chờ đón nhé!</span>
      <ul>
        <li>
          <a href="#" onclick="javascript:location.reload()" style="margin-top: 17px;">
            <span class="label">Quay lại</span>
            <i class="fas fa-chevron-circle-left" style="font-size: 18px;"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  </div>
  <script src="script.js"></script>
</body>

</html>