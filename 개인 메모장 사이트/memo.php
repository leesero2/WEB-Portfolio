<?
    session_start(); 
    include "dbClass.php";
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>개인 메모장 사이트</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cheatsheet/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/cheatsheet.css" rel="stylesheet">

  </head>
  <body class="bg-light">
  <?php if(isset($_SESSION['isLoginId'])){ ?>
    
    <!-- header -->
    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                Personal Memo
            </h1>
            <a href="logOut.php" class="ms-auto link-light" hreflang="ar">로그아웃</a>
        </div>
    </header>

    <!-- aside -->
    <aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
        <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>
    </aside>

    <!-- content -->
    <div class="bd-cheatsheet container-fluid bg-body">
        <section id="content">
            <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Memo</h2>
            
            <article class="my-3" id="overview">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>메모작성</h3>
                </div>
                <form action="memoProc.php" method="post">
                    <div>
                        <div class="bd-example">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Content</label>
                                    <input type="text" name="memo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="freememo" class="form-text">기록해두고싶은 메모를 작성하세요!</div>
                                </div>
                                <button type="submit" class="btn btn-primary">저장하기</button>
                        </div>
                    </div>
                </form>
            </article>

    <!-- 메모테이블 -->
    <article class="my-3" id="tables">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <!-- <h3>기록된 메모
        </h3> -->
      </div>

      <div>
        <div class="bd-example">
        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">아이디</th>
            <th scope="col">메모</th>
            <th scope="col">등록일</th>
          </tr>
        <?
            $query = "select * from memo where user_id=? order by idx desc ";
            $list = $db->query($query, $_SESSION['isLoginId'])->fetchAll(); 
            foreach($list as $data){ 
        ?>
          </thead>
          <tbody>
        <tr>
            <td> <?=$data['user_id']?>
            <td> <?=nl2br($data['memo'])?>
            <td> <?=$data['regdate']?> 
        </tr>
        <? } ?>
          </tbody>
        </table>
        </div>
      </div>
    </article>
  </section>

</div>
      <? } ?>
      <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
      <!-- <script src="js/memo.js"></script> -->
  </body>
</html>
