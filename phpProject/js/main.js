$(document).ready(function () {
  for (let i = 4; i <= 24; i++) {
    const imgElement = $("<img>", {
      src: `images/logo${i}.png`,
      alt: `Logo ${i}`,
    });
    $(".container-footer").append(imgElement);
  }
  //for sportHover
  $("#sportCont").mouseenter(() => {
    $(".sportHover").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $("#sportCont").mouseleave(() => {
    $(".sportHover").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $(".sportHover").mouseenter(() => {
    $(".sportHover").stop();
  });

  $(".sportHover").mouseleave(() => {
    $(".sportHover").stop().hide();
  });

  //for casino hover
  $("#hotContainer").mouseenter(() => {
    $(".casinoHover").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $("#hotContainer").mouseleave(() => {
    $(".casinoHover").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $(".casinoHover").mouseenter(() => {
    $(".casinoHover").stop();
  });

  $(".casinoHover").mouseleave(() => {
    $(".casinoHover").stop().hide();
  });
  
  //for card game hover
  $("#cardgameHover").mouseenter(() => {
    $(".hoverCardGame").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $("#cardgameHover").mouseleave(() => {
    $(".hoverCardGame").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $(".hoverCardGame").mouseenter(() => {
    $(".hoverCardGame").stop();
  });

  $(".hoverCardGame").mouseleave(() => {
    $(".hoverCardGame").stop().hide();
  });

  //for hover lucywin
    $("#lucky").mouseenter(() => {
    $(".hoverFeaturedGame").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $("#lucky").mouseleave(() => {
    $(".hoverFeaturedGame").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $(".hoverFeaturedGame").mouseenter(() => {
    $(".hoverFeaturedGame").stop();
  });

  $(".hoverFeaturedGame").mouseleave(() => {
    $(".hoverFeaturedGame").stop().hide();
  });

  //for lottery hovert
  $("#lottery").mouseenter(() => {
    $(".hoverLottery").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $("#lottery").mouseleave(() => {
    $(".hoverLottery").stop().animate(
      {
        height: "toggle",
      },
      200
    );
  });

  $(".hoverLottery").mouseenter(() => {
    $(".hoverLottery").stop();
  });

  $(".hoverLottery").mouseleave(() => {
    $(".hoverLottery").stop().hide();
  });











});
