<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
        $bd = "Bangladesh";
        $city = ['Dhaka', 'Barishal', 'Sylhet'];
            if($bd == 'Bangladesh'){
                echo 'Bangladesh is a beautiful country<br>';
            }

            foreach($city as $shohor){
                if($shohor == 'Dhaka'){
                    echo $shohor . ' is the heart of Bangladesh. <br>';
                }
                else if($shohor == 'Barishal' ){
                    echo $shohor . ' is a bibhag <br>';
                }
                elseif($shohor == 'Sylhet'){
                    echo $shohor . ' is famous for puri ;) <br>' ;
                }
                else{
                    print $shohor . "Found <br> ";
                }
            }

    ?>


</body>
</html>
