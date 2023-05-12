<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title></title>
    </head>

    <body>
        <div data-role="page" id="home">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="message"><span id="login_username"></span>,您好</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0">
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="out">支出</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="in">收入</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="record">財務分析</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" id="logout_btn">登出</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row my-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%">類型</th>
                                            <th width="40%">金額</th>
                                            <th width="20%">日期</th>
                                            <th width="10%"></th>
                                            <th width="10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="out_list">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <!-- <button type="button" class="btn btn-outline-success"></button> -->
                                            </td>
                                            <td>
                                                <!-- <button type="button" class="btn btn-success"></button> -->
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row my-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h1>新增支出</h1>
                                    <div data-role="fieldcontain">
                                        <fieldset data-role="controlgroup" data-type="horizontal">
                                            <legend>類型:</legend>
                                            <input type="radio" name="items" id="itemsf" value="飲食">
                                            <label for="itemsf">飲食</label>
                                            <input type="radio" name="items" id="itemsp" value="娛樂">
                                            <label for="itemsp">娛樂</label>
                                            <input type="radio" name="items" id="itemsh" value="醫療">
                                            <label for="itemsh">醫療</label>
                                            <input type="radio" name="items" id="itemst" value="交通">
                                            <label for="itemst">交通</label>
                                        </fieldset>
                                    </div>
                                    <div class="form-group" data-role="fieldcontain">
                                        <label for="money">金額:</label>
                                        <input type="text" name="money" id="money">
                                    </div>
                                    <div class="form-group" data-role="fieldcontain">
                                        <label for="date">日期:</label>
                                        <input type="date" name="date" id="date">
                                    </div>
                                    <button type="button" class="btn btn-primary" id="ok_btn">確認</button>
                                    <button type="button" class="btn btn-outline-primary" id="out">取消</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </body>
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>