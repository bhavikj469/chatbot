<?php
$f2='';
$contents = file_get_contents("log.html");  
				$contents_arr=explode("<br>",$contents);
				$contents_count=count($contents_arr)-1;
				$i=0;
				while($i<=$contents_count){
					$f2.= $contents_arr[$i]."\n";
					$i++;
				}
				
//$f2=file_get_contents('log.html');
$f1=fopen('target.txt','w');
fwrite($f1,$f2);
fclose($f1);
?>