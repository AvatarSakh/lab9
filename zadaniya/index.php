<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        div{
            margin-bottom: 10px;
            width: 300px;
        }
        div p{
            margin-bottom: 1px;
        }
        div button{
            margin-top: 5px;
        }
        html, body{
            height: 100%;
        }
        html{
            display: table;
            margin: auto;
        }
        body{
            display: table-cell;
            vertical-align: middle;
        }
        table,
        th,
        td {
            border: 1px solid;
            padding: 3px;
            padding-left: 5px;
            padding-right: 5px;
        }
        </style>
</head>
<body>
    
<?php
    //Задание 1//
    echo "Задание 1<br>";
    $newYear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
    $today = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
    echo ($newYear-$today)/(60*60*24);
    echo "<br>-------------------------------------<br>";
?>

<p>Задание 2</p>

        <form name="form2" action="<?php
        if(!empty($_POST["input2"]))
        {
        $n = (int)$_POST["input2"]; 
        $result = "Невисокосный";
        if($n%4 ==0)
        {   
            $result = "Високосный";
            if($n%100 == 0)
            {
                if($n%400 != 0) $result = "Невисокосный";
            }
        }
        }
        else{
            $result = "";
        }
        ?>" method="post" >

        <label for="z2Input" class="form-label">Введите год</label>
        <input type="text" class="form-control" id="z2Input" value = "" name="input2">
        <input type="submit" class="btn btn-primary" name="submit2"></button>
        <br>
        <label class="form-label" id="z2Label" name="label2"><?php echo $result; ?></label>
        <hr>
     </form>
        

        <p>Задание 3</p>
        <form name="form3" action="<?php
        if(!empty($_POST["input3"]))
        {
            
            
            $n3 = $_POST["input3"]; 
            $n3 = explode('.', $n3);
            $result3 = date('l', strtotime($n3[2]."-".$n3[1]."-".$n3[0]));

        }
        else{ $result3 = "";}
        
    ?>" method="post">

    <label for="z3Input" class="form-label">Введите год</label>
    <input type="text" class="form-control" id="z3Input" value = "" name="input3">
    <input type="submit" class="btn btn-primary" name="submit3"></button>
    <br>
    <label class="form-label" id="z3Label" name="label3"><?php echo $result3; ?></label>
    <hr>
 </form>
        

<?php
    
    //Задание 4//
    echo "<br>Задание 4<br>";
    echo date('j F Y, l');
    echo "<br>-------------------------------------";

?>

<p>Задание 5</p>
        <form name="form5" action="<?php
        if(!empty($_POST["input5"]))
        {
            $n5 = $_POST["input5"]; 
            $n5 = explode('.', $n5);
            $birthday = mktime(0, 0, 0, $n5[1],$n5[0], date("Y")+1);
            $today = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
            $result5=  ($birthday-$today)/(60*60*24);
        }
        else{ $result5 = "";}
        
    ?>" method="post">

    <label for="z5Input" class="form-label">Введите дату</label>
    <input type="text" class="form-control" id="z5Input" value = "" name="input5">
    <input type="submit" class="btn btn-primary" name="submit5"></button>
    <br>
    <label class="form-label" id="z5Label" name="label5"><?php echo $result5; ?></label>
    <hr>
 </form>

<?php


    //Задание 6//
    echo "<br>Задание 6<br>";
    $day6 = 28;
    while(date("l", strtotime("2023-02-$day6")) != "Sunday")
    {
        $day6 -= 1;
    }
    $masslenitza = mktime(0, 0, 0, 2, $day6, date('Y') + 1);
    $today = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
    echo ($masslenitza-$today)/(60*60*24);
    echo "<br>-------------------------------------";

?>


<p>Задание 7</p>
        <form name="form7" action="<?php
        if(!empty($_POST["input7"]))
        {
            $n7 = $_POST["input7"]; 
            $n7 = explode('.', $n7);

            function getZodiacalSign($month, $day) {
                $signs = array("Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец");
                $signsstart = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
                return $day < $signsstart[$month + 1] ? $signs[$month - 1] : $signs[$month % 12];
              }
            
            $result7 = getZodiacalSign($n7[1],$n7[0]);
        }
        else{ $result7 = "";}
        
    ?>" method="post">

    <label for="z7Input" class="form-label">Введите дату</label>
    <input type="text" class="form-control" id="z7Input" value = "" name="input7">
    <input type="submit" class="btn btn-primary" name="submit7"></button>
    <br>
    <label class="form-label" id="z7Label" name="label7"><?php echo $result7; ?></label>
    <hr>
 </form>


<?php


    //Задание 8//
    echo "<br>Задание 8<br>";
    $prazdnik = array("01-01","28-02","01-09");
    $flag = false;
    for($i = 0; $i < count($prazdnik); $i++)
    {
        if(date("d-m")==$prazdnik[$i]) $flag = true;
    }
    if($flag == true) echo "С праздником";
    else echo "Сегодня нет праздника";
    echo "<br>-------------------------------------";
?>


<p>Задание 9</p>
        <form name="form9" action="<?php
        if(!empty($_POST["input9"]))
        {
            $n9 = $_POST["input9"]; 
            $n9 = explode('.', $n9);

            function getZodiacalSign($month, $day) {
                $signs = array("Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец");
                $signsstart = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
                return $day < $signsstart[$month + 1] ? $month - 1 : $month % 12;
              }

              $future = array(
                array("Удачный день козерогов","Счастливый день козерогов","Плохой день козерогов"),
                array("Удачный день водолеев","Счастливый день водолеев","Плохой день водолеев"),
                array("Счастливый день рыб" ,"Удачный день рыб","Плохой день рыб"),
                array("Удачный день овенов","Счастливый день овенов","Плохой день овенов"),
                array("Удачный день тельцов","Счастливый день тельцов","Плохой день тельцов"),
                array("Удачный день близнецов","Счастливый день близнецов","Плохой день близнецов"),
                array("Удачный день раков","Счастливый день раков","Плохой день раков"),
                array("Удачный день львов","Счастливый день львов","Плохой день львов"),
                array("Удачный день дев","Счастливый день дев","Плохой день дев"),
                array("Удачный день весов","Счастливый день весов","Плохой день весов"),
                array("Удачный день скорпионов","Счастливый день скорпионов","Плохой день скорпионов"),
                array("Удачный день стрельцов","Счастливый день стрельцов","Плохой день стрельцов"),
              );
            $result9 = $future[getZodiacalSign($n9[1],$n9[0])][0];
        }
        else{ $result9 = "";}
        
    ?>" method="post">

    <label for="z9Input" class="form-label">Введите дату</label>
    <input type="text" class="form-control" id="z9Input" value = "" name="input9">
    <input type="submit" class="btn btn-primary" name="submit9"></button>
    <br>
    <label class="form-label" id="z9Label" name="label9"><?php echo $result9; ?></label>
    <hr>
 </form>

 <p>Задание 10</p>
        <form name="form10" action="<?php
        if(!empty($_POST["input10"]))
        {
            $text = strip_tags($_POST["input10"]);
            $result102 = strlen($text);
            $text = explode(" ", $text);
            $result101 = count($text);
            
            $count = 0;
            for($i = 0; $i < count($text);$i++)
            {
                $count += strlen($text[$i]);
            }
            $result103 = $count;


        }
        else{
             $result101 = "";
             $result102 = "";
             $result103 = "";
        }
        
    ?>" method="post">

    <label for="z10Input" class="form-label">Введите текст</label>
    <br>
    <textarea id="z10Input" value = "" name="input10"></textarea>
    <br>
    <input type="submit" class="btn btn-primary" name="submit10"></button>
    <br>
    <label class="form-label" id="z10Label" name="label10"><?php echo "Кол-во слов: ".$result101."<br>";
    echo "Кол-во cимволов: ".$result102."<br>";
    echo "Кол-во символов без пробелов: ". $result103."<br>";
    ?></label>
    <hr>
 </form>

 <p>Задание 11</p>
        <form name="form11" action="<?php
        if(!empty($_POST["input11"]))
        {
            $text = strip_tags($_POST["input11"]);
            
            $masChar = array();
            $index = 0;
            $count = strlen($text);
            foreach (count_chars($text, 1) as $i => $val) {
                $masChar[$index] = chr($i);
                $result11[$index] = $val/$count * 100;
                $index++;
            }
        }
        else{
             $result11 = "";
             $masChar = "";
        }
        
    ?>" method="post">

    <label for="z11Input" class="form-label">Введите текст</label>
    <br>
    <textarea id="z11Input" value = "" name="input11"></textarea>
    <br>
    <input type="submit" class="btn btn-primary" name="submit11"></button>
    <br>
    <label class="form-label" id="z11Label" name="label11"><?php 

   if(!empty($_POST["input11"]))
   {
       for($i = 0 ; $i< count($result11); $i++)
       {
          echo $masChar[$i]." : ".$result11[$i]."%<br>";
        }
   }
    ?></label>
    <hr>
 </form>


 <p>Задание 12</p>
        <form name="form12" action="<?php
        if(!empty($_POST["input12"]))
        {
            $str = array(
                "dsadsada",
                "gfasdhjsad",
                "asd",
                "bcd"
            );

            $n12 = $_POST["input12"]; 
            
            $result12 = [];
            for($i = 0; $i< count($str);$i++)
            {
                $flag = true;
                for($j = 0; $j< strlen($n12);$j++)
                {
                    if(strpos($str[$i],$n12[$j]) == false) $flag = false;
                }
                if($flag == true) array_push($result12,$str[$i]);
            }



        }
        else{ $result12 = "";}
        
    ?>" method="post">

    <label for="z12Input" class="form-label">Введите буквы</label>
    <input type="text" class="form-control" id="z12Input" value = "" name="input12">
    <input type="submit" class="btn btn-primary" name="submit12"></button>
    <br>
    <label class="form-label" id="z12Label" name="label12"><?php if(!empty($_POST["input12"])) print_r($result12);
         ?></label>
    <hr>
 </form>


 <p>Задание 13</p>
        <form name="form13" action="" method="post">

    <label for="z13Input" class="form-label">Введите текст</label>
    <br>
    <textarea id="z13Input" value = "" name="input13"></textarea>
    <br>
    <input type="submit" class="btn btn-primary" name="submit13"></button>
    <br>
    <label class="form-label" id="z13Label" name="label13"></label>
 </form>
 
 <?php
        $abc = "abcdefghijklmnopqrstuvwxyz";
        if(!empty($_POST["input13"]))
        {
            $words = explode(' ', $_POST["input13"]);
            $result1113 = [[]];
            for($i = 0 ;$i<strlen($abc);$i++)
            {
                foreach ($words as $word) {
                    $word = strtolower($word);
                    if ($word[0] == $abc[$i]) {
                        $result1113[$abc[$i]][] = $word;
                    }
                }
            }
            
            $index = 0;
            foreach ($result1113 as $key => $item) {
                if($index ==0) 
                {
                    $index++;
                    continue;
                }
                echo 'Слова на букву '.$key.'<br>';
                foreach ($item as $x) {
                    echo $x . '<br>';
                }

            }
        }
        
        
        ?>
<hr>

 <p>Задание 14</p>
        <form name="form14" action="<?php
        if(!empty($_POST["input14"]))
        {
            $text = $_POST["input14"];
            function transliterate($textcyr) {
                $cyr = array(
                'ж',  'ч',  'щ',   'ш',  'ю',  'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ъ', 'ь', 'я','ы',
                'Ж',  'Ч',  'Щ',   'Ш',  'Ю',  'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ъ', 'Ь', 'Я','Ы');
                $lat = array(
                'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'y', 'x', 'ya','y',
                'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', 'Y', 'X', 'Ya','Y');
                if($textcyr) return str_replace($cyr, $lat, $textcyr);
            }
            $result14 = transliterate($text);

        }
        else{ $result14 = "";}
        
    ?>" method="post">

    <label for="z14Input" class="form-label">Введите буквы</label>
    <input type="text" class="form-control" id="z14Input" value = "" name="input14">
    <input type="submit" class="btn btn-primary" name="submit14"></button>
    <br>
    <label class="form-label" id="z14Label" name="label14"><?php echo $result14;
         ?></label>
    <hr>
 </form>



 <p>Задание 15</p>
        <form name="form15" action="<?php
        if(!empty($_POST["input15"]))
        {
            $text = $_POST["input15"];
            $flag = $_POST["translate"];
            function transliterate($textcyr, $flag) {
                $cyr = array(
                    'ж',  'ч',  'щ',   'ш',  'ю',  'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ъ', 'ь', 'я','ы',
                    'Ж',  'Ч',  'Щ',   'Ш',  'Ю',  'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ъ', 'Ь', 'Я','Ы');
                    $lat = array(
                    'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'y', 'x', 'ya','y',
                    'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', 'Y', 'X', 'Ya','Y');
                if($flag == "1") return str_replace($cyr, $lat, $textcyr);
                if($flag == "0") return str_replace($lat, $cyr, $textcyr);
            }
            $result15 = transliterate($text,$flag);

        }
        else{ $result15 = "";}
        
    ?>" method="post">

    <label for="z15Input" class="form-label">Введите буквы</label>
    <input type="text" class="form-control" id="z15Input" value = "" name="input15">

    <input type="radio" id="cyr" name="translate" value="0">
    <label for="cyr">Кириллица</label><br>
    <input type="radio" id="lat" name="translate" value="1">
    <label for="lat">Латинница</label><br>
    <input type="submit" class="btn btn-primary" name="submit15"></button>
    <br>
    <label class="form-label" id="z15Label" name="label15"><?php echo $result15;
         ?></label>
    <hr>
 </form>

 <style>



</style>

 <p>Задание 16</p>
        <form name="form16" action="<?php
    
        if(!empty($_POST["input161"]) && !empty($_POST["input162"]) && !empty($_POST["input163"]) && !empty($_POST["input164"]))
        {
            $answer1 = $_POST["input161"];
            $answer2 = $_POST["input162"];
            $answer3 = $_POST["input163"];
            $answer4 = $_POST["input164"];
            
            $correctanswer = array("4","4","9","20");
            if($answer1 == $correctanswer[0])
            {
                $result161 = "<p>Ваш ответ: $answer1 <font color=`green`>верный</font></p>";
            }
            else{
                $result161 = "<p>Ваш ответ: $answer1 <font color=`Crimson`>неверный</font></p>";
            }

            if($answer2 == $correctanswer[1])
            {
                $result162 = "<p>Ваш ответ: $answer2 <font color=`green`>верный</font></p>";
            }
            else{
                $result162 = "<p>Ваш ответ: $answer2 <font color=`Crimson`>неверный</font></p>";
            }

            if($answer3 == $correctanswer[2])
            {
                $result163 = "<p>Ваш ответ: $answer3 <font color=`green`>верный</font></p>";
            }
            else{
                $result163 = "<p>Ваш ответ: $answer3 <font color=`Crimson`>неверный</font></p>";
            }

            if($answer4 == $correctanswer[3])
            {
                $result164 = "<p>Ваш ответ: $answer4 <font color=`green`>верный</font></p>";
            }
            else{
                $result164 = "<p>Ваш ответ: $answer4 <font color=`Crimson`>неверный</font></p>";
            }

        }
        else{
             $result161 = "";
             $result162 = "";
             $result163 = "";
             $result164 = "";
        }
        
    ?>" method="post">

    <label for="z161Input" class="form-label" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>2+2</label>
    <input type="text" class="form-control" id="z161Input" value = "" name="input161" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>
    <label class="form-label" id="z161Label" name="label161"><?php echo $result161."<br>";?></label>
    <br>
    <label for="z162Input" class="form-label" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>5-1</label>
    <input type="text" class="form-control" id="z162Input" value = "" name="input162" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>
    <label class="form-label" id="z162Label" name="label162"><?php echo $result162."<br>";?></label>
    <br>
    <label for="z163Input" class="form-label" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>3*3</label>
    <input type="text" class="form-control" id="z163Input" value = "" name="input163" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>
    <label class="form-label" id="z163Label" name="label163"><?php echo $result163."<br>";?></label>
    <br>
    <label for="z164Input" class="form-label" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>10+10</label>
    <input type="text" class="form-control" id="z164Input" value = "" name="input164" <?php if(isset($_POST['submit16'])) echo 'hidden'; ?>>
    <label class="form-label" id="z164Label" name="label164"><?php echo $result164."<br>";?></label>
    

    <input type="submit" class="btn btn-primary" name="submit16"></button>
    <br>

    <hr>
 </form>



 <p>Задание 17</p>
        <form name="form17" action="<?php
    
        if(!empty($_POST["input171"]) && !empty($_POST["input172"]) && !empty($_POST["input173"]) && !empty($_POST["input174"]))
        {
            $answer1 = $_POST["input171"];
            $answer2 = $_POST["input172"];
            $answer3 = $_POST["input173"];
            $answer4 = $_POST["input174"];
            
            $correctanswer = array("4","4","9","20");
            if($answer1 == $correctanswer[0])
            {
                $result171 = "<p>Ваш ответ: $answer1 <font color=`green`>верный</font></p>";
            }
            else{
                $result171 = "<p>Ваш ответ: $answer1 <font color=`Crimson`>неверный</font></p>";
            }
            if($answer2 == $correctanswer[1])
            {
                $result172 = "<p>Ваш ответ: $answer2 <font color=`green`>верный</font></p>";
            }
            else{
                $result172 = "<p>Ваш ответ: $answer2 <font color=`Crimson`>неверный</font></p>";
            }

            if($answer3 == $correctanswer[2])
            {
                $result173 = "<p>Ваш ответ: $answer3 <font color=`green`>верный</font></p>";
            }
            else{
                $result173 = "<p>Ваш ответ: $answer3 <font color=`Crimson`>неверный</font></p>";
            }

            if($answer4 == $correctanswer[3])
            {
                $result174 = "<p>Ваш ответ: $answer4 <font color=`green`>верный</font></p>";
            }
            else{
                $result174 = "<p>Ваш ответ: $answer4 <font color=`Crimson`>неверный</font></p>";
            }

        }
        else{
             $result171 = "";
             $result172 = "";
             $result173 = "";
             $result174 = "";
        }
        
    ?>" method="post">

    <label for="z171Input" class="form-label" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>2+2</label>
    <br>
    <input type="radio" id="z171Input1" name="input171" value="4" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z171Input1" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>4</label><br>
    <input type="radio" id="z171Input2" name="input171" value="5" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z171Input2" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>5</label><br>
    <label class="form-label" id="z171Label" name="label171"><?php echo $result171."<br>";?></label>

    <label for="z172Input" class="form-label" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>5-1</label>
    <br>
    <input type="radio" id="z172Input1" name="input172" value="4" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z172Input1" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>4</label><br>
    <input type="radio" id="z172Input2" name="input172" value="5" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z172Input2" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>5</label><br>
    <label class="form-label" id="z172Label" name="label172"><?php echo $result172."<br>";?></label>

    <label for="z173Input" class="form-label" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>3*3</label>
    <br>
    <input type="radio" id="z173Input1" name="input173" value="9" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z173Input1" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>9</label><br>
    <input type="radio" id="z173Input2" name="input173" value="5" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z173Input2" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>5</label><br>
    <label class="form-label" id="z173Label" name="label173"><?php echo $result173."<br>";?></label>

    <label for="z174Input" class="form-label" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>10+10</label>
    <br>
    <input type="radio" id="z174Input1" name="input174" value="20" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z174Input1" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>20</label><br>
    <input type="radio" id="z174Input2" name="input174" value="5" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>
    <label for="z174Input2" <?php if(isset($_POST['submit17'])) echo 'hidden'; ?>>5</label><br>
    <label class="form-label" id="z174Label" name="label174"><?php echo $result174."<br>";?></label>
    

    <input type="submit" class="btn btn-primary" name="submit17"></button>
    <br>

    <hr>
 </form>



 <p>Задание 18</p>
        <form name="form18" action="<?php
    
        if(isset($_POST["submit18"]))
        {
            if(!empty($_POST["input1811"]))$answer11 = $_POST["input1811"];
            if(!empty($_POST["input1812"]))$answer12 = $_POST["input1812"];
            if(!empty($_POST["input1821"]))$answer21 = $_POST["input1821"];
            if(!empty($_POST["input1822"]))$answer22 = $_POST["input1822"];
            if(!empty($_POST["input1831"]))$answer31 = $_POST["input1831"];
            if(!empty($_POST["input1832"]))$answer32 = $_POST["input1832"];
            if(!empty($_POST["input1841"]))$answer41 = $_POST["input1841"];
            if(!empty($_POST["input1842"]))$answer42 = $_POST["input1842"];
            
            $correctanswer = array("4","5","4","9","20");
            if($answer11 == $correctanswer[0] && $answer12 == $correctanswer[1])
            {
                $result181 = "<p>Ваш ответ: <font color=`green`>верный</font></p>";
            }
            else{
                $result181 = "<p>Ваш ответ: <font color=`Crimson`>неверный</font></p>";
            }

            if($answer21 == $correctanswer[2]  && $answer22 ==0)
            {
                $result182 = "<p>Ваш ответ: <font color=`green`>верный</font></p>";
            }
            else{
                $result182 = "<p>Ваш ответ: <font color=`Crimson`>неверный</font></p>";
            }

            if($answer31 == $correctanswer[3]  && $answer32 ==0)
            {
                $result183 = "<p>Ваш ответ: <font color=`green`>верный</font></p>";
            }
            else{
                $result183 = "<p>Ваш ответ: $answer3 <font color=`Crimson`>неверный</font></p>";
            }

            if($answer41 == $correctanswer[4]  && $answer42 ==0)
            {
                $result184 = "<p>Ваш ответ: <font color=`green`>верный</font></p>";
            }
            else{
                $result184 = "<p>Ваш ответ: <font color=`Crimson`>неверный</font></p>";
            }

        }
        else{
             $result181 = "";
             $result182 = "";
             $result183 = "";
             $result184 = "";
        }
        
    ?>" method="post">

    <label for="z181Input" class="form-label" <?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>2+2</label>
    <br>
        <input type="checkbox" id="z181Input1" name="input1811" value="4" <?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z181Input1" <?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>4</label><br>
        <input type="checkbox" id="z181Input2" name="input1812" value="5" <?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z181Input2" <?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>5</label><br>


    <label class="form-label" id="z181Label" name="label181"><?php echo $result181."<br>";?></label>

    <label for="z182Input" class="form-label" <?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>5-1</label>
    <br>
        <input type="checkbox" id="z182Input1" name="input1821" value="4"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z182Input1"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>4</label><br>
        <input type="checkbox" id="z182Input2" name="input1822" value="5"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z182Input2"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>5</label><br>
    <label class="form-label" id="z182Label" name="label182"><?php echo $result182."<br>";?></label>
    <label for="z183Input" class="form-label"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>3*3</label>
    <br>
        <input type="checkbox" id="z183Input1" name="input1831" value="9"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z183Input1"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>9</label><br>
        <input type="checkbox" id="z183Input2" name="input1832" value="5"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z183Input2"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>5</label><br>
    <label class="form-label" id="z183Label" name="label183"><?php echo $result183."<br>";?></label>

    <label for="z184Input" class="form-label"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>10+10</label>
    <br>
        <input type="checkbox" id="z184Input1" name="input1841" value="20"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z184Input1"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>20</label><br>
        <input type="checkbox" id="z184Input2" name="input1842" value="5"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>
        <label for="z184Input2"<?php if(isset($_POST['submit18'])) echo 'hidden'; ?>>5</label><br>
    <label class="form-label" id="z184Label" name="label184"><?php echo $result184."<br>";?></label>
    

    <input type="submit" class="btn btn-primary" name="submit18"></button>
    <br>

    <hr>
 </form>

 <p>Задание 19</p>
        <form name="form19" action="<?php
        if(!empty($_POST["input19"]))
        {
            $n19 = (int)$_POST["input19"]; 
            $n = 1;
            for($i = 1; $i<= $n19; $i++)
            {
                $n *=$i;
            }
            $result19 = $n;
        }
        else{ $result19 = "";}
        
    ?>" method="post">

    <label for="z19Input" class="form-label">Введите число</label>
    <input type="text" class="form-control" id="z19Input" value = "" name="input19">
    <input type="submit" class="btn btn-primary" name="submit19"></button>
    <br>
    <label class="form-label" id="z19Label" name="label19"><?php echo $result19; ?></label>
    <hr>
 </form>

 <p>Задание 20</p>
        <form name="form20" action="<?php
        if(!empty($_POST["input201"]))
        {
            $a = (int)$_POST["input201"]; 
            $b = (int)$_POST["input201"]; 
            $c = (int)$_POST["input201"]; 
            $d = $b*$b - 4*$a*$c;
            $result201 = (-$b - $d)/ 2*$a;
            $result202 = (-$b + $d)/ 2*$a;

        }
        else{ $result201 = "";
            $result202 = "";
        }
        
    ?>" method="post">

    <label for="z201Input" class="form-label">Введите a</label>
    <input type="text" class="form-control" id="z201Input" value = "" name="input201">
    <label for="z202Input" class="form-label">Введите b</label>
    <input type="text" class="form-control" id="z202Input" value = "" name="input202">
    <label for="z203Input" class="form-label">Введите c</label>
    <input type="text" class="form-control" id="z203Input" value = "" name="input203">
    <input type="submit" class="btn btn-primary" name="submit20"></button>
    <br>
    <label class="form-label" id="z201Label" name="label201"><?php echo $result201; ?></label>
    <label class="form-label" id="z202Label" name="label202"><?php echo $result202; ?></label>
    <hr>
 </form>


 <p>Задание 21</p>
        <form name="form21" action="<?php
        if(!empty($_POST["input211"]))
        {
            $a = (int)$_POST["input211"]; 
            $b = (int)$_POST["input211"]; 
            $c = (int)$_POST["input211"]; 
            $max = $a;
            if($b > $max) $max = $b;
            if($c > $max) $max = $c;
            if($max == $a)
            {
                if($a * $a == $b*$c) $result21 = "тройка пифогора";
                else $result21 = "Не тройка пифогора";
            }

            if($max == $b)
            {
                if($b * $b == $a*$c) $result21 = "тройка пифогора";
                else $result21 = "Не тройка пифогора";
            }

            if($max == $c)
            {
                if($c * $c == $b*$a) $result21 = "тройка пифогора";
                else $result21 = "Не тройка пифогора";
            }
            

        }
        else{ $result21 = "";
        }
        
    ?>" method="post">

    <label for="z211Input" class="form-label">Введите a</label>
    <input type="text" class="form-control" id="z211Input" value = "" name="input211">
    <label for="z212Input" class="form-label">Введите b</label>
    <input type="text" class="form-control" id="z212Input" value = "" name="input212">
    <label for="z213Input" class="form-label">Введите c</label>
    <input type="text" class="form-control" id="z213Input" value = "" name="input213">
    <input type="submit" class="btn btn-primary" name="submit21"></button>
    <br>
    <label class="form-label" id="z21Label" name="label21"><?php echo $result21; ?></label>

    <hr>
 </form>



 <p>Задание 22</p>
        <form name="form22" action="<?php
        if(!empty($_POST["input22"]))
        {
            $a = (int)$_POST["input22"]; 
            $result22 = array();
            for($i = 1; $i < $a; $i++)
            {
                if($a%$i == 0) $result22[count($result22)] = $i;
            }
            

        }
        else{ $result22 = "";
        }
        
    ?>" method="post">

    <label for="z22Input" class="form-label">Введите число</label>
    <input type="text" class="form-control" id="z22Input" value = "" name="input22">

    <input type="submit" class="btn btn-primary" name="submit22"></button>
    <br>
    <label class="form-label" id="z22Label" name="label22"><?php 
    if(!empty($_POST["input22"])) print_r($result22);
     ?></label>

    <hr>
 </form>


 <p>Задание 23</p>
        <form name="form23" action="<?php
        if(!empty($_POST["input23"]))
        {
            $a = (int)$_POST["input23"]; 
            $value = $a;
            $del = 2;
            $result23 = array();
            while($value >1)
            {
                if($value % $del == 0)
                {
                    $value /= $del;
                    $result23[count($result23)] = $del;
                }
                else{
                    $del++;
                }
            }

        }
        else{ $result23 = "";
        }
        
    ?>" method="post">

    <label for="z23Input" class="form-label">Введите число</label>
    <input type="text" class="form-control" id="z23Input" value = "" name="input23">

    <input type="submit" class="btn btn-primary" name="submit23"></button>
    <br>
    <label class="form-label" id="z23Label" name="label23"><?php 
    if(!empty($_POST["input23"])) print_r($result23);
     ?></label>

    <hr>
 </form>


 <p>Задание 24</p>
        <form name="form24" action="<?php
        if(!empty($_POST["input241"]))
        {
            $a = (int)$_POST["input241"]; 
            $b = (int)$_POST["input242"]; 
            $result24 = array();
            if($b > $a){
                $temp = $b;
                $b = $a;
                $a = $temp;
            }
            for($i = 1; $i < $a; $i++)
            {
                if($i == $b) break;
                if($a%$i == 0 && $b%$i == 0) $result24[count($result24)] = $i;

            }
            
        }
        else{ $result24 = "";
        }
        
    ?>" method="post">

    <label for="z24Input1" class="form-label">Введите число 1</label>
    <input type="text" class="form-control" id="z24Input1" value = "" name="input241">

    
    <label for="z24Input2" class="form-label">Введите число 2</label>
    <input type="text" class="form-control" id="z24Input2" value = "" name="input242">

    <input type="submit" class="btn btn-primary" name="submit24"></button>
    <br>
    <label class="form-label" id="z24Label" name="label24"><?php 
    if(!empty($_POST["input241"])) print_r($result24);
     ?></label>

    <hr>
 </form>


 <p>Задание 25</p>
        <form name="form25" action="<?php
        if(!empty($_POST["input251"]))
        {
            $a = (int)$_POST["input251"]; 
            $b = (int)$_POST["input252"]; 
            $result25 = array();
            if($b > $a){
                $temp = $b;
                $b = $a;
                $a = $temp;
            }
            for($i = 1; $i < $a; $i++)
            {
                if($i == $b) break;
                if($a%$i == 0 && $b%$i == 0) $result25[count($result25)] = $i;

            }
            
        }
        else{ $result25 = "";
        }
        
    ?>" method="post">

    <label for="z25Input1" class="form-label">Введите число 1</label>
    <input type="text" class="form-control" id="z25Input1" value = "" name="input251">

    
    <label for="z25Input2" class="form-label">Введите число 2</label>
    <input type="text" class="form-control" id="z25Input2" value = "" name="input252">

    <input type="submit" class="btn btn-primary" name="submit25"></button>
    <br>
    <label class="form-label" id="z25Label" name="label25"><?php 
    if(!empty($_POST["input251"])) echo $result25[count($result25)-1];
     ?></label>

    <hr>
 </form>

 <p>Задание 26</p>
        <form name="form26" action="<?php
        if(!empty($_POST["input2261"]))
        {
            $a = (int)$_POST["input2261"]; 
            $b = (int)$_POST["input2262"];
            if($b > $a)
            {
                $temp = $b;
                $b = $a;
                $a = $temp;
            }
            $value1 = $a;
            $value2 = $b;
            $del = 2;
            $result26 = array();
            while($value1 >1)
            {
                if($value1 % $del == 0 && $value2 % $del == 0)
                {
                    $value1 /= $del;
                    $value2 /= $del;
                    $result26[count($result26)] = $del;
                }
                else{
                    $del++;
                    if($del == $a) break;
                }

            }

        }
        else{ $result26 = "";
        }
        
    ?>" method="post">

    <label for="z261Input" class="form-label">Введите число 1</label>
    <input type="text" class="form-control" id="z261Input" value = "" name="input2261">
    <label for="z262Input" class="form-label">Введите число 2</label>
    <input type="text" class="form-control" id="z262Input" value = "" name="input2262">

    <input type="submit" class="btn btn-primary" name="submit26"></button>
    <br>
    <label class="form-label" id="z26Label" name="label26"><?php 
    if(!empty($_POST["input2261"])) 
    {
        if(!empty($result26))
        echo $result26[0];
        else{
            echo "Нету";
        }
    }
     ?></label>

    <hr>
 </form>


 <p>Задание 27</p>
        <form name="form27" action="<?php
        if(!empty($_POST["input271"]))
        {
            $a = $_POST["input271"]; 
            $b = $_POST["input272"]; 
            $c = $_POST["input273"]; 
            $result27 = date('l', strtotime($c."-".$b."-".$a));

        }
        else{ $result27 = "";}
        
    ?>" method="post">

    <select size="8" name="input271">
    <option disabled>Выберите день</option>
    <option selected value="1">1</option>
    <option  value="2">2</option>
    <option  value="3">3</option>
    <option  value="4">4</option>
    <option  value="5">5</option>
    <option  value="6">6</option>
    <option  value="7">7</option>
    <option  value="8">8</option>
    <option  value="9">9</option>
    <option  value="10">10</option>
    <option  value="11">11</option>
    <option  value="12">12</option>
    <option  value="13">13</option>
    <option  value="14">14</option>
    <option  value="15">15</option>
    <option  value="16">16</option>
    <option  value="17">17</option>
    <option  value="18">18</option>
    <option  value="19">19</option>
    <option  value="20">20</option>
    <option  value="21">21</option>
    <option  value="22">22</option>
    <option  value="23">23</option>
    <option  value="24">24</option>
    <option  value="25">25</option>
    <option  value="26">26</option>
    <option  value="27">27</option>
    <option  value="28">28</option>
    <option  value="29">29</option>
    <option  value="30">30</option>
    <option  value="31">31</option>
   </select>
   <select size="8" name="input272">
    <option disabled>Выберите месяц</option>
    <option  value="1">1</option>
    <option  value="2">2</option>
    <option  value="3">3</option>
    <option  value="4">4</option>
    <option  value="5">5</option>
    <option  value="6">6</option>
    <option  value="7">7</option>
    <option  value="8">8</option>
    <option  value="9">9</option>
    <option  value="10">10</option>
    <option  value="11">11</option>
    <option  value="12">12</option>
   </select>
   <select size="8" name="input273">
    <option disabled>Выберите год</option>
    <option  selected value="1990">1990</option>
    <option  value="1991">1991</option>
    <option  value="1992">1992</option>
    <option  value="1993">1993</option>
    <option  value="1994">1994</option>
    <option  value="1995">1995</option>
    <option  value="1996">1996</option>
    <option  value="1997">1997</option>
    <option  value="1998">1998</option>
    <option  value="1999">1999</option>
    <option  value="2001">2001</option>
    <option  value="2002">2002</option>
    <option  value="2003">2003</option>
    <option  value="2004">2004</option>
    <option  value="2005">2005</option>
    <option  value="2006">2006</option>
    <option  value="2007">2007</option>
    <option  value="2008">2008</option>
    <option  value="2009">2009</option>
    <option  value="2010">2010</option>
    <option  value="2011">2011</option>
    <option  value="2012">2012</option>
    <option  value="2013">2013</option>
    <option  value="2014">2014</option>
    <option  value="2015">2015</option>
    <option  value="2016">2016</option>
    <option  value="2017">2017</option>
    <option  value="2018">2018</option>
    <option  value="2019">2019</option>
    <option  value="2020">2020</option>
    <option  value="2021">2021</option>
    <option  value="2022">2022</option>
    <option  value="2023">2023</option>
    <option  value="2024">2024</option>
    <option  value="2025">2025</option>
   </select>
    <input type="submit" class="btn btn-primary" name="submit27"></button>
    <br>
    <label class="form-label" id="z27Label" name="label27"><?php echo $result27; ?></label>
    <hr>
 </form>
        
</body>
</html>