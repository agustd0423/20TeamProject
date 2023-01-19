<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<link rel = "stylesheet" href="newuser.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
  body {
    min-height: 100vh;
    background-color: #3a3a3a;

  }

  .input-form  {
    max-width: 550px;
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 32px;

    background: #fff;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15)
  }
</style>
<body>
 <!-- nav bar -->
 <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="main.html" id="brand">
      <img src="img\1.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      퇴근하고 싶조
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="howuse.html" id="howuse">이용 방법</a>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            서류 체험판
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="proposal.html">제안서</a></li>
            <li><a class="dropdown-item" href="estimate.html">견적서</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">서배 컴퍼니</a></li>
            <li><a class="dropdown-item" href="#">잉뉴 컴퍼니</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="question.html" id="question">문의사항</a>
        </li>
      </ul>
      <form class="d-flex" role="button">
        <a href="login.html" role="button" type="button" class="btn btn-outline-dark">Login/Jion</a>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <div class="input-form-backgroud row">
      <div class="input-form col-md-12 mx-auto">
        <h4 class="mb-3">회원가입</h4>
        <form action="signupProcess.php" name="join_form" method="POST" id="signup-form" >
            <div class=" mb-3">
              <label for="name">이름</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required>
              <!-- <div class="invalid-feedback">
                이름을 입력해주세요.
              </div> -->
            </div>
  
            <div class=" mb-3">
              <label for="userid">아이디</label>
              <input type="text" class="form-control" name="userid" id="userid" placeholder="" value="" required>
              <button  id="id_check_bt" class="btn btn-outline-secondary" onclick="id_check();">중복 확인</button>
            <!-- <div class="invalid-feedback">
              아이디를 입력해주세요.
            </div> -->
          </div>
  
            <!-- <form class="d-flex" role = "button"></form>
            <a role="button" type="button" class="btn btn-outline-dark" style="float: right " > 중복확인</a>
            <br> -->
            
  
          <div class="mb-3">
            <label for="password">비밀번호</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="" required>
            <!-- <div class="invalid-feedback">
              비밀번호를 입력해주세요.
            </div> -->
          </div>
  
          <div class="mb-3">
            <label for="password">비밀번호 재확인 </label>
            <input type="password" class="form-control" name="repw" id="repw" placeholder="" required>
            <!-- <div class="invalid-feedback">
              비밀번호 재확인을 입력해주세요.
            </div> -->
          </div>
  
          <div class="mb-3">
            <label for="email">이메일</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
            <!-- <div class="invalid-feedback">
              이메일을 입력해주세요.
            </div> -->
          </div>
          
          <div class="row">
            <div class=" mb-3">
              &nbsp;&nbsp;
             <label for="birth">생년월일</label>
             <br>
             &nbsp;&nbsp;
             <select  style="width:130px; height: 35px; border-color: rgb(214, 214, 214); border-radius: 5px;" name="birth_Y" id="birth_y"> 
                <option value="">--년--</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
              </select>년
              <select style="width:130px; height: 35px; border-color: rgb(214, 214, 214); border-radius: 5px;" name="birth_m" id="birth_m">
                 <option value="">--월--</option>
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
                 <option>6</option>
                 <option>7</option>
                 <option>8</option>
                 <option>9</option>
                 <option>10</option>
                 <option>11</option>
                 <option>12</option>
              </select>월
              <select  style="width:130px; height: 35px; border-color: rgb(214, 214, 214); border-radius: 5px;" name="birth_d" id="birth_d">
                <option value="">--일--</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
              </select>일
             <!-- <div class="invalid-feedback">  피드백 적용 안됌
             생년월일을 입력해주세요. 
             </div> -->
            </div>
          </div>
          <div class="mb-3">
            <label for="phone">연락처</label>
            <input type="phone" class="form-control" name="phone" id="phone" placeholder="" required> <!--번호 입력-->
            <button  id="id_check_bt" class="btn btn-outline-secondary">인증 받기</button>
           <!-- <div class="invalid-feedback">
            연락처를 입력해주세요. 
           </div> -->
        </div>
  
          <!-- <form class="d-flex" role = "button"></form>
          <a role="button" type="button" class="btn btn-outline-dark"  style="float: right "> 인증하기</a>
          <br> -->
  
          <div class="mb-3">
            <label for="cn">인증번호</label>
            <input type="cn" class="form-control" name="cn" id="cn" placeholder="" required>
            <button  id="id_check_bt" class="btn btn-outline-secondary">인증 확인</button>
            <!-- <div class="invalid-feedback">
             인증번호를 입력해주세요. 
            </div> -->
         </div> 
         
          <br>
         <hr class="mb-4"> <!--수평선 넣기-->
         <div class="custom-control custom-checkbox">
          <label><input type="checkbox" value="y" name="agree" id="agree">개인정보 수집 및 이용에 동의합니다.</label>
          <!-- <input type="checkbox" class="custom-control-input" name="aggrement" id="aggrement" required>
          <label class="custom-control-label" style="color : black;" for="aggrement">개인정보 수집 및 이용에 동의합니다.</label> -->
         </div>
         <br>
         <div class="mb-4">
        <!--<button id="joinbutton" class="button" type="submit">가입 완료</button>-->
        <button id="signup-button" class="btn btn-outline-secondary btn-lg btn-block btn1" onclick="join();">가입 완료</button>
        </form>
      </div>
    </div> 
  </div>
  <script>
    function join(){
    var name = document.getElementById("name");
    var id = document.getElementById("id");
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

    if(id.value == ""){
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

    if(phonenb.value == ""){
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
  </script>
</body>

</html>