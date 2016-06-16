<?php 
	for($row=1;$row<=5;$row++){
		 $star = $row +($row-1);
		 $k=(5-$star)+1;
		for($col=0;$col<9;$col++){
			
			if($k==$col){
				for($p=0;$p<$star;$p++){
			  		echo '* &nbsp;&nbsp;';
			  		$col++;
			 }
			}else{
			echo $col.'&nbsp;&nbsp;';
		 }
		}
		echo '<br/>';
	}

?>