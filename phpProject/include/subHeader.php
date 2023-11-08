<div class="main-subHeader-container">
    <div class="slick-carousel-subHeader">
        <div class="subHeader-container">
            <h4> <i class="fa-solid fa-house"></i>
                Home page</h4>
        </div>
        <div class="subHeader-container" id="lottery">
            <h4><i class="fa-solid fa-bowling-ball" ></i>Lottery</h4>
        </div>
        <div class="subHeader-container" id="lucky">
            <h4><i class="fa-solid fa-ticket"></i>Luckywin</h4>
            <img src="/images/hot.png" id="hot">
        </div>
        <div class="subHeader-container hoverCasino" id="hotContainer">
            <h4><i class="fa-solid fa-circle-play"></i>Casino</h4>
            <img src="/images/hot.png" id="hot">
        </div>
        <div class="subHeader-container" id="sportCont">
            <h4><i class="fa-solid fa-baseball"></i>Sport </h4>
            <img src="/images/hot.png" id="hot">
        </div>
        <div class="subHeader-container">
            <h4><i class="fa-solid fa-slot-machine"></i>Explode the jar</h4>
        </div>
        <div class="subHeader-container">
            <h4><i class="fa-solid fa-fish-fins"></i>shoot Fish</h4>
        </div>
        <div class="subHeader-container" id="cardgameHover">
            <h4> <i class="fa-solid fa-cards"></i>Card game</h4>
        </div>
        <div class="subHeader-container">
            <h4> <i class="fa-solid fa-turkey"></i>Gamechicken</h4>
        </div>
        <div class="subHeader-container">
            <h4> <i class="fa-duotone fa-wallet"></i>Endow</h4>
        </div>
        <div class="subHeader-container">
            <h4> <i class="fa-solid fa-user"></i>Agency</h4>
        </div>
        <div class="subHeader-container">
            <h4> <i class="fa-sharp fa-solid fa-headset"></i>Support</h4>
        </div>


    </div>
</div>
<script>
    $(document).ready(function () {
        $('.slick-carousel-subHeader').slick({
            infinite: true,
            slidesToShow: 11,
            slidesToScroll: 1,
            arrows: true,
            dots: false
        });
    });
</script>