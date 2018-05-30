# MT-qp

a php-msql-printer.

Its made for printing mysql query using php to html table with advanced features.

### Requirement

You need : a working php project with phpmyadmin database.


### Installing

1- copy php files to ur project folder.

2-include the printer int your file:

```
include("qp.php");

```

### Code

This code must be copied every time you want to use the printer. 

```
$query = "";
$skiped_Column = array("");
$new_THs = array();
$new_TDs = array();
$form_Actions = array();
$form_Methods = array(); 
$passed_Values = array();

qp($con,$query,$skiped_Column ,$new_THs,$new_TDs,$form_Actions,$form_Methods,$passed_Values);															
```



### Simple Usage

If you want to print simple table without any features :

copy the next code :

```
$query = "";

$skiped_Column=array(""); $new_THs= array(); $new_TDs=array(); $form_Actions=array(); $form_Methods=array(); $passed_Values=array(); 

qp($con,$query,$skiped_Column ,$new_THs,$new_TDs,$form_Actions,$form_Methods,$passed_Values);		
```
Then just modify the "$query" variable 
e.g : 
```
$query = " SELECT * FROM customer where Name like 'MT' ";
```
and make sure your database connection variable name is:
```
$con 
```
or use yours.





### Advance Usage

```
$query = "";                  // the query variable , try to use " select * from" .  go to "Notic 45" 
        -------------------------------------------------------
$skiped_Column = array("");         // if you want to hide some column, type the columns names here :    go to "Notic 46" 
                                  //  e.g :  $skiped_Column = array("ID","username");     
        -------------------------------------------------------
$new_THs = array();            // if you want to add a buttons columns at the end of the table, you can type column_head_name here:
                              // e.g :  $new_THs = array("delete","send"); 
                             //  every index you add will insert new column.  go to "Notic 47" 
        -------------------------------------------------------                               
$new_TDs = array();        // here you can type the new columns buttons values :   go to "Notic 48" 
                          // e.g :  $new_TDs = array("send","delete"); or $new_TDs = array(0,1); or  $new_TDs = array(); 
        -------------------------------------------------------                            
$form_Actions = array();   // here you can set and buttons forms actions :  go to "Notic 49"
                              e.g : $form_Actions = array("","send.php"); 
        -------------------------------------------------------
$form_Methods = array();    // here u can set the form methods :
                                 // e.g :  $form_Methods =array("POST","GET"); or $form_Methods =array("",""); for self method.
        -------------------------------------------------------
$passed_Values = array();       // since the buttons might direct you to other php pages, some times you need to pass a value.
                               //  e.g :  $passed_Values = array("2018"); or $passed_Values = array($value1,$value2); 
                              // "Notic 50" and "Notic & Issue 52"
        -------------------------------------------------------
qp($con,$query,$skiped_Column ,$new_THs,$new_TDs,$form_Actions,$form_Methods,$passed_Values);		
```




## Notics


Notic 45
```
when you use "select * from" , you will allow your table column indexs to be stored in the form to be used later.
if you select only few columns your referenced indexs will be based on your select. go to "Notic 50"
```


Notic 46
```
this array should always contion double quotation, cuase the printer search using it before hiding the columns : 
$skiped_Column = array(""); 
if you renamed your columns in the select statement, you should type the new name in the $skiped_Column .
e.g : " select id as user_id from" then $skiped_Column should be :
$skiped_Column = array("user_id"); 
```


Notic 47
```
$new_THs = array();   and   $new_TDs = array();  and   $form_Actions = array();   and $form_Methods = array();  must have the same size,
otherwise it wont print the new columns.
```


Notic 48
```
for setting the buttons values for each row using  $new_TDs = array(); 
you can put any string : $new_TDs = array("send");
or copy an column by index :  $new_TDs = array(0);  if "id" has index 0 the buttons values will be the ids.
or leave it empty :  $new_TDs = array();   this will copy the "$new_THs" the column_head value
```


Notic 49
```
the form action can be empty "" : $form_Actions = array(""); for targting same php. 
```


Notic 50
```
There is tow variables passed throgh the form :
1- $_POST['varall']; or $_GET['varall'];
this variable store all the value of each row in the same index of the orginal select.
e.g : 
"select id , username from "
the variable can be used like this :
$arrayall = $_GET['varall'];
$id = $array[0];
$username = $array[1];

2- $_POST['varpass']; or $_GET['varpass'];
this variable store your passed values and index it as its. 
```


Notic 51
```
the css file contain predefined style you can use it and modify it. 
the button css class will be generated based on the :  "$new_THs = array();"   
e.g :  $new_THs = array("delete");
in the css you can type : 
.delete{}  and do whatever you want. 
```


Notic & Issue 52
```
if you used the printer with POST methed then used it again in action page you will lose the previous values.
you might need to pass it again
```
## Preview

you can see how its look in the [img](img/) folder



## Version

MT-qp -0.3

## Authors

* **MTriple**- [profile](https://github.com/mtriple)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Next 

Please if you have any idea to make this printer better share it ..

