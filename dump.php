<?php
/*
   xmetrix@xmxstudio.com
   a simple function you can use to inspect variable values. who knows if its helpful or not. Whatever right?

   usage: include 'dump.php';   //include this file in your php file
          
    then you can test it like this:

    <?php

    	include 'dump.php';
    	$test = "HI!";
    	$num = 1203;
    	$array = Array('hello','world',$test,$num,$num+52);

    	dump($test);
    	dump($num);
    	dump($array);

    ?>

*/

?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function(){
	$('.dispose').click(function(){
		$(this).parent().fadeOut();
	})
	$('.variable_name').click(function(){
		$(this).next().toggle();
	});
	$('.value').click(function(){
		$(this).children(0).toggle();
	});
});//document ready
</script>
<style>.value{display:none;background-color: #c0c0c0;padding: 3px 0 0 5px;cursor: pointer;}.vardump{display:none;background-color: #666;	color: #fff;border-radius: 6px;border: solid 1px #333;padding:2px;}.variable{border-radius: 6px;border: solid 1px #333;padding:2px;margin: 5px;background-color: #ccc;}
.variable_name{border-radius: 6px;border: solid 1px #000;padding: 2px;background-color: #333;color: #fff;font-size: 0.85em;}
.variable_name:hover{background-color: #777}
.dispose{float: right;background-color: #c0c0c0;border-radius: 3px;border: solid 1px #000;font-size: 0.6em;font-weight: bold;padding: 5px 5px 4px 5px;cursor: pointer;}.dispose:hover{background-color: #000;color: #c0c0c0;}</style>
<?php
$dumpenabled = true;
function dump($var2dump){
	global $dumpenabled;
	if($dumpenabled){
		foreach($GLOBALS as $var => $value){
			if($value === $var2dump){

				echo "<div class='variable'><div class='dispose'>x</div><div class='variable_name'>$$var</div><div class='value'>";
				echo $var2dump ? $var2dump : "null";
				echo "<div class='vardump'>";
				var_dump($var2dump);
				echo "</div></div></div>";
			}
		}
	}
}//dump


?>