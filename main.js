window.addEventListener('scroll', function() {
  var navbar = document.querySelector('.navbar'); // Use querySelector instead of getElementById
  if (window.scrollY > 100) {
    navbar.classList.add('fixed');
    navWrapper.style.opacity = "1";
  
  } else {
    navbar.classList.remove('fixed');
    navWrapper.style.opacity = "1";
  }
});

$(document).ready(function(){
    function filterGroup(group){
        $(".dish-content").hide();
        $(".dish-content").filter("."+group).show();
        $(".cat-links button").removeClass("active");
        $(".cat-" + group.split('-')[1]).addClass("active");
    }

    $(".cat-1").click(function(){ filterGroup("group-1"); });
    $(".cat-2").click(function(){ filterGroup("group-2"); });
    $(".cat-3").click(function(){ filterGroup("group-3"); });
    $(".cat-4").click(function(){ filterGroup("group-4"); });

    // Check for an already active button and show its content
    var activeButton = $(".cat-links button.active");
    if (activeButton.length > 0) {
        var activeGroup = "group-" + activeButton.attr("class").split(' ')[0].split('-')[1];
        filterGroup(activeGroup);
    } else {
        // Initially show Category 1 and add active class to the button if no active button found
        filterGroup("group-1");
    }
});

$('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    nextArrow: '.next-btn',
    prevArrow: '.prev-btn',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2
        }
      },
    ]
  });
 