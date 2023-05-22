$(document).ready(function(){
    var flag_Email    = false;
    var flag_password = false;
    var flag_pwd2     = false;
    var flag_UserName = false;
    
    $('#ok_btn').click(function(e){
        e.preventDefault();
        if(flag_Email && flag_password && flag_pwd2 && flag_UserName){
            var dataJSON = {};
            dataJSON["Email"]    = $("#Email").val();
            dataJSON["Password"] = $("#password").val();
            dataJSON["UserName"] = $("#UserName").val(); 
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
    $("#Email").bind("input propertychange",function()
    {
        if($(this).val().length < 31 && $(this).val().length > 10){
            var jsonData = {
                'Email': $("#Email").val()
            };
            $.ajax({
                type: 'GET',
                url: 'checkEmail',
                data: jsonData,
                dataType: "json",
                success: function(data){
                    if(data.state){
                        //信箱不存在, 可以以使用此信箱
                        $("#err_Email").html(data.message);
                        $("#err_Email").css("color", "green");
                        flag_Email = true;
                    }else{
                        //信箱存在, 不可以以使用此信箱
                        $("#err_Email").html(data.message);
                        $("#err_Email").css("color", "red");
                        flag_Email = false;
                    }
                },
                error: function(){
                    alert("error-member_check_uni_api.php");
                }
            });                    
        }
        else{
            $("#err_Email").html("字數不符合規定!");
            $("#err_Email").css("color","#F00");
            flag_Email = false;
        }
        
    });

    //即時監聽    密碼
    $("#password").bind("input propertychange",function()
    {
        if($("#password").val().length < 9 && $("#password").val().length > 3){
            $("#err_password").html("符合規定");
            $("#err_password").css("color","#0E0");
            flag_password = true;
        }
        else{
            $("#err_password").html("字數不符合規定!");
            $("#err_password").css("color","#F00");
            flag_password = false;
        }
        
    });

    //即時監聽    確認密碼
    $("#pwd2").bind("input propertychange",function()
    {
        if($("#pwd2").val() == $("#password").val()){
            $("#err_pwd2").html("與密碼相同");
            $("#err_pwd2").css("color","#0E0");
            flag_pwd2 = true;
        }
        else
        {
            $("#err_pwd2").html("與密碼不符合");
            $("#err_pwd2").css("color","#F00");
            flag_pwd2 = false;
        }
    });

    //即時監聽    暱稱
    $("#UserName").bind("input propertychange",function()
    {
        if($("#UserName").val().length < 11 && $("#UserName").val().length > 0){
            $("#err_UserName").html("符合規定");
            $("#err_UserName").css("color","#0E0");
            flag_UserName = true;
        }
        else{
            $("#err_UserName").html("字數不符合規定!");
            $("#err_UserName").css("color","#F00");
            flag_UserName = false;
        }
        
    });
});