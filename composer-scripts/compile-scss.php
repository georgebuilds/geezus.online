<?php

require __DIR__."/../vendor/autoload.php";

use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\Formatter\Compressed;

$scss_directory     = __DIR__."/../resources/scss";
$scss_compiler      = new Compiler;
$scss_compiler->setFormatter(Compressed::class);

$files_in_scss_directory = scandir($scss_directory);

foreach($files_in_scss_directory as $file_in_scss_directory){
    if(strtolower(substr($file_in_scss_directory,-5)) == ".scss"){
        echo $file_in_scss_directory." ... ";
        $basename = pathinfo($file_in_scss_directory)['filename'];
        $target_filepath = __DIR__."/../public/css/$basename.css";
        $file_contents = file_get_contents($scss_directory."/".$file_in_scss_directory);
        $compiled_css = $scss_compiler->compile($file_contents);
        if(file_put_contents($target_filepath, $compiled_css)){
            echo "compiled successfully.".PHP_EOL;
        } else {
            echo "could not be written to target CSS file".PHP_EOL;
        }
    }
}
