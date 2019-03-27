<?php
    $message = "Starting apache 1.2.3";

    $employees = array(
        array(
            "name"=>"Nathan The Prophet",
            "occupation"=> "employee",
            "salary"=>1500,
            "speciality"=>"programmer"
        ),
        array(
            "name"=>"Sally Baldock",
            "occupation"=> "employee",
            "salary"=>1500,
            "speciality"=>"programmer"
        )
        );

    function printTable($table)
    {
        echo "<ul>";
        $employeeID = 1;
        foreach($table as $employee)
        {
            echo "<h1>Employee #".$employeeID."</h1>";
            foreach($employee as $key => $val)
            {
                echo "<li>".$key." ".$val."</li>";
            }
            $employeeID++;
        }
        echo "</ul>";
    }
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Array of Arrays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <p><?php echo $message; printTable($employees)?></p>
</body>
</html>
