# php_dump_debugger
a simple self contained jquery enabled variable exploration tool.
a simple function you can use to inspect variable values. who knows if its helpful or not. Whatever right?

   usage: include 'dump.php';   //include this file in your php file
          
    then you can test it like this:

    <?php

    	include 'dump.php';
         //you can disable debugger by uncommenting the following line
        $dumpenabled=0;
    	$test = "HI!";
    	$num = 1203;
    	$array = Array('hello','world',$test,$num,$num+52);

    	dump($test);
    	dump($num);
    	dump($array);

    ?>
