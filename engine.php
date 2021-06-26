<?php 

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'engine');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
 
$sql2="SELECT * FROM engaine where EID between 1 and 6  ";
 $result=$dbc->query($sql2);




?>
<!DOCTYPE html>
<html>
<head>
<title> Robotic Arm </title>
<style type="text/css">
  body,html{background: linear-gradient(-45deg,  #A3BCB6,#DADED4,#FFFFFF);
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
	animation: gradient 15s ease infinite;
    background-repeat: no-repeat;
}
h3{color:#c49494;
    text-align: left;
    padding: 0 200px 0 200px;}
lable{ 
      position:relative; 
      left:150px; 
      top:90px; 
      color:#3C403D;
      font-family: Garamond;
      font-style:oblique;
      font-size: 40px;
      font-weight: bold;
      text-align: left;
      padding: 0 180px 0 180px;
      

       }
       
    .RANGE1{
    position:relative; 
    left:130px; 
    top:90px; 
    width: 30%;
     -webkit-appearance: none ;
     background:   #39603D;
     outline: none;
     opacity:0.7;
     -webkit-transition: 0.2s ;
     transition: opacity 0.2s;
     border-radius: 12px;
     box-shadow: 0px 1px 10px 1px  #A3BCB6;
}
p1{
    position:relative;
    left:250px; 
    top:90px; 
    color:#3C403D;
    font-family: Garamond;
    font-size: 24px;
    font-weight:bold;


}

.RANGE1:hover{

opacity: 1;

}
.RANGE1::-webkit-slider-thumb{
-webkit-appearance: none ;
appearance: none;
width:20px;
height: 20px;
background: cadetblue;
border-radius: 50%;
cursor: pointer;


}
  
     
   .RANGE1::after{
       content:"90";
       position:absolute;
       color:rgb(7, 7, 7);
       left:95%; 
      top:109%;
      font-size: 15px;
      
   }
   
   .RANGE1::before{
       content:"0";
       position:absolute;
       color:rgb(7, 7, 7);
       left:2%; 
      top:109%;
      font-size: 15px;
      
   }
  .submit{

    position:absolute;
    top:89%;
    left:86%;
    
  

  }

  .Run{

    position:absolute;
    top:89%;
    left:70%;
    
    
  }
  .button {
    width: 190px;
    height: 60px;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #000;
    background-color: rgb(220, 238, 235);
    border: none;
    border-radius: 45px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
    }
  
    .button:hover {
        background-color: #659e97;
        box-shadow: 0px 15px 40px rgba(46, 229, 157, 0.4);
        color: rgb(19, 18, 18);
        transform: translateY(-7px);
      }
</style>
</head>

<body>

        <form  action="engine1.php" method="POST">
       
   <div>
      <lable> <span name="E1"> Engine1</span> </lable> 
      <input class="RANGE1" type="range" id="rangeInput" name="rangeInput" min="0" max="90" value="0"
       oninput="amount.value=rangeInput.value">                                                       

       <p1 > Value:<output id="amount" name="amount" for="rangeInput"><span id="Output1">0</output></p1>
    
       
   </div>
   <br>
   <br>
   <br>



   <div>
   <lable >  Engine2 </lable> 
      <input class="RANGE1" type="range" id="rangeInput2" name="rangeInput2" min="0" max="90" value="0"
       oninput="amount2.value=rangeInput2.value">                                                       

       <p1 > Value:<output id="amount2" name="amount2" for="rangeInput2"><span id="Output2">0</output></p1>
   </div>
   <br>
   <br>
   <br>


   <div>
   <lable >  Engine3 </lable> 
      <input class="RANGE1" type="range" id="rangeInput3" name="rangeInput3" min="0" max="90" value="0"
       oninput="amount3.value=rangeInput3.value">                                                       

       <p1 > Value:<output id="amount3" name="amount3" for="rangeInput3"><span id="Output3">0</output></p1>
    </div>
    <br>
   <br>
  <br>

   <div>
   <lable >  Engine4 </lable> 
      <input class="RANGE1" type="range" id="rangeInput4" name="rangeInput4" min="0" max="90" value="0"
       oninput="amount4.value=rangeInput4.value">                                                       

       <p1 > Value:<output id="amount4" name="amount4" for="rangeInput4"><span id="Output4">0</output></p1>
    </div>
    <br>
   <br>
  <br>

   <div>
   <lable >  Engine5 </lable> 
      <input class="RANGE1" type="range" id="rangeInput5" name="rangeInput5" min="0" max="90" value="0"
       oninput="amount5.value=rangeInput5.value">                                                       

       <p1 > Value:<output id="amount5" name="amount5" for="rangeInput5"><span id="Output5">0</output></p1>
    </div>
    <br>
   <br>
  <br>

   <div>
   <lable >  Engine6 </lable> 
      <input class="RANGE1" type="range" id="rangeInput6" name="rangeInput6" min="0" max="90" value="0"
       oninput="amount6.value=rangeInput6.value">                                                       

       <p1 > Value:<output id="amount6" name="amount6" for="rangeInput6"><span id="Output6">0</output></p1>
    </div>
    <br>
   <br>
  <br>


 <div class="submit">
            <button class="button" name="save">Save </button>
          </div>
    <br>
    
    <div class="Run">
   <button class="button" name="Run" >Run</button>
    </div> 
<br>
      
   </form>
   <?php 


mysqli_close($dbc);

?>
  
    
  

</body>
<script src="engine.js"></script>
</html>
