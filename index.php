<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인화면</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "main.css"/>
</head>

<body>
<ul class="nav justify-content-end">
        <?php
        if (isset($_SESSION['userId'])) {
        ?>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" id="brand">
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
                        <a href="index.php" role="button" type="button" class="btn btn-outline-dark">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        } else {
        ?>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" id="brand">
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
                        <a href="login.php" role="button" type="button" class="btn btn-outline-dark">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        }
    ?>
</ul>

    <div class="div">
    <!--서류 미리보기-->
    <div class="container" id="container">
      <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img\2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 id="h5" >경력 & 실적</h5>
              <p id="p">경력 사항 및 해당 분야 실적</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img\3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 id="h5">현황 & 경력 & 실적</h5>
              <p>사업 책임 기술인 현황 및 분야별 책임 기술인의 자격 경력 및 실적</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img\4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 id="h5">교육 훈련 & 수행 실적</h5>
              <p>교육 훈련 및 전차 용역 수행 실적</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </div>

    <article class="main-text">
      <h3>웹 서비스를 제작하게 된 동기</h3>
      <br>
        <p>
          &#34;기업 연계 프로젝트에 앞서서 
            직접 여러 기업에서 필요한 서비스에 대해 자문을 구했고,
             모 기업체에서 해당 서비스에 대한 의견을 얻게 되어
             기획하게 되었다.&#34;
        </p>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        function logout() {
            console.log("hello");
            const data = confirm("로그아웃 하시겠습니까?");
            if (data) {
                location.href = "logout.php";
            }

        }
    </script>
</body>

</html>