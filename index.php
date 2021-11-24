<!DOCTYPE html>
<html>
    <head>
        <title>Page - Home</title>
    </head>
    <body>
    <?php
        /*Remove URL directory*/
        if(!isset($_GET['url'])){   
            echo '<h1>home</h1>';
        }else{
            $page = strip_tags($_GET['url']);
            if(file_exists($page.'.php')){
            include($page.'.php');
        }else{
            echo 'Error 404 - page not exist';
        }
        }
    ?>
        <div>
            <a href="pagetwo">page2</a>
            <p></p>
            <a href="pagethree">page3</a>
        </div>
    </body>
</html>
