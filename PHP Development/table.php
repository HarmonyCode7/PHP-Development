<?php
function MinMax($dataList)
{
    if(count($dataList) < 0)
    {
        return;
    }
    $max = reset($dataList);
    $min = reset($dataList);
    
    foreach($dataList as $key => $val)
    {
        $min = $min < $val? $min : $val;
        $max = $max > $val? $max : $val;
    }
    return array($min,$max);
}

function Average($dataList)
{
    $sum = 0;
    $numPhones = 0;
    foreach($dataList as $key => $val)
    {
        $sum += (float)$val;
        $numPhones++;
    }
    //ternary operator to return 
    //average if $numPhones is more than 
    // 0 to prevent didvision by 0
    return $numphones > 0? $sum / $numPhones : 0;
}

$smartphones = array("Sony"=> "400","HUAWEI"=>"340","Samsung"=>"139","Apple Iphone"=>"234");

$friends = array("Maria"=>20,"Paula"=>19,"Kinga"=>26);


$phonePriceRange = MinMax($smartphones);
$minPhonePrice =  $phonePriceRange[0];
$maxPhonePrice = $phonePriceRange[1];

function printTable($css_class_selector,$callback_func,$callback_params)
{
    echo "<table class=\"".$css_class_selector."\">";
    //contents of the table decided by callback function
    
call_user_func_array($callback_func,$callback_params);
   echo "</table>";
}


function printKeyValTable($dataList, $th)
{
    echo "<tr>
              <th>".$th[0]."</th>
              <th>".$th[1]."</th>
          </tr>";
   //Now the actual values
   foreach($dataList as $key => $val)
   {
       echo "<tr>";
       echo     "<td>".$key."</td>";
       echo     "<td>".$val."</td>";
       echo "</tr>";
   }          
}

//Wereally do not like repeating same tasks
function VerbAssocArray($dataList, $verbCallback, $verbCallBackParams)
{
    foreach($dataList as $key =>$val)          {
       //call_user_func_array($verbCallBack,
       
    }
}

function Test($dataList)
{
    foreach($dataList as $key => $val)
    {
         echo "<option value='"
            .$key."'>".$key." ".$val.
            "</option>";
                      
    }
}
function DropdownMenu($callback,$callbackParams)
{
     echo "<select>";
     //call a function the data
     call_user_func_array($callback, $callbackParams);
     echo "</select>";
}
?>
<html>
<head>
<style>
     body
     {
         font-family: sans-serif;
         /*border: 1px solid #000;*/
         padding: 1rem;
         font-size: 16px;
     }
     .smartphonesTable
     {
         font-size: 1.5rem;
         width: 100%;
         border-collapse: collapse;
     }
     .smartphonesTable, .smartphonesTable th, .smartPhonesTable td
     {
         border: 1px solid orange;
         padding: .5rem;
      }
      
     .smartphonesTables td
     {
         height: 1rem;
         vertical-align: bottom;
     }
     select
     {
         width: 100%;
         padding: 1rem;
         margin: 1rem 0;
     }
</style>
</head>
<body>
    <div>
        <h1>Dealing with Dynamic Table Associative Arrays</h1>
        <?php
           $tableHeaders = array("Smartphones","Prices"); printTable("smartphonesTable","printKeyValTable", array($smartphones,$tableHeaders));     
           
           DropdownMenu("Test",array($smartphones));      
        
        ?>
    </div>
</body>
</html>
