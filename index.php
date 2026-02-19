<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>circumference</label><br>
        <input type="radio" name="choices" value="circumference"><br>
        <label>temperature</label><br>
        <input type="radio" name="choices" value="temperature"><br>
        <label>GRADES</label><br>
        <input type="radio" name="choices" value="gwa" onclick="showInput('boxes')"><br>
         <label>MIDTERM/FINAL</label><br>
        <input type="radio" name="choices" value="exam" onclick="showInput('exams')"><br>
        <input type="text" name="value"><br><br>
       
        
        <div id="boxInput" class="box" style="display:none;">
            <label>QUIZ</label><br>
            <input type="text" name="quiz"><br>
            <label>RECITATION</label><br>
            <input type="text" name="recit"><br>
            <label>ACTIVITIES</label><br>
            <input type="text" name="activities"><br>
            <label>ATTENDACE</label><br>
            <input type="text" name="attendance"><br>
                
               
                
                    <label>MIDTERM</label><br>
                    <input type="text" name="midterm"><br>
                    <label>FINALS</label><br>
                    <input type="text" name="finals"><br>
               

            </div>
        
        <div id="midtermFinal" class="box" style="display:none;">
                
                    <label>MIDTERM</label><br>
                    <input type="text" name="midterm_term"><br>
                    <label>FINALS</label><br>
                    <input type="text" name="finals_finals"><br>
        </div>


        <input type="submit" value="confirm" name="confirm" >


       
       


    
    </form>
    <script>
        function showInput(type) {

    // Hide both first
    document.getElementById("boxInput").style.display = "none";
     document.getElementById("midtermFinal").style.display = "none";

    if(type === "boxes") {
        document.getElementById("boxInput").style.display = "block";
    }
     if(type === "exams") {
        document.getElementById("midtermFinal").style.display = "block";
    }

    }
    </script>


   
    
</body>
</html>
<?php


/*$usernames = $_POST["username"];
$password = $_POST["password"];
if(isset($_POST["login"])){
   
    
    if(empty($usernames)){
        echo "no username";
    
    }elseif(empty($password)){
        echo "no password";
    }else{
        echo "hi my nigga {$usernames}";
    }
}
*/


function finalGrade($quiz,$recit,$activities,$attendance,$midterm,$finals){
    $gwa= ($quiz * 0.20) +
           ($recit * 0.10) +
           ($activities * 0.25) +
           ($attendance * 0.10) +
           ($midterm * 0.20) +
           ($finals * 0.20);

    return $gwa;

}
function midtermFinal($midterm_exam,$finals_exam){
    $ave=($midterm_exam * 0.20) +
        ($finals_exam * 0.20);

    return $ave;

}
if(isset($_POST["confirm"])){
   

    if(isset($_POST["choices"])){
        $choice = $_POST["choices"];
        $value = $_POST["value"];

        $quiz = $_POST["quiz"];
        $recit = $_POST["recit"];
        $activities = $_POST["activities"];
        $attendance = $_POST["attendance"];
        $midterm = $_POST["midterm"];
        $finals = $_POST["finals"];


        $midterm_exam = $_POST["midterm_term"];
        $finals_exam = $_POST["finals_finals"];

        if($choice == "circumference"){
            $radius = strlen($value);
            //$radius = ($value); would retrieve the input in the text field without using the $_POST because its called
            //$radius = filter_input(INPUT_POST,"value",FILTER_SANITIZE_NUMBER_INT);
            echo" THE TEXT VALUE WAS: {$radius}<br>";
            $pi = 3.14159265359;
            $circumference = 2 * $pi * $radius;



        echo"the circumference was {$circumference}";

        }elseif($choice == "temperature"){
            $fahrenheit = strlen($value);
            echo"text value of {$fahrenheit}";

            $celsius = ($fahrenheit - 32) * 5 / 9;
            echo "the temp was: {$celsius}";
        }
        elseif($choice == "gwa"){
            $result = finalGrade($quiz, $recit, $activities, $attendance, $midterm, $finals);
                echo "the result of your grades was:{$result}" . "<br>";
            
            if($result >=96.00 && $result <=100.00){
                echo "1.00";
            }
             elseif($result >=94 && $result <=95.99){
                echo "1.25";
            }
            elseif($result >=91 && $result <=93.99){
                echo "1.50";
            }
            elseif($result >=89 && $result <=90.99){
                echo "1.75";
            }
            elseif($result >=86 && $result <=88.99){
                echo "2.00";
            }
            

        }
        elseif($choice == "exam"){

            $results=midtermFinal($midterm_exam,$finals_exam);
             echo "the midterm and finals contributed {$results}% of your grade";

        }



    }
    else{
        echo"pick one";
    }
}



 /*$item = $_GET["item"];
        $prize = 4.99;
        $quantity = $_GET["quantity"];

        $total = $prize * $quantity;

        echo "you have acquired {$quantity}x {$item} . <br>";
        echo "your total is {$total}";
        */
   

?>

