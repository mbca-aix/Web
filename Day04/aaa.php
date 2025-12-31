<?php

    // 백엔드 php파일에서 사용자측에 보여주는(응답하는) 내용물이 HTML형식이라는 것을 알려줘야 함.
    // 한글깨짐 방지
    header('Content-Type:text/html; charset=utf-8');

    // 사용자가 form요소를 이용하여 보낸 데이터를 저장(변수가 필요)
    // php언어서 변수를 선언하는 문법 [ $변수명=값  ]
    // 사용자가 GET방식으로 보낸 값들은 모두 $_GET[] 이라는 배열에 자동 저장됨.
    $title= $_GET['title']; 
    $message= $_GET["msg"];
    
    // 원래는 이 값들을 DB에 저장하는 등의 작업을 해야함. 
    // 지금은 그냥 연습으로 받은 데이터를 그대로 사용자 웹브라우저에 응답(response)

    // php언어에서 사용자 브라우저에 보여질 내용을 보내는 기능.
    ;echo "<h1>백엔드에서 받은 글씨</h1>";
    echo "<p>제목 : $title</p>";
    echo "<p>메세지 : $message</p>";
?>

여기에 글씨쓰면.. php영역이 아니어서 그냥 브라우저에서 보여주는 글씨
<h3>영역 밖에 만들 글쓰는 HTML임. $message</h3>
<h5> <?php echo $title;  ?> </h5>
