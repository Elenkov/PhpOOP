<?php
define("APP_DIR", __DIR__);
define('CLASSES_DIR', APP_DIR . DIRECTORY_SEPARATOR . 'classes');

function __autoload($class) {
    $file = CLASSES_DIR . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task</title>
    </head>
    <body>
        <?php
        $father = new Parrent('ivan', 'petkov');
        $child = new Child('Grigor', 'Krumov');
        $child->setParent($father);
        $child2 = new Child('Pesho', 'Peshev');
        $child2->setParent($father);

        $father->addChild($child);
        $father->addChild($child2);
        $child->setClasses(array('biologiq','himiq') );
        $child->addclass('informatika');
        $child->removeClass('himiq');
        $child->addclass('himiq');
       
     
        
        ?>

        <pre>
            <?php
            print_r($father);
            print_r($child);
            print_r($child2);
            $father->removeChild($child2);
            $child2->setParent(NULL);
            print_r($father);
            print_r($child);
            print_r($child2);
            ?>

        </pre>
    </body>
</html>
