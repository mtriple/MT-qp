<?php

include("advp.php");



/* $toprint2 = <<<EOD
      <td>
           <form action="send_req.php" method="GET" name="send" > 
                 <input type="hidden" name="id" value="<?php echo   $row[$columns[$p2]]; ?>">
                 <input class="b1" name="send" type="submit" value="<?php  echo   $row[$columns[$p2]]; ?>  " />
            </form>       
      </td>
      EOD;
*/


function qp($con,$qtoprint,$skipc,$namesTH,$namesTD,$targetfile,$vg,$pasvalue) {
  

  
	
        

  
  
       
		
		
		
       
        $qarray = $con->query($qtoprint);
        $columns = array();
        $resultset = array();
        $indexofskip = array();
		 $column_counter=0;

        # Set columns and results array
        while ($row = mysqli_fetch_assoc($qarray)){
                if (empty($columns)) {
                     $columns = array_keys($row);
                }
                 $resultset[] = $row;
            }
  
  


        # If records found
        if( count($resultset)) { 
  ?>
            <table class="table1" >
                <thead>
                    <tr class='info';>
                            <?php foreach ($columns as $k => $column_name ) :
                             
                            if ($skipc[array_search($column_name,$skipc)]==$column_name){
                               
                              
                               array_push($indexofskip,array_search($column_name,$columns));
                            
                             continue ;
                            }
                              
                      
                            ?>
                            <th>
                            <?php echo $column_name;?>
                            </th>
                            <?php  endforeach; ?>
                    
                         
                            <?php 
                         // print_r($indexofskip);
                                   $vall1 = array();
								   
                                  printiner2 ($namesTH,"1",$row,$columns, $column_counter,$targetfile,$pasvalue,$vall1,$vg,$namesTD);
                              ?>
                           
                     
                    </tr>
                </thead>
                
                <tbody>
<?php

                   // output data of each row
                  
                   foreach($resultset as $index => $row) {
                   $column_counter =0;
                     unset($vall1);
                     $vall1 = array();
?>
                    <tr class='success';>
                         <?php 
                    
                     
                     
                     for ($i=0; $i < count($columns); $i++):
                            //echo $columns[0];
                     
                     if( !empty($indexofskip) ){
                       if($indexofskip[array_search($column_counter,$indexofskip)] == $column_counter)   {
                          
                         array_push($vall1,$row[$columns[$column_counter++]]);
                       
                        continue ;
                       
                     }
                     
                     }
                   
                   
                    
                          ?>
                             <td> 
                               <?php 
                     array_push($vall1,$row[$columns[$column_counter]]);
                     echo $row[$columns[$column_counter++]];
                               
                               
                       
                               ?>   
                             </td>
                                <?php endfor;?> 
                        <?php 
                     
                          
                     
                        
                  
                            printiner2 ($namesTH,"2",$row,$columns, $column_counter,$targetfile,$pasvalue,$vall1,$vg,$namesTD);
                        ?>
                      </tr>
                    <?php } ?>

                </tbody>
            </table>

    <?php }else{}   

}
?>