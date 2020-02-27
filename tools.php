<?php
    /**
     * clean print_r function
     * @param $paquet array give me something to print like a string
     * @param $title string give me something print like a string or integer
     */
    function print_air($paquet,$title=''){
        print('<pre>');
        ($title!='') ? print($title.': ') : print('print_r:');
        print_r($paquet);
        print('</pre>'.PHP_EOL);
    }
    /**
     * clean var_dump() function
     * @param $paquet array give me something to dump like a array
     * @param $title string give me something print like a string or integer
     */
    function var_bump($paquet,$title=''){
        print('<pre><hr>');
        ($title!='') ? print('<b>'.$title.'</b>: ') : print('var_dump:');
        var_dump($paquet);
        print('</pre>'.PHP_EOL);
    }
    /**
     * print <hr>
     */
    function do_hr(){
        print('<hr>'.PHP_EOL);
    }
    /**
     */
    function do_pre_html(){
        print'<!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ini file reader</title>
        </head>
        <body>'.PHP_EOL;
    }
    function do_post_html(){
        print'        </body>
        </html>';
    }
?> 