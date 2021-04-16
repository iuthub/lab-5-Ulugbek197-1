<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link rel="stylesheet" href="buyagrade.css">
    <?php

    $num = $_POST["cardnum"];
    $name = $_POST["name"];
    $section = $_POST["select"];
    $card = $_POST["creditcard"];

    $dataNum = $num;
    $dataName = $name;
    $dataSection = $section;
    $dataCard = $card;
    $fileName = 'suckers.txt';
    $semicolon = ";";
    $newLine = "\r\n";
    file_put_contents($fileName, $dataName, FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, $semicolon, FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, $dataSection, FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, $semicolon, FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, $dataNum, FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, $semicolon, FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, $dataCard, FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, $newLine, FILE_APPEND | LOCK_EX);
    ?>
</head>

<body>
<h1>Thanks, sucker!</h1>

<p>Your information has been recorded.</p>

<dl>
    <dt>Name</dt>
    <dd><?php echo $name; ?></dd>

    <dt>Section</dt>
    <dd><?php echo $section; ?></dd>

    <dt>Credit Card</dt>
    <dd><?php
        echo "$num $card";
        ?></dd>
</dl>
<pre>
           <br> <?php
            echo file_get_contents("suckers.txt", true);
            ?>
        </pre>

</body>
</html>
























<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml" lang="en">-->
<!--<head>-->
<!--    <title>Buy Your Way to a Better Education!</title>-->
<!--    <link rel="stylesheet" href="buyagrade.css">-->
<!--    --><?php
//
//    $num = $_POST["cardNum"];
//    $name = $_POST["name"];
//    $section = $_POST["select"];
//    $card = $_POST["creditCard"];
//
//
//
//
//    $datanum=$num;
//    $dataname=$name;
//    $datasection=$section;
//    $datacard=$card;
//    $fp = 'sucker.txt';
//    $semicolon = ";";
//    $newline = "\r\n";
//    file_put_contents($fp, $dataname, FILE_APPEND | LOCK_EX);
//    file_put_contents($fp, $semicolon, FILE_APPEND | LOCK_EX);
//    file_put_contents($fp, $datasection, FILE_APPEND | LOCK_EX);
//    file_put_contents($fp, $semicolon, FILE_APPEND | LOCK_EX);
//    file_put_contents($fp, $datanum, FILE_APPEND | LOCK_EX);
//    file_put_contents($fp, $semicolon, FILE_APPEND | LOCK_EX);
//    file_put_contents($fp, $datacard, FILE_APPEND | LOCK_EX);
//    file_put_contents($fp, $newline, FILE_APPEND | LOCK_EX);
//
//
//
//
//    ?>
<!--</head>-->
<!---->
<!--<body>-->
<!--<h1>Thanks, sucker!</h1>-->
<!---->
<!--<p>Your information has been recorded.</p>-->
<!---->
<!--<dl>-->
<!--    <dt>Name</dt>-->
<!--    <dd>--><?php //echo $name; ?><!--</dd>-->
<!---->
<!--    <dt>Section</dt>-->
<!--    <dd>--><?php //echo $section; ?><!--</dd>-->
<!---->
<!--    <dt>Credit Card</dt>-->
<!--    <dd>--><?php
//        echo "$num $card";
//        ?><!--</dd>-->
<!--</dl>-->
<!--<pre>-->
<!--            --><?php
//            echo file_get_contents("sucker.txt", true);
//            ?>
<!--        </pre>-->
<!---->
<!--</body>-->
<!--</html>-->