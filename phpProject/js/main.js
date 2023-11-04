$(document).ready(function() {
    for (let i = 4; i <= 24; i++) {
      const imgElement = $("<img>", {
        src: `images/logo${i}.png`,
        alt: `Logo ${i}`
      });
      $(".container-footer").append(imgElement);
    }
  });