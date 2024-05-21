<?php
    session_start();
    // 세션이 생성되지 않았을 때만 생성(즉, 초기에만 생성)
    if (!isset($_SESSION['answer'])) {
        $_SESSION['answer'] = rand(1, 100);
        $_SESSION['tryCount'] = 0;
        $_SESSION['array'] = array();
    }
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST">
            <label>숫자를 입력하시오. (양수)</label> <br>
            <input type="text" name="guess">
            <input type="submit" value="확인"> <br>
            <?php 
                if ($_SESSION['tryCount'] === 0)
                    echo "<label>시도 횟수 : ".$_SESSION['tryCount']."<br></label>";
            ?>
        </form>
    </body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $guess = $_POST['guess'];

        // 입력 값이 숫자가 아닌 경우
        if (!is_numeric($guess))
            echo "숫자가 아닙니다. 숫자를 입력해주세요.";
        else {
            $_SESSION['tryCount']++;

            // 최대 시도 초과한 경우
            if ($_SESSION['tryCount'] == 5) {
                echo "시도 횟수 : ".$_SESSION['tryCount']."<br>";
                echo "최대 시도 횟수가 초과했습니다! <br>";
                session_destroy();
            }
            else {
                $_SESSION['array'][] = $guess;

                for ($i = 0 ; $i < $_SESSION['tryCount'] ; $i++) {
                    echo "시도 횟수 : ".($i+1)."<br>";
        
                    if ($_SESSION['array'][$i] > $_SESSION['answer'])
                        echo "당신이 입력한 숫자 ".$_SESSION['array'][$i]."보다 Down! <br>";
                    elseif ($_SESSION['array'][$i] < $_SESSION['answer'])
                        echo "당신이 입력한 숫자 ".$_SESSION['array'][$i]."보다 Up! <br>";
                    else {
                        echo "당신이 입력한 숫자 ".$_SESSION['array'][$i]."은 정답입니다! <br>";
                        session_destroy();
                    }
                }
            }
        }
    }
    
?>