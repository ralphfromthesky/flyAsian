<div class="main-customer-service-panel" id="slidePanel">
    <div class="swithcButton">
        <button id="dark"></button><button id="light"></button>
    </div>
    <div class="icon-panel-container">
        <div class="panel-container"><i class="fa-sharp fa-solid fa-headset"></i>
            <h6>Dịch vụ <br> khách hàng</h6>
        </div>
        <div class="panel-container"><i class="fa-regular fa-game-console-handheld"></i>
            <h6>Thử nghiệm</h6>
        </div>
        <div class="panel-container"><i class="fa-solid fa-comment"></i>
            <h6>Phòng chat</h6>
        </div>
        <div class="panel-container"><i class="fa-brands fa-telegram"></i>
            <h6>Cộng đồng</h6>
        </div>
        <div class="panel-container"><i class="fa-solid fa-download"></i>
            <h6>TẢI ỨNG DỤNG</h6>
        </div>
        <div class="panel-container"><i class="fa-solid fa-up-to-line"></i>
            <h6>Về đầu trang</h6>
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
        });

        $('#slideToLeft').click(() => {
            $('#slidePanel').toggleClass('panelSlideRight');
            $('#slideToLeft').toggleClass('panelSlideleft');

        });

        const applyStyles = (themes) => {
            if (themes === 'dark') {
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
                $('.main-form input').css('color', 'black');
                $('.headerTitle h3').css('color', 'black')
                $('.headerTitle-sport h3').css('color', 'black')
                $('.headerTitle-casino h3').css('color', 'black')



            } else {
                $('.main-body-container, .main-subHeader-container').css('background-color', '');
                $('.logInDetail2 li, .main-form input, .buttonLogin button').css({
                    'background-color': '',
                    'border': ''
                });
                $('.main-subHeader-container').css('box-shadow', '');
                $('.featuredGameContainer').css({
                    'background-color': '',
                    'box-shadow': ''
                });

                $('.featuredGame-header-container::before').css('color', '');
                $('.onlineCasino, .sportDivs, .main-customer-service-panel, .panel-container, .slideButtonContainer i').css({
                    'background': '',
                    'box-shadow': '',
                    'color': ''
                });

                $('.slideButtonContainer').css('background', 'transparent');

                $('.casinoHover, .hoverCardGame, .hoverFeaturedGame, .hoverLottery, .sportHover').css({
                    'background': '',
                    'box-shadow': ''
                });

                $('.model img').css({
                    'background': '',
                    'border': ''
                });
                $('.main-form input').css('color', 'white');
                $('.headerTitle h3 .headerTitle-casino h3 .headerTitle-sport h3').css('color', 'red')
                $('.headerTitle h3').css('color', 'white')
                $('.headerTitle-casino h3').css('color', 'white')
                $('.headerTitle-sport h3').css('color', 'white')
            }
        }

        const saveTheme = (theme) => {
            return localStorage.setItem('theme', theme)
        }

        const loadTheme = () => {
            return localStorage.getItem('theme') || 'light';
        }
        const initialTheme = loadTheme();
        applyStyles(initialTheme);

        $('#dark').click(() => {
            applyStyles('light');
            saveTheme('light');
        });

        $('#light').click(() => {
            applyStyles('dark');
            saveTheme('dark');
        });
    })
</script>