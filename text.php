
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .box{
        width:80px;
        height:220px;
        background-color:#CCC;
        border-radius: 5px;
        padding: 10px;
        margin:10px;
        float:left;
    }
    </style>
</head>
<body>
<table border="1px">
<tr>
<?php
for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>

    <?php
    for($bcc=2;$bcc<10;$bcc++)
    {
    ?>
        <div class="box">
            <table>
                <?php
                
                for($i=1;$i<=10;$i++)
                {
                ?>
                    <tr>
                        <td><?php echo $bcc; ?></td>
                        <td>x</td>
                        <td><?php echo $i; ?></td>
                        <td>=</td>
                        <td><?php echo $bcc*$i; ?></td>
                    </tr>
                <?php 
                }
                ?>    
            </table>
        </div>
    <?php
    if($bcc%4==1)
            echo "<div style='clear:both'></div>";
    }
    ?>
</body>

</html>
bcc.php
Đang hiển thị bcc.php.