# <h2 align="center">  МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ» </h2>
<div align="center">
<h3>Институт естественных наук и техносферной безопасности
<br>
Кафедра информатики
<br>
Половников Владислав Олегович</h3>

<br>
<h3>Лабораторная работа №8
<br>
“Введение в вэб-разработку”
<br>
01.03.02 Прикладная математика и информатика</h3>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 align="right">Научный руководитель
<br>
Соболев Евгений Игоревич
</h3>

<h3 align="center">Южно-Сахалинск
<br>
2022г.
</h3>
<hr>
</div>
<p>
HTML (HyperText Markup Language) - язык разметки гипертекста - предназначен для создания Web-страниц.
Под гипертекстом в этом случае понимается текст, связанный с другими текстами указателями-ссылками.
HTML представляет собой достаточно простой набор кодов, которые описывают структуру документа. HTML позволяет выделить в тексте отдельные логические части (заголовки, абзацы, списки и т.д.), поместить на Web-страницу подготовленную фотографию или картинку, организовать на странице ссылки для связи с другими документами.
HTML не задает конкретные и точные атрибуты форматирования документа. Конкретный вид документа окончательно определяет только программа-браузер на компьютере пользователя Интернета. 
HTML также не является языком программирования, но web-страницы могут включать в себя встроенные программы-скрипты на языкахJavascript и Visual Basic Script и программы-апплеты на языке Java.
</p>

<h3 align="center">Задание</h3>

Задачи:
1.	1.	По заходу на страницу выведите сколько дней осталось до нового года.
2.	Дан инпут и кнопка. В этот инпут вводится год. По нажатию на кнопку выведите на экран, високосный он или нет.
3.	Дан инпут и кнопка. В этот инпут вводится дата в формате '01.12.1990'. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, например, 'воскресенье'.
4.	По заходу на страницу выведите текущую дату в формате '12 мая 2015 года, воскресенье'.
5.	Дан инпут и кнопка. В этот инпут вводится дата рождения в формате '01.12.1990'. По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя.
6.	По заходу на страницу выведите сколько дней осталось до ближайшей масленницы (последнее воскресенье весны).
7.	Дан инпут и кнопка. В этот инпут вводится дата рождения в формате '31.12'. По нажатию на кнопку выведите знак зодиака пользователя.
8.	Дан массив праздников. По заходу на страницу, если сегодня праздник, то поздравьте пользователя с этим праздником.
9.	Сделайте скрипт-гороскоп. Внутри него хранится массив гороскопов на несколько дней вперед для каждого знака зодиака. По заходу на страницу спросите у пользователя дату рождения, определите его знак зодиака и выведите предсказание для этого знака зодиака на текущий день.
10.	Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов в тексте, количество символов в тексте, количество символов за вычетом пробелов.
11.	Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте.
12.	Дан массив слов, инпут и кнопка. В инпут вводится набор букв. По нажатию на кнопку выведите на экран те слова, которые содержат в себе все введенные буквы.
13.	Дан текстареа и кнопка. В текстареа через пробел вводятся слова. По нажатию на кнопку выведите слова в таком виде: сначала заголовок 'слова на букву а' и под ним все слова, которые начинаются на 'а', потом заголовок 'слова на букву б' и все слова на 'б' и так далее. Буквы должны идти в алфавитном порядке. Брать следует только те буквы, на которые начинаются наши слова. То есть: если нет слов, к примеру, на букву 'в' - такого заголовка тоже не будет.
14.	Дан инпут и кнопка. В этот инпут вводится строка на русском языке. По нажатию на кнопку выведите на экран транслит этой строки.
15.	Дан инпут, 2 радиокнопочки и кнопка. В инпут вводится строка, а с помощью радиокнопочек выбирается - нужно преобразовать эту строку в транслит или из транслита обратно.
16.	Дан массив с вопросами и правильными ответами. Реализуйте тест: выведите на экран все вопросы, под каждым инпут. Пользователь читает вопрос, пишет свой ответ в инпут. Когда вопросы заканчиваются - он жмет на кнопку, страница обновляется и вместо инпутов под вопросами появляется сообщение вида: 'ваш ответ: ... верно!' или 'ваш ответ: ... неверно! Правильный ответ: ...'. Правильно отвеченные вопросы должны гореть зеленым цветом, а неправильно - красным.
17.	Модифицируем предыдущую задачу: пусть теперь тест показывает варианты ответов и радиокнопочки. Пользователь должен выбрать один и вариантов.
18.	Модифицируем предыдущую задачу: пусть теперь на один вопрос может быть несколько правильных ответов. Пользователь должен отметить один или несколько чекбоксов.
19.	Напишите скрипт, который будет считать факториал числа. Само число вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат.
20.	Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения.
21.	Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух остальных.
22.	Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку выведите список делителей этого числа.
23.	Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку разложите число на простые множители.
24.	Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите список общих делителей этих двух чисел.
25.	Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите наибольший общий делитель этих двух чисел.
26.	Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите наименьшее число, которое делится и на одно, и на второе из введенных чисел.
27.	Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31, второй селект - это месяцы от января до декабря, а третий - это годы от 1990 до 2025. С помощью этих селектов можно выбрать дату. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, например, ‘воскресенье'.

Задание. «Гостевая книга» (PHP)
Гостевая книга предоставляет возможность пользователям сайта оставлять сообщения на сайте. Все данные введенные пользователем сохраняются в БД MySQL, так же в базе данных сохраняются данные о IP пользователя и его браузере.
Форма добавления записи в гостевую книгу должна иметь следующие поля:
▪	User Name (цифры и буквы латинского алфавита) – обязательное поле
▪	E-mail (формат email) – обязательное поле
▪	Homepage (формат url) – необязательное поле
▪	CAPTCHA (цифры и буквы латинского алфавита) – изображение и обязательное поле (http://ru.wikipedia.org/wiki/CAPTCHA)
▪	Text (непосредственно сам текст сообщения, HTML тэги недопустимы) – обязательное поле
Сообщения должны выводится в виде таблицы, с возможностью сортировки по следующим полям: User Name, e-mail, и дата добавления (как в порядке убывания, так и в обратном). Сообщения должны разбиваться на страницы по 25 сообщений на каждой. Сортировка по умолчанию – LIFO.
При написании проекта следует обратить внимание на защиту от XSS атак и SQL –инъекций. (http://ru.wikipedia.org/wiki/Межсайтовый_скриптинг и http://ru.wikipedia.org/wiki/Инъекция_SQL)
Приветствуется создания простейшего дизайна с использованием CSS.





<h1 align="center">Решение</h1>

<h2 align="center">Задания 1-27</h2>
<h3>Файл index.php</h3>

```php
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
```
<h2 align="center">Гостевая книга</h2>

![img1](/images/1.png)

![img2](/images/2.png)

![img3](/images/3.png)

<h3>Главная папка index.php</h3>

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
    body{
        background-image: url("bg.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
div{
    width: auto;
    padding: 75px;
}
table,
th,
td {
    border: 1px solid;
    padding: 3px;
    padding-left: 5px;
    padding-right: 5px;
}
a{
    width: 100%;
    height: 50px;
    font-size: 10px;
}
    </style>
    <title>Гостевая книга</title>
</head>
<body class="d-flex justify-content-md-center align-items-center vh-100">
            <div class="d-grid gap-3">
                <a class="btn btn-primary fs-4" href="./create/">Ввести сообщение</a>
                <a class="btn btn-primary fs-4" href="./messages/">Просмотреть сообщения</a>
            </div>
</body>
</html>
```
<h3>Файл create/index.php</h3>

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
    body{
        background-image: url("../bg.png");
        background-size: 100% 100%;
        background-repeat: repeat-y;
    }
    form{
        background: linear-gradient(0deg, #7fc7ff, white);
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
        border: none;
    }
    div .form{
        width: auto;
        padding: 75px;
    }
    a{
        width: 100%;
        height: 50px;
        font-size: 10px;
    }
    </style>
    <title>Гостевая книга</title>
</head>
<body class="d-flex justify-content-md-center align-items-center vh-100">
            <div class="d-grid gap-3" style="width: 650px; padding: 75px">
                <form action="script.php" method="post">
                <div class="form">
                    <input type="text" class="form-control" placeholder="Ваше имя (обязательно)" id="name" name="name"required>
                    <br>
                    <input type="email" class="form-control" placeholder="Ваш email (обязательно)" id="email" name="email" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Homepage (необязательно)" id="homepage" name="homepage">
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LetvG4jAAAAAINAJN3snODSprVUyVEYMk4LOKq2" style="padding: 0px; width: auto" id="captcha" name="captcha"></div>
                    <br>
                    <textarea class="form-control" placeholder="Оставьте комментарий здесь" id="textarea" name="textarea" required></textarea>
                    <br>
                    <input type="submit" class="form-control">
                </div>
                </form>
            </div>
            
</body>
</html>
```

<h3>Файл create/script.php</h3>

```php
<?php
	if (isset($_POST['g-recaptcha-response'])) $captcha_response = $_POST['g-recaptcha-response'];
	else die('На форме нет капчи! Обратитесь к администратору!');
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$params = [
		'secret' => '6LetvG4jAAAAABmlA6YXWqfgwHAj-qZhL85MOur3',
		'response' => $captcha_response,
		'remoteip' => $_SERVER['REMOTE_ADDR']
	];

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec($ch);
	if (!empty($response)) $decoded_response = json_decode($response);

	$success = false;

	if ($decoded_response && $decoded_response->success) {
		$success = $decoded_response->success;
	}

	$result = $success ? 'Капча пройдена успешно!' : 'Неверная капча!';

	if ($result) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "messages";
		
		$conn = new mysqli($servername, $username, $password);
			if ($conn->connect_error) {
				die("Ошибка в подключении: " . $conn->connect_error);
			  }	  
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		$name = strip_tags($_POST["name"]);
		$email = strip_tags($_POST["email"]);
		if(!empty($_POST["homepage"])) $homepage = strip_tags($_POST["homepage"]);
		else $homepage = "";
		$textarea = strip_tags($_POST["textarea"]);
		$IP = $_SERVER['REMOTE_ADDR'];
		$temp = get_browser(null,true);
		$Browser = $_SERVER['HTTP_USER_AGENT'];
		$sql = "INSERT INTO `message`(`name`, `email`, `homepage`, `IP`, `Browser`, `text`) VALUES ('$name','$email','$homepage','$IP','$Browser','$textarea')";
		$conn->query($sql);
		
		header('Location: ../messages');
	}
```

<h3>Файл messages/index.php</h3>

```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        body {
            background-image: url("../bg.png");
            background-size: 100% 100%;
            background-repeat: repeat-y;
   
        }

        table{
            background: linear-gradient(0deg, #7fc7ff, white);
            margin-bottom: 0px;
            text-align: center;
            width: 1920px;
        }
        tr,tbody,thead,td{
            border: solid 2px black;
            height: 50px;
            padding: 10px;
        }
        td{
            height: 75px;
        }
        a {
            width: 100%;
            height: 50px;
            font-size: 20px;
            text-decoration: none;
            color: black;
        }
        #id{
            width: 3%;
        }
        #name{
            width: 10%;
        }
        #email{
            width: 10%;
        }
        #homepage{
            width: 10%;
        }
        #IP{
            width: 10%;
        }
        #Browser{
            width: 25%;
        }

    </style>
    <title>Гостевая книга</title>
</head>

<body class="d-flex flex-row vh-100">
    <div>
    <?php
        $sort_list = array(
            'id_desc'  => '`id` DESC',
            'id_asc'   => '`id`',
            'name_asc'  => '`name`',
            'name_desc' => '`name` DESC',
            'email_asc'   => '`email`',
            'email_desc'  => '`email` DESC',
            'homepage_asc'   => '`homepage`',
            'homepage_desc'  => '`homepage` DESC',
            'IP_asc'   => '`IP`',
            'IP_desc'  => '`IP` DESC',
            'Browser_asc'   => '`Browser`',
            'Browser_desc'  => '`Browser` DESC',
            'text_asc'   => '`text`',
            'text_desc'  => '`text` DESC',
        );
    
        $sort = @$_GET['sort'];
        if (array_key_exists($sort, $sort_list)) {
            $sort_sql = $sort_list[$sort];
        } else {
            $sort_sql = reset($sort_list);
        }
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "messages";
    
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Ошибка в подключении: " . $conn->connect_error);
        }
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `message` ORDER BY $sort_sql LIMIT 25";
        $result =  $conn->query($sql);
    function sort_link_th($title, $a, $b) {
        $sort = @$_GET['sort'];
     
        if ($sort == $a) {
            return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>▲</i></a>';
        } elseif ($sort == $b) {
            return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>▼</i></a>';  
        } else {
            return '<a href="?sort=' . $a . '">' . $title . '</a>';  
        }
    }
    ?>

<table>
	<thead>
		<tr>
            <th id="id"><?php echo sort_link_th('id', 'id_asc', 'id_desc'); ?></th>
			<th id="name"><?php echo sort_link_th('Имя', 'name_asc', 'name_desc'); ?></th>
			<th id="email"><?php echo sort_link_th('Почта', 'email_asc', 'email_desc'); ?></th>
			<th id="homepage"><?php echo sort_link_th('Домашнаяя страница', 'homepage_asc', 'homepage_desc'); ?></th>
            <th id="homepage"><?php echo sort_link_th('IP', 'IP_asc', 'IP_desc'); ?></th>
            <th id="homepage"><?php echo sort_link_th('Браузер', 'Browser_asc', 'Browser_desc'); ?></th>
			<th id="text"><?php echo sort_link_th('Текст', 'text_asc', 'text_desc'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($result as $row): ?>
		<tr>
			<td id="id"><?php echo htmlspecialchars($row['id']); ?></td>
			<td id="name"><?php echo htmlspecialchars($row['name']); ?></td>
			<td id="email"><?php echo htmlspecialchars($row['email']); ?></td>
			<td id="homepage"><?php echo htmlspecialchars($row['homepage']); ?></td>
            <td id="IP"><?php echo htmlspecialchars($row['IP']); ?></td>
            <td id="Browser"><?php echo htmlspecialchars($row['Browser']); ?></td>
			<td id="text"><?php echo htmlspecialchars($row['text']); ?></td>
		</tr>
		<?php endforeach; ?>    
	</tbody>
</table>

        <a class="btn btn-primary fs-4" href="../" style="width:200px">Меню</a>
    </div>
</body>

</html>
```

<h4>Вывод: Вспомнил PHP.</h4>

