window.particlesJS.load("particles-js", "particles.json", function () {
  console.log(
    "Trang web được lập trình bởi Dương Tùng Anh - C4K60 Chuyên Hà Nam"
  );
  console.log(
    "Mọi thông tin chi tiết xin liên hệ https://facebook.com/tunnaduong/"
  );
});

var canvas = document.getElementById("signature_box");

var signaturePad = new SignaturePad(canvas, {
  backgroundColor: "rgb(255, 255, 255)", // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
});

function luubut() {
  setTimeout(showBlock, 700);
  const element = document.querySelector(".panel");
  const element2 = document.querySelector("#luubut");
  element.classList.add("animate__animated", "animate__flipOutY");
  element2.classList.add("animate__animated", "animate__jackInTheBox");

  function showBlock() {
    document.getElementById("panel-home").style.display = "none";
    document.getElementById("luubut").style.display = "block";
  }
}

function luubut_tieptuc() {
  setTimeout(showBlock2, 700);
  const element3 = document.querySelector("#luubut-start");
  const element4 = document.querySelector("#luubut-batdauviet");
  element3.classList.add("animate__animated", "animate__fadeOutLeft");
  element4.classList.add("animate__animated", "animate__fadeInRight");

  function showBlock2() {
    document.getElementById("luubut-start").style.display = "none";
    document.getElementById("luubut-batdauviet").style.display = "block";
  }
}

function hide_scroll() {
  document.getElementById("box").style.display = "none";
}

function guiluubut() {
  var x = document.forms["form_luubut"]["name"].value;
  if (x == "") {
    alert("Hãy điền tên vì trường này rất quan trọng với mình.");
    return false;
  } else {
    if (signaturePad.isEmpty()) {
      alert("Hãy vẽ chữ ký.");
      return false;
    } else {
      var data = signaturePad.toDataURL("image/png");
      console.log(data);
      document.getElementById("dulieu").value = data;
      // return alert('Lưu chữ ký thành công. Quay lại trang để gửi đi.');
    }
    document.getElementById("form_luubut").submit();
    return true;
  }
}

function xem() {
  setTimeout(showBlock3, 700);
  const element99 = document.querySelector(".panel");
  const element999 = document.querySelector("#luubut-xem");
  element99.classList.add("animate__animated", "animate__flipOutY");
  element999.classList.add("animate__animated", "animate__jackInTheBox");

  function showBlock3() {
    document.getElementById("panel-home").style.display = "none";
    document.getElementById("luubut-xem").style.display = "block";
  }
}

function coffee() {
  window.location.href = "https://c4k60.com/sponsors";
}
