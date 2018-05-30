<?php

 


function printiner2 ($namesTH,$place ,$row,$columns,$column_counter,$targetfile,$pasvalue,$vall ,$vg,$namesTD){
  
		
		
		
		
        $numof1 = count($namesTH);
        $numof2 = count($targetfile);  
		$numof3 = count($namesTD);
		$numof4 = count($vg);
		$acc = "false";
		
		
		
			$tempo9 = 9 ;
			$check0= false ;
			$resoi = ($namesTD === array_filter($namesTD ,'is_int')  ); 
			
			if ( array_key_exists(0,$namesTD) ){
				$check0= true ;
			}
			
			
			
			if (($resoi == 1) && ($check0 == true)) {
				if( ($numof1 == $numof2 ) && ($numof3 == $numof2 ) && ($numof4 == $numof1 ) ){
				$tempo9 = 1; 
				$acc = "true";
				
				}
				}elseif (empty($namesTD)) { 
					$acc = "true";	
					$tempo9= 2;
					
				}else {
					
					if( ($numof1 == $numof2 ) && ($numof3 == $numof2 ) && ($numof4 == $numof1 ) ){
					$acc = "true";	
					$tempo9= 0 ;
					
					}
				}
		
			
		
	

		
		
  
  
  if($acc == "true"){
    
    if ($place == "1"){
    foreach ($namesTH as $p1) {
?>      
                  <th>
                   <?php  echo htmlspecialchars($p1, ENT_QUOTES) ;?>  
                  </th>
<?php
    } ;
    }
    
    if ($place == "2"){
    foreach ($namesTH as $p2) {
     


    
       ?> 
      <td >  
      
           <form action="<?php echo   $targetfile[array_search($p2,$namesTH)]; ?>" class="printerform" method="<?php  echo $vg[array_search($p2,$namesTH)] ; ?>" name="send" >
              <?php
             
             foreach($vall as $vtest)
            {
               ?> 
             <input type="hidden" name="varall[]" value="<?php echo  htmlspecialchars($vtest, ENT_QUOTES) ; ?>">  
             
             <?php 
            }
             foreach($pasvalue as $vtest1)
            {
               ?> 
             <input type="hidden" name="varpass[]" value="<?php echo htmlspecialchars($vtest1, ENT_QUOTES) ; ?>">  
             
             <?php 
            }
			
			if ($tempo9 == 2){
              ?>                
              <input class="printerb" name="send" type="submit" value="<?php  echo  htmlspecialchars($namesTH[array_search($p2,$namesTH)] , ENT_QUOTES) ; ?>  " />
				 
			<?php }else if ( $tempo9 == 1) { ?>
			
			 <input class="printerb" name="send" type="submit" value="<?php  echo  $row[$columns[$namesTD[ array_search($p2,$namesTH)  ]   ]]  ; ?>  " />
			<?php }else{ ?>
			
			 <input class="printerb" name="send" type="submit" value="<?php  echo  $namesTD[array_search($p2,$namesTH)] ; ?>  " />
			<?php } ?>
            </form>       

      </td >

<?php 

      
      
   
    
    } 
    }

    
    
    
  }

} 






?>