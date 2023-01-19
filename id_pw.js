function login(){
    var id = document.getElementById("id").value
    var pw = document.getElementById("pw").value
    // var form = document.f1;

    if(id == "leh2353" && pw == "123"){
        location.href = 'finlogin.html';
    }
    else if (id == "") {
        alert("아이디를 입력해 주십시오.");
        return;
    }
 
    else if (pw == "") {
        alert("비밀번호를 입력해 주십시오.");
        return;
    }
    else{
        alert("아이디 또는 비밀번호가 틀렸습니다.")
    }
    /*form.action = "login_ok.php";
    form.submit();*/
}