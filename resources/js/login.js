$(document).ready(function(){
    var flag_lEmail    = false;
    var flag_lpassword = false;
    var flag_lpwd2     = false;
    
    $('#login_btn').click(function(e){
        e.preventDefault();
        if(flag_lEmail && flag_lpassword && flag_lpwd2){
            var dataJSON = {};
            dataJSON["Email"]    = $("#lEmail").val();
            dataJSON["Password"] = $("#lpassword").val(); 
            $.ajax({
                type: 'POST',
                url: 'loginMember',
                data: JSON.stringify(dataJSON),
                contentType: "application/json;charset=utf-8",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: "json",
                success: function(data){
                    if(data.state){
                        alert(data.message);
                        location.href = "message";
                    }else{
                        alert(data.message);
                    }
                },
                error: function(){
                    alert("error-member_login");
                }
            });
        }else{
            alert("輸入資料不符合規定!!!");
        }
    });

    //即時監聽    信箱
    $("#lEmail").bind("input propertychange",function()
    {
        if($(this).val().length < 31 && $(this).val().length > 10){
            $("#err_lEmail").html("信箱格式符合規定");
            $("#err_lEmail").css("color","#0E0");
            flag_lEmail = true;                    
        }
        else{
            $("#err_lEmail").html("字數不符合規定!");
            $("#err_lEmail").css("color","#F00");
            flag_lEmail = false;
        }
        
    });

    //即時監聽    密碼
    $("#lpassword").bind("input propertychange",function()
    {
        if($("#lpassword").val().length < 9 && $("#lpassword").val().length > 3){
            $("#err_lpassword").html("符合規定");
            $("#err_lpassword").css("color","#0E0");
            flag_lpassword = true;
        }
        else{
            $("#err_lpassword").html("字數不符合規定!");
            $("#err_lpassword").css("color","#F00");
            flag_lpassword = false;
        }
        
    });

    //即時監聽    確認密碼
    $("#lpwd2").bind("input propertychange",function()
    {
        if($("#lpwd2").val() == $("#lpassword").val()){
            $("#err_lpwd2").html("與密碼相同");
            $("#err_lpwd2").css("color","#0E0");
            flag_lpwd2 = true;
        }
        else
        {
            $("#err_lpwd2").html("與密碼不符合");
            $("#err_lpwd2").css("color","#F00");
            flag_lpwd2 = false;
        }
    });


    $('#register').bind("click", function () {
        location.href = "register";
    });
});