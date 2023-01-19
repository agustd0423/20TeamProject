function join(){
    var name = document.getElementById("name");
    var userid = document.getElementById("userid");
    var password = document.getElementById("password");
    var repw = document.getElementById("repw");
    var email = document.getElementById("email");
    var birth_y = document.getElementById("birth_y");
    var birth_m = document.getElementById("birth_m");
    var birth_d = document.getElementById("birth_d");
    var phonenb = document.getElementById("phonenb");
    var cn = document.getElementById("cn");

    if(name.value == ""){
        alert("이름을 입력하세요.")
        return;
    }

    if(userid.value == ""){
        alert("아이디를 입력하세요.")
        return;
    }

    if(password.value == ""){
        alert("비밀번호를 입력하세요.")
        return;
    }

    if(repw.value !== password.value){
        alert("비밀번호가 일치하지 않습니다.")
        return;
    }

    if(email.value == ""){
        alert("이메일을 입력하세요.")
        return;
    }

    if(birth_y.value == ""){
        alert("년도를 입력하세요.")
        return;
    }

    if(birth_m.value == ""){
        alert("월을 입력하세요.")
        return;
    }

    if(birth_d.value == ""){
        alert("일를 입력하세요.")
        return;
    }

    var reg = /^[0-9]+/g;

    if(!reg.test(phonenb.value)){
        alert("전화번호는 숫자만 입력할 수 있습니다.")
    }

    if(phone.value == ""){
        alert("전화번호를 입력하세요.")
        return;
    }

    if(cn.value == ""){
        alert("인증번호를 입력하세요.")
        return;
    }

    if(document.getElementById("agree").checked = false){
        alert("약관 동의를 체크하세요.")
        return;
    }

    document.join_form.submit();
}