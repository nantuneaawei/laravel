$(document).ready(function(){
    var flag_Email    = false;
    var flag_password = false;
    var flag_pwd2     = false;
    var flag_UserName = false;
    
    $('#register_btn').click(function(e){
        e.preventDefault();
        if(flag_Email && flag_password && flag_pwd2 && flag_UserName){
            var dataJSON = {};
            dataJSON["Email"]    = $("#rEmail").val();
            dataJSON["Password"] = $("#rpassword").val();
            dataJSON["UserName"] = $("#rUserName").val(); 
            $.ajax({
                type: 'POST',
                url: 'registerMember',
                data: JSON.stringify(dataJSON),
                contentType: "application/json;charset=utf-8",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: "json",
                success: function(data){
                    if(data.state){
                        alert(data.message);
                        location.href = "login";
                    }else{
                        alert(data.message);
                    }
                },
                error: function(){
                    alert("error-member_register");
                }
            });
        }else{
            alert("輸入資料不符合規定!!!");
        }
    });

    //即時監聽    信箱
    $("#rEmail").bind("input propertychange",function()
    {
        if($(this).val().length < 31 && $(this).val().length > 10){
            var jsonData = {
                'Email': $("#rEmail").val()
            };
            $.ajax({
                type: 'GET',
                url: 'checkEmail',
                data: jsonData,
                dataType: "json",
                success: function(data){
                    if(data.state){
                        //信箱不存在, 可以以使用此信箱
                        $("#err_rEmail").html(data.message);
                        $("#err_rEmail").css("color", "green");
                        flag_Email = true;
                    }else{
                        //信箱存在, 不可以以使用此信箱
                        $("#err_rEmail").html(data.message);
                        $("#err_rEmail").css("color", "red");
                        flag_Email = false;
                    }
                },
                error: function(){
                    alert("error-member_check_uni_api.php");
                }
            });                    
        }
        else{
            $("#err_rEmail").html("字數不符合規定!");
            $("#err_rEmail").css("color","#F00");
            flag_Email = false;
        }
        
    });

    //即時監聽    密碼
    $("#rpassword").bind("input propertychange",function()
    {
        if($("#rpassword").val().length < 9 && $("#rpassword").val().length > 3){
            $("#err_rpassword").html("符合規定");
            $("#err_rpassword").css("color","#0E0");
            flag_password = true;
        }
        else{
            $("#err_rpassword").html("字數不符合規定!");
            $("#err_rpassword").css("color","#F00");
            flag_password = false;
        }
        
    });

    //即時監聽    確認密碼
    $("#rpwd2").bind("input propertychange",function()
    {
        if($("#rpwd2").val() == $("#rpassword").val()){
            $("#err_rpwd2").html("與密碼相同");
            $("#err_rpwd2").css("color","#0E0");
            flag_pwd2 = true;
        }
        else
        {
            $("#err_rpwd2").html("與密碼不符合");
            $("#err_rpwd2").css("color","#F00");
            flag_pwd2 = false;
        }
    });

    //即時監聽    暱稱
    $("#rUserName").bind("input propertychange",function()
    {
        if($("#rUserName").val().length < 11 && $("#rUserName").val().length > 0){
            $("#err_rUserName").html("符合規定");
            $("#err_rUserName").css("color","#0E0");
            flag_UserName = true;
        }
        else{
            $("#err_rUserName").html("字數不符合規定!");
            $("#err_rUserName").css("color","#F00");
            flag_UserName = false;
        }
        
    });

    $('#login').bind("click", function () {
        location.href = "login";
    });
});