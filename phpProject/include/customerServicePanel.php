<div class="main-customer-service-panel" id="slidePanel">
    <div class=" swithcButton">
        <button id="dark"></button><button id="light"></button>
    </div>
    <div class="icon-panel-container">
        <div class="panel-container"><i class="fa-sharp fa-solid fa-headset"></i>
            <h6>customer <br> service</h6>
        </div>
        <div class="panel-container"><i class="fa-regular fa-game-console-handheld"></i>
            <h6>try it out</h6>
        </div>
        <div class="panel-container"><i class="fa-solid fa-comment"></i>
            <h6>chat room</h6>
        </div>
        <div class="panel-container"><i class="fa-brands fa-telegram"></i>
            <h6>community</h6>
        </div>
        <div class="panel-container"><i class="fa-solid fa-download"></i>
            <h6>DOWNLOAD APP</h6>
        </div>
        <div class="panel-container"><i class="fa-solid fa-up-to-line"></i>
            <h6>Back to top</h6>
        </div>
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
            $('.logInDetail2 li').css('background-color', '#f0f0f0');
            $('.main-form input').css({
                'background-color': '#f0f0f0',
                'border': '2px solid #f1efef'
            });
            $('.buttonLogin button').css({
                'background': '#f0f0f0',
                'color': 'gray'
            })
            $('.main-subHeader-container').css('box-shadow', ' 0 13px 30px #8b8b8b')
            $('.featuredGameContainer').css({
                'background-color': 'white',
                'box-shadow': '13px 13px 30px #8b8b8b, -13px -13px 30px #ffffff'
            });
            $('.featuredGame-header-container::before').css('color', 'red'); //not working

            $('.onlineCasino').css({
                'background': 'transparent',
                'box-shadow': '6px 6px 12px #5a5a5a, -6px -6px 12px #5a5a5a',

            });
            $('.sportDivs').css({
                'background': 'transparent',
                'box-shadow': '6px 6px 12px #5a5a5a, -6px -6px 12px #5a5a5a',
                'border-radius': '10px'

            });
            $('.main-customer-service-panel').css({
                'background-color': ' hsla(0,0%,100%,.8)',
                'box-shadow': '6px 6px 12px #5a5a5a, -6px -6px 12px #5a5a5a'

            });
            $('.panel-container').css({
                'box-shadow': '6px 6px 12px #5a5a5a, -6px -6px 12px #5a5a5a',
                'background': 'white',
                'color': 'gray'
            });
            $('.slideButtonContainer').css({
                'background': 'transparent'
            });
            $('.slideButtonContainer i').css({
                'color': 'gray',
            });
            $('.casinoHover').css({
                'background': 'white',
                'box-shadow': ' 0 13px 30px #8b8b8b'

            });
            $('.hoverCardGame').css({
                'background': 'white',
                'box-shadow': ' 0 13px 30px #8b8b8b'
            });

            $('.hoverFeaturedGame').css({
                'background': 'white',
                'box-shadow': ' 0 13px 30px #8b8b8b'
            });

            $('.hoverLottery').css({
                'background': 'white',
                'box-shadow': ' 0 13px 30px #8b8b8b'
            });
            $('.sportHover').css({
                'background': 'white',
                'box-shadow': ' 0 13px 30px #8b8b8b'
            });
            $('.model img').css({
                'background': 'white',
                'border': '2px solid #dddada'
            });

            const removeStyles = () => {
                $('.main-body-container, .main-subHeader-container').removeAttr('style');
                $('.logInDetail2 li, .main-form input, .buttonLogin button').removeAttr('style');
                $('.main-subHeader-container').css('');
                $('.featuredGameContainer').removeAttr('style');
                $('.featuredGame-header-container::before').css('color', ''); // Remove color
                $('.onlineCasino, .sportDivs, .main-customer-service-panel, .panel-container, .slideButtonContainer, .casinoHover, .hoverCardGame, .hoverFeaturedGame, .hoverLottery, .sportHover, .model img').removeAttr('style');
            }

            $('#dark').click(() => {
                removeStyles()
            })






        })

    })
</script>