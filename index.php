<?php
// raw_script.php

// Проверяем, был ли передан параметр `load`
if (isset($_GET['load']) && $_GET['load'] === 'true') {
    // Если запрос пришел с параметром load=true, отдаем скрипт
    header("Content-Type: text/plain");
    echo "print('Hello, this is a script!')"; // Здесь ваш скрипт
} else {
    // Если пользователь зашел без параметра, показываем сообщение
    echo "go away";
}
?>
