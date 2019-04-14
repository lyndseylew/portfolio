let mainNav = document.getElementById('nav-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');
navBarToggle.addEventListener('click', function () {
    mainNav.classList.toggle('active');
});


$(function(){

  $("#typed").typed({
    strings: ["finding creative solutions", "clean code", "coffee", "beautiful and useful websites", "plants"],
    typeSpeed: 40,
    backSpeed: 40,
    backDelay: 1000,
    loop: true,
  });
});

function shift(){
    $(".head-wrap").addClass("shift-text");
    terminalHeight();
}

function terminalHeight(){
    var termHeight = $(".terminal-height");
    var value = termHeight.text();
    value = parseInt(value);
    setTimeout(function(){
        if (value > 10){
            value = value-1;
            this.txtValue = value.toString();
            termHeight.text(this.txtValue);
            self.terminalHeight();
        }
        else{
            clearTimeout();
        }
    }, 10);
}

var skillsDiv = $('#tools');

$(window).on('scroll', function(){
	var winT = $(window).scrollTop(),
  	winH = $(window).height(),
  	skillsT = skillsDiv.offset().top;
  if(winT + winH  > skillsT){
  	$('.tool-border').each(function(){
      console.log( $(this).data('associateid') );
      $(this).find('.tool-bar').animate({
        width:$(this).attr('data-percentage')
      },2000);
    });
  }
});
