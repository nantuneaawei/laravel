<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/jquery.mobile-1.4.5.min.css') }}">
        <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
	    <script src="{{ asset('/js/jquery.mobile-1.4.5.min.js') }}"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title></title>
    </head>

    <body>
        <div data-role="page" id="home">
            <div data-role="header" data-theme="b">
                <h1>登入</h1>
            </div>
            <div role="main" class="ui-content">
                <div data-role="fieldcontain">
                    <label for="lEmail">信箱:</label>
                    <input type="text" name="lEmail" id="lEmail" placeholder="字數11~30個字">
                </div>
                <div id="err_lEmail"></div>
                <div data-role="fieldcontain">
                    <label for="lpassword">密碼:</label>
                    <input type="password" name="lpassword" id="lpassword" placeholder="字數4~8個字">
                </div>
                <div id="err_lpassword"></div>
                <div data-role="fieldcontain">
                    <label for="lpwd2">確認密碼:</label>
                    <input type="password" name="lpwd2" id="lpwd2" placeholder="確認密碼">
                </div>
                <div id="err_lpwd2"></div>
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <a href="#" data-role="button" data-theme="a" data-icon="plus" id="register">註冊</a>
                    </div>
                    <div class="ui-block-b">
                        <a href="#" data-role="button" data-theme="b" data-icon="check" id="login_btn">登入</a>
                    </div>
                </div>
            </div>
            <div data-role="footer" data-position="fixed" data-theme="b">
                
            </div>
        </div>  
    </body>
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>