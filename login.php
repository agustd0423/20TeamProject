<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href ="login.css">
    <script src="C:\test\test\test\id_pw.js" defer=""></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <!-- nav bar -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="main.html" id="brand">
        <img src="C:\test\test\test\img\1.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        20Team
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
    <form method="POST" action="login_process.php"> 
    <div class="w-50 ml-auto mr-auto mt-5">
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">아이디</label>
            <input name="userid" type="text" class="form-control" id="exampleFormControlInput1" placeholder="id">
        </div>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
            <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
        </div>
    
        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
    </div>
    <div>
        <a id = "find_idpw" href="find_idpw.html" role="button" type = "button">아이디 / 비밀번호 찾기 </a>  
        &nbsp;  &nbsp;  &nbsp;
        &nbsp;  &nbsp;
        <a id = "join" href="signup.php" role="button" type = "button" > 회원가입</a>
      </div>
    </form>
</body>

</html>