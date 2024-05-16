<html>
    <head>
        <meta charset = "utf-8">
        <link href = "style.css" rel = "stylesheet">
    </head>
    <body>
        <ul>
            <li>나의 취미 :
                <?php
                    if(isset($_POST["hobby"]) && is_array($_POST["hobby"])){
                        $num = count($_POST["hobby"]);
                        for($i = 0; $i < $num; $i++){
                            echo htmlspecialchars($_POST["hobby"][$i]);
                            if($i != $num - 1)
                                echo ", ";
                        }
                    }
                ?>
            </li>
        </ul>
    </body>
</html>