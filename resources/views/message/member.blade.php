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
                <h1>會員系統-控制台|目前登入帳號:<span id="login_username"></span></h1>
                <a href="#" data-theme="a" class="ui-btn-right" id="logout_btn">登出</a>
            </div>
            <div role="main" class="ui-content">
                <table data-role="table" class="ui-responsive table-stroke">
                    <thead>
                        <tr>
                            <th>編號</th>
                            <th>暱稱</th>
                            <th>Email</th>
                            <th>註冊時間</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody id="mybody">
                        <tr>
                            <td>1</td>
                            <td>test01</td>
                            <td>test01@gmail.com</td>
                            <td>20220628</td>
                            <td>
                                <button id="update_btn">更新</button>
                                <button id="delete_btn" data-id="99">刪除</button>
                            </td>
                        </tr>
                    </tboby>
                </table>
            </div>
            <div data-role="footer" data-position="fixed" data-theme="b">
                <h1>頁尾</h1>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>