<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<TABLE class="table table-striped">
    <TR>
       <TH COLSPAN="4"><BR><H3>TABLE TITLE</H3>
       </TH>
    </TR>
    <TR ALIGN="CENTER">
       <TH>Name</TH>
       <TH>Email</TH>
       <TH>Enrollment No.</TH>
       <TH>Phone No.</TH>
       <TH>Delete</TH>
    </TR>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "applicationgtu";

    $conn = new mysqli($server,$username,$password,$dbname) or die("Unable to Connectt");
    if ($result = $conn-> query("SELECT * FROM `application123`")) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // print_r($rows);
        // exit;
        foreach($rows as $row){
    ?>

    <TR ALIGN="CENTER">
       <TD><?php echo $row['name'] ?></TD>
       <TD><?php echo $row['email'] ?></TD>
       <TD><?php echo $row['enrollment'] ?></TD>
       <TD><?php echo $row['phone'] ?></TD>
<?php       echo " <TD><a href='delete.php?id=". $row['id']."'>delete</a></TD>";?>

    </TR>
    <?php }} ?>
 </TABLE>
</body>
</html>