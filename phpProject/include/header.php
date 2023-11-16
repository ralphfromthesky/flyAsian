<div class="main-header">
    <div class="header-container">
        <div class="logoBrand">
            <img src="images/logo.png" alt="" srcset="">
        </div>
        <div class="logInDetail">
            <div class="logInDetail2">
                <ul>
                    <li id="headerBtn"><i class="fa-solid fa-camera-movie"></i>Thương hiệu</li>
                    <li id="headerBtn"> <i class="fa-solid fa-circle-play"></i>Người đẹp</li>
                    <li id="headerBtn"><i class="fa-regular fa-comment"></i>Phòng chat</li>
                    <li>1 Tháng 11, 2023 11:37:08 sáng (GMT+7)</li>
                </ul>
            </div>
            <div class="logInDetail3">
                <div class="main-form">
                    <input type="text" placeholder="Tài khoản" id="accountName">
                    <div class="eyeContact">
                        <input type="password" placeholder="6-15 ký tự chữ số và chữ cái" id="accountPw">
                        <i class="fa-regular fa-eye-slash" id="eyeSlash"></i>
                        <i class="fa-regular fa-eye" id="eye"></i>
                    </div>
                </div>
                <div class="buttonLogin">
                    <button><i class="fa-solid fa-user"></i>Đăng nhập</button>
                    <button><i class="fa-solid fa-user-plus"></i>Đăng ký</button>
                    <button><img src="/images/google.png"> đăng nhập google</button>

                    <button><i class="fa-solid fa-gamepad"></i>Thử ngay</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // const accountPw =document.getElementById('accountPw')
    // const eyeSlash =document.getElementById('eyeSlash')
    // const eye =document.getElementById('eye')

    // eyeSlash.addEventListener('click', () => {
    //     if(accountPw.type === 'password') {
    //         accountPw.type = 'text';
    //         eyeSlash.style.display = 'none';
    //         eye.style.display = 'block'
    //     }
    // })
    // eye.addEventListener('click', () => {
    //     if(accountPw.type === 'text') {
    //         accountPw.type = 'password';
    //         eye.style.display = 'none';
    //         eyeSlash.style.display = 'block';
    //     }
    // })

    const accountPw = $('#accountPw');
    const eyeSlash = $('#eyeSlash');
    const eye = $('#eye');

    eyeSlash.click(() => {
        if (accountPw.attr('type') === 'password') {
            accountPw.attr('type', 'text');
            eyeSlash.css('display', 'none');
            eye.css('display', 'block');
        }
    });

    eye.click(() => {
        if (accountPw.attr('type') === 'text') {
            accountPw.attr('type', 'password');
            eye.css('display', 'none');
            eyeSlash.css('display', 'block');
        }
    });



</script>