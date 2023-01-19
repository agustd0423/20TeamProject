function question(){
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var message = document.getElementById("message");

    if(name.value == ""){
        alert("이름을 입력하세요.")
        return;
    }

    if(email.value == ""){
        alert("이메일을 입력하세요.")
        return;
    }

    if(message.value == ""){
        alert("내용을 입력하세요.")
        return;
    }

    alert("문의가 완료 되었습니다")
    location.href = 'question1.html';
}