<html>
    <head>
        <style>
            h1,h3{
                text-align: center;
            }
            div{
                height: 50px;
                width: 50px;
                display: flex;
                justify-content: center;
                box-sizing: border-box;
                margin-left:650px; 
                font-weight: bold;
            }
            div span{
                background-color: lightgray;
                padding: 15px;
            }
        </style>
    </head>
<body>
<?php
 
$nm = $_POST['username'];   

echo "<h1>Welcome</h1>";
echo "<div><span>$nm</span></div>";
echo "<h3>You are successfully registered..!!</h3>";
?>
</body>

</html>