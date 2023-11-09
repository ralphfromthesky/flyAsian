<div class="main-customer-service-panel" id="slidePanel">
    <div class=" swithcButton">
        <button id="dark"></button><button id="light"></button>
    </div>
    <div class="icon-panel-container">
        <div class="panel-container"><i class="fa-sharp fa-solid fa-headset"></i>
            <h6>customer <br> service</h6>
        </div>
        <div class="panel-container"><i class="fa-regular fa-game-console-handheld"></i>try it out</div>
        <div class="panel-container"><i class="fa-solid fa-comment"></i>chat room</div>
        <div class="panel-container"><i class="fa-brands fa-telegram"></i>community</div>
        <div class="panel-container"><i class="fa-solid fa-download"></i>DOWNLOAD APP</div>
        <div class="panel-container"><i class="fa-solid fa-up-to-line"></i>Back to top</div>
    </div>
    <div class="slideButtonContainer" id="slideToRight">
        <i class="fa-regular fa-chevrons-right"></i>
    </div>
</div>
<div class="slideToLeft-container">
    <i class="fa-solid fa-angles-left" id="slideToLeft"></i>
</div>





<script>
    $(document).ready(function () {
        $('#slideToRight').click(() => {
            $('#slidePanel').toggleClass('panelSlideRight');
            $('#slideToLeft').toggleClass('panelSlideleft');
            console.log('fasdfasdfasdfsdf')

        })
        $('#slideToLeft').click(() => {
            $('#slidePanel').toggleClass('panelSlideRightLeft').css('z-index', 2)
            $('#slideToLeft').toggleClass('panelSlideleftRight').css('z-index', 1)
            console.log('fasdfasdfasdfsdf')
        })

        $('#light').click(() => {
            $('.main-body-container').css('background-color', 'white');
            $('.main-subHeader-container').css('background-color', 'white');
            $('#headerBtn').css('background-color', 'white');


        })

    });
</script>