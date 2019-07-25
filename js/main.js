function displayCard() {
  document.getElementById("card-show").style.display = "flex";
}
function closeCard() {
  document.getElementById("card-show").style.display = "none";
}
function cardTypeSelect() {
  var cardType = document.getElementById("card-type").value;
  if (cardType == "Classic") {
    document.getElementById("classic-preview").style.display = "block";
    document.getElementById("modern-preview").style.display = "none";
  } else {
    document.getElementById("modern-preview").style.display = "flex";
    document.getElementById("classic-preview").style.display = "none";
  }
}
function updateCard() {
  var cardType = document.getElementById("card-type").value;
  var fullname = document.getElementById("fullname-input").value;
  var designation = document.getElementById("designation-input").value;
  var company = document.getElementById("company-input").value;
  var line1 = document.getElementById("line1-input").value;
  var line2 = document.getElementById("line2-input").value;
  if (cardType == "Classic") {
    document.getElementById("classic-preview").style.display = "block";
    document.getElementById("modern-preview").style.display = "none";
    document.getElementById("classic-fullName").innerHTML = fullname;
    document.getElementById("classic-job").innerHTML = designation;
    document.getElementById("classic-companyName").innerHTML = company;
    document.getElementById("classic-line1").innerHTML = line1;
    document.getElementById("classic-line2").innerHTML = line2;
    console.log(cardType);
  } else {
    document.getElementById("modern-preview").style.display = "flex";
    document.getElementById("classic-preview").style.display = "none";
    document.getElementById("modern-fullName").innerHTML = fullname;
    document.getElementById("modern-job").innerHTML = designation;
    document.getElementById("modern-companyName").innerHTML = company;
    document.getElementById("modern-line1").innerHTML = line1;
    document.getElementById("modern-line2").innerHTML = line2;
  }
}
$("#download").click(function() {
  var elm = $("#preview-card").get(0);
  var length = "800";
  var width = "400";
  var type = "jpg";
  var filename = "card";
  html2canvas(elm).then(function(canvas) {
    var canWidth = canvas.width;
    var canHeight = canvas.height;
    var img = Canvas2Image.convertToImage(canvas, canWidth, canHeight);
    // $("#preview-card").after(img);
    Canvas2Image.saveAsImage(canvas, length, width, type, filename);
  });
});
