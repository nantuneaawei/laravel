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
                <h1>註冊</h1>
            </div>
            <div role="main" class="ui-content">
                <div data-role="fieldcontain">
                    <label for="rEmail">信箱:</label>
                    <input type="text" name="rEmail" id="rEmail" placeholder="請輸入信箱">
                </div>
                <div id="err_rEmail"></div>
                <div data-role="fieldcontain">
                    <label for="rpassword">密碼:</label>
                    <input type="password" name="rpassword" id="rpassword" placeholder="字數4~8個字">
                </div>
                <div id="err_rpassword"></div>
                <div data-role="fieldcontain">
                    <label for="rpwd2">確認密碼:</label>
                    <input type="password" name="rpwd2" id="rpwd2" placeholder="確認密碼">
                </div>
                <div id="err_rpwd2"></div>
                <div data-role="fieldcontain">
                    <label for="rUserName">暱稱:</label>
                    <input type="text" name="rUserName" id="rUserName" placeholder="請輸入暱稱">
                </div>
                <div id="err_rUserName"></div>

                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <a href="#" data-role="button" data-theme="a" data-icon="delete" id="login">取消</a>
                    </div>
                    <div class="ui-block-b">
                        <a href="#" data-role="button" data-theme="b" data-icon="check" id="register_btn">確認</a>
                    </div>
                </div>

            </div>
            <div data-role="footer" data-position="fixed" data-theme="b">
                
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>