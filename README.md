# php-msql-printer
printing mysql query using php to html table.

usage :

1- copy the files to ur project.
2-include the printer int your file:
 "include("qp.php");"
  -----------------
# usage :
 
 
 
 
 ------------------  
4- advanced printer 
   this printer will print the query normaly and add columns as many as your arrays incrased, columns head will be named in array1 
   #Notice: that all array1 and array2 and array3 must have same size. 
   each record will have form submit button that will direct you to the targeted php file in array3.
   form submit button in each record will copy three things :
   1- one value based on what reference you pick in array2 this will be stored in "varone"
   2-all values in the row as an array with same table index and store it in "varall"
   3-array5 values as its and store it in "varpass"
   #Notice: that array2 must have the index of your table heads that you want to copy.
   #Notice: form submit button class is "printerb".
   its better if you make array2 takes the "id" or primary key index for all columns e.g array(0,0,0 etc..) so you can reference your 
   commands to id only.
   # Notice: var999 is the variable where form store the copied record.
   
 
 
 
  
 usage :
 a-   qpw($con, $q, $array1, $array2, $array3,$array4,$array5);
 b-   $array1 is the new table-head as an array  e.g :  $array1 = array("head 1", "head 2");
 c-   $array2 is the referenced column as an array  e.g :  $array2 = array(0, 1); means: copy the value at column of index 0 to "head 1"
 d-   $array3 is the targets for (form-get-method) s an array  e.g :  $array2 = array("send.php", "delete.php");
 e-   you can retrieve the copyied record with simple code at the targeted php file e.g : $whatever = $_GET['var999'];
 f-   d
 

 
