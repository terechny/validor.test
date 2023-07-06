<?php

if (!empty($_GET)) {

    echo canGo($_GET['x1'], $_GET['y1'], $_GET['x2'], $_GET['y2']) ? 'Yes' : 'No';

}

function canGo($x1, $y1, $x2, $y2): bool
{
    $x = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
    $y = ['1', '2', '3', '4', '5', '6', '7', '8'];

    $currentX = array_search($x1, $x);
    $currentY = array_search($y1, $y);

    $directKey = $x2 . $y2;

    // Variants

    $varianst = [];

    $b = $currentX + 2;

    $b1 = $currentY + 1;
    $b3 = $currentY - 1;

    $varianst[] =  $x[$b]  .  $y[$b1] ;
    $varianst[] =  $x[$b] . $y[$b3]  ;

    $v = $currentX - 2;

    $varianst[] =  $x[$v]  . $y[$b1] ;
    $varianst[] =  $x[$v] . $y[$b3]  ; 

    // ----

    $b = $currentY + 2;

    $b1 = $currentX + 1;
    $b3 = $currentX - 1;
    $varianst[] =  $y[$b]  .  $x[$b1] ;
    $varianst[] =  $y[$b] . $x[$b3]  ;

    $v = $currentY - 2;
    $varianst[] =  $y[$v]  . $x[$b1] ;
    $varianst[] =  $y[$v] . $x[$b3]  ; 
    
    $result = in_array( $directKey, $varianst);
    return $result;
}

canGo('d', '5', 'f', '6'); 

/*

1. Тестирование студентов.

    Студентам задали вопросы, а результаты студенты вписывают в форму.
    Необходимо придумать схему базу данных и создать таблицы для хранения студентов и их ответов на тест, 
    преподавателей, а также результаты тесты.
    Один студент может пройти тест только один раз, 
    один тест может проверять и ставить оценку только 2 преподавателя.

    Необходимо написать код создания нужных таблиц, а также запросы для получения:
    1. id всех студентов, получивших за тестирование хотя бы одну 5
    2. Имена всех преподавателей, которые оценили хотя бы один тест на 2
    3. Имена всех студентов, которые получили от всех преподавателей оценку 

     - students
        id
        name

    - teachers
       id
       name

    - tests
       id
       name

    - test_questions
        id
        test_id FOREIGN KEY

    - user_tests
       test_id FOREIGN KEY
       user_id FOREIGN KEY

    - estimates
       id
       test_id FOREIGN KEY
       student_id FOREIGN KEY
       teacher_id FOREIGN KEY
       rate

  
 */




