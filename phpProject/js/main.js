$(document).ready(function () {
  for (let i = 4; i <= 24; i++) {
    const imgElement = $("<img>", {
      src: `images/logo${i}.png`,
      alt: `Logo ${i}`,
    });
    $(".container-footer").append(imgElement);
  }

  // let sportCont = $("#sportCont");
  // let sportHover = $(".sportHover");
  //for hoverSport

  $("#sportCont").mouseenter(() => {
    $(".sportHover").slideDown();
  });

  $("#sportCont").mouseleave(() => {
    $(".sportHover").slideUp();
  });

  $(".sportHover").mouseenter(() => {
    $(".sportHover").stop();
  });

  $(".sportHover").mouseleave(() => {
    $(".sportHover").slideUp();
  });

  //for casino hover

  $("#hotContainer").mouseenter(() => {
    $(".casinoHover ").slideDown();
  });

  $("#hotContainer").mouseleave(() => {
    $(".casinoHover ").slideUp();
  });

  $(".casinoHover ").mouseenter(() => {
    $(".casinoHover ").stop();
  });

  $(".casinoHover ").mouseleave(() => {
    $(".casinoHover ").slideUp();
  });


  //for card game hover
  $("#cardgameHover").mouseenter(() => {
    $(".hoverCardGame ").slideDown();
  });

  $("#cardgameHover").mouseleave(() => {
    $(".hoverCardGame ").slideUp();
  });

  $(".hoverCardGame ").mouseenter(() => {
    $(".hoverCardGame ").stop();
  });

  $(".hoverCardGame ").mouseleave(() => {
    $(".hoverCardGame ").slideUp();
  });

//for hover lucywin
$("#lucky").mouseenter(() => {
  $(".hoverFeaturedGame ").slideDown();
});

$("#lucky").mouseleave(() => {
  $(".hoverFeaturedGame ").slideUp();
});

$(".hoverFeaturedGame ").mouseenter(() => {
  $(".hoverFeaturedGame ").stop();
});

$(".hoverFeaturedGame ").mouseleave(() => {
  $(".hoverFeaturedGame ").slideUp();
});

//for lottery hovert

$("#lottery").mouseenter(() => {
  $(".hoverLottery ").slideDown();
});

$("#lottery").mouseleave(() => {
  $(".hoverLottery ").slideUp();
});

$(".hoverLottery ").mouseenter(() => {
  $(".hoverLottery ").stop();
});

$(".hoverLottery ").mouseleave(() => {
  $(".hoverLottery ").slideUp();
});

});
