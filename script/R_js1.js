/*IT23157132 J.A.S.R.Jayakody*/

function confirm1()
{
    confirm("You want to proceed");
}

function seeMore1() {
    var dots = document.getElementById("s1");
    var moreText = document.getElementById("s2");
    var btnText = document.getElementById("btn1");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  function seeMore2() {
    var dots = document.getElementById("s3");
    var moreText = document.getElementById("s4");
    var btnText = document.getElementById("btn2");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }
  function seeMore3() {
    var dots = document.getElementById("s5");
    var moreText = document.getElementById("s6");
    var btnText = document.getElementById("btn3");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

