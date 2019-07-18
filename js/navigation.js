$(document).ready(function() {
  var scroll_pos = 0;
  $(document).scroll(function() {
    scroll_pos = $(this).scrollTop();
    if (scroll_pos > 50) {
      $(".navbar").css("background", "white");
    } else {
      $(".navbar").css("background", "rgba(255, 255, 255, 0.6)");
    }
  });
});
$(".slogan").on("click", function(event) {
  if (this.hash !== "") {
    event.preventDefault();

    const hash = this.hash;

    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top - 50
      },
      800
    );
  }
});
