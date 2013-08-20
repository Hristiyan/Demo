<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            Enter number or string: <input type="text" name ="text"/>
            <input type="submit" value="Check"/>
        </form>
        <?php 
            if(isset($_POST['text']))
            {

                $arr=$_POST['text'];
                echo var_dump($arr);
                $lenght =  strlen($arr);        
                $boolPalindrom=true;
                for ($i=0; $i < ($lenght+1)/2;$i++)
                {
                   if($arr[$i] != $arr[$lenght-$i-1])
                    {
                        $boolPalindrom=false;
                    }
                }
                if($boolPalindrom==true)
                {
                    echo 'This is a palendrome';
                }
                else 
                {
                    echo 'This is not a palendrome';
                }    
            }  
        ?>
    </body>
</html>
