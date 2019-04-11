<!DOCTYPE html>
<html>
    <head>
      <?php
       session_start();
       ?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="check.scss">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <link href="https://fonts.googleapis.com/css?family=Orbitron|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <title>
            Ticket Window
        </title>
        <style>
         body, hmtl{
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            background-image: url("/images/darkbackground.jpg");
            background-size: cover;
            overflow-x: hidden;
        }
        .instruction{
            top: 15%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: fixed;
            font-weight: bold;
            font-size: 20px;
            color: white;
        }
        .holder{
            width: 50%;
            height: 40%;
            border-radius: 25px;
            top: 40%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            border: 2px solid white;
            text-align: center;
            position: fixed;
            color: white;
            background: none;
            
        }
        .circle1{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid gray;
            top: 65%;
            left: 25%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
        }
        .circle2{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid gray;
            top: 65%;
            left: 34%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
        }
        .circle3{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid gray;
            top: 65%;
            left: 43%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
        }
        .circle4{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid gray;
            top: 65%;
            right: 43%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
        }
        .circle5{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid gray;
            top: 65%;
            right: 34%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
        }
        .circle6{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid gray;
            top: 65%;
            right: 25%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
        }
        .check1{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid green;
            top: 65%;
            left: 25%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
            display: none;
        }
        .check2{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid green;
            top: 65%;
            left: 34%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
            display: none;
        }
        .check3{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid green;
            top: 65%;
            left: 43%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
            display: none;
        }
        .check4{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid green;
            top: 65%;
            right: 43%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
            display: none;
        }
        .check5{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid green;
            top: 65%;
            right: 34%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
            display: none;
        }
        .check6{
            width: 65px;
            height: 65px;
            border-radius: 50px;
            border: 2px solid green;
            top: 65%;
            right: 25%;
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
            position: absolute;
            color: gray;
            font-size: 35px;
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
            display: none;
        }
        .Q1{
            width: 100%;
            height: 100%;
            border-radius: 25px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: fixed;
            color: black;
            font-weight: bold;
            font-size: 20px;
            background: rgba(255, 0, 0, 0.5);
            box-shadow: 0 0 8px 2px rgba(255,0,0,0.6), inset 0 0 8px 2px rgba(255,0,0,0.6);
        }
        .Q2{
            width: 100%;
            height: 100%;
            border-radius: 25px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: fixed;
            color: black;
            display: none;
            font-weight: bold;
            font-size: 20px;
            background: rgba(255, 165, 0, 0.5);
            box-shadow: 0 0 8px 2px rgba(255,165,0,0.6), inset 0 0 8px 2px rgba(255,165,0,0.6);
        }
        .Q3{
            width: 100%;
            height: 100%;
            border-radius: 25px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: fixed;
            color: black;
            display: none;
            font-weight: bold;
            font-size: 20px;
            background: rgba(255, 255, 0, 0.5);
            box-shadow: 0 0 8px 2px rgba(255,255,0,0.6), inset 0 0 8px 2px rgba(255,255,0,0.6);
        }
        .Q4, .Q4a, .Q4b{
            width: 100%;
            height: 100%;
            border-radius: 25px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: fixed;
            color: black;
            display: none;
            font-weight: bold;
            font-size: 20px;
            background: rgba(0, 255, 0, 0.5);
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
        }
        .Q5{
            width: 100%;
            height: 100%;
            border-radius: 25px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: fixed;
            color: black;
            display: none;
            font-weight: bold;
            font-size: 20px;
            background: rgba(0, 100, 255, 0.5);
            box-shadow: 0 0 8px 2px rgba(0,100,255,0.6), inset 0 0 8px 2px rgba(0,100,255,0.6);
        }
        .Q6{
            width: 100%;
            height: 100%;
            border-radius: 25px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: fixed;
            color: black;
            display: none;
            font-weight: bold;
            font-size: 20px;
            background: rgba(255, 0, 165, 0.5);
            box-shadow: 0 0 8px 2px rgba(255,0,165,0.6), inset 0 0 8px 2px rgba(255,0,165,0.6);
        }
        .descrip{
            width: 90%;
            height: 50%;
            resize: none;
        }
        .previous{
            border-radius: 25px;
            width: 10%;
            height: 5%;
            bottom: 15%;
            left: 30%;
            position: fixed;
            color: black;
            display: none;
        }
        .next{
            border-radius: 25px;
            width: 10%;
            height: 5%;
            bottom: 15%;
            right: 30%;
            position: fixed;
            color: black;
        }
        .submit{
            border-radius: 25px;
            width: 10%;
            height: 5%;
            bottom: 15%;
            right: 30%;
            position: fixed;
            color: black;
            display: none;
        }
.checkmark {
    display:inline-block;
    width: 12px;
    height:34px;
    -ms-transform: rotate(40deg); /* IE 9 */
    -webkit-transform: rotate(40deg); /* Chrome, Safari, Opera */
    transform: rotate(40deg);
}
.checkmark_stem {
    position: absolute;
    width:3px;
    height:28px;
    background-color:#ccc;
    right:-5px;
    top:6px;
    box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
}
.checkmark_kick {
    position: absolute;
    width:15px;
    height:3px;
    background-color:#ccc;
    left:0px;
    bottom:0px;
    box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
}
.hometext{
    position: fixed;
    padding-top: 5px;
    font-size: 25px;
    text-align: center;
    font-weight: bold;
    font-family: 'ZCOOL QingKe HuangYou', cursive;
    font-family: 'Orbitron', sans-serif;
}
        </style>
       
         <?php
         
  //recalls the Session variable created in CheckLogin.php to obtain the user's id number and to confirm they have logged in.
        	if (isset($_SESSION['user'])) {
          $user = $_SESSION['user'];
          $stat = $_SESSION['stat'];
          }	else{
          ?>
          <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Index.php'" />
          <script>
             alert('Please Login to Access Mr. Ticket');
          </script>
          <?php
          }
          ?>
          
    </head>
    <body> 
    <div class="hometext">
    <a href="https://mrticket-mrcalihan.c9users.io/Pages/Functions.php"><span class="glyphicon glyphicon-home"></span> Home</a>
    </div>
    <input type="text" id="number" value="0" style= "display: inline-block"/>
            <div class= "instruction">
                Fill out the questions below to complete your ticket.
            </div>
             <?php
                echo "<form action='$thisPHP' method='POST'>";
              ?>
           <div class= "holder">
               <!-- Array of questions go here, to be viewed one at a time -->
               <div class= "Q1" name= "Q1" id= "Q1"><br>
                   Are you filling this ticket out on behalf of yourself?<br><br>
                    <select name="0" id="0" onchange="java_script_:show2(this.options[this.selectedIndex].value)"><br><br>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select><br><br>
          
                    <select id="otherPerson" name="otherPerson" style="display:none;">
                      <option value='' disabled selected hidden>Select a User</option>
                    <?php
                        include "Config.php";
                        $sql = "select * from USER order by USER_LNAME";
                        $result = $db->query($sql);
                        while ($row = $result->fetch_assoc()){
                        echo "<option value=".$row['USER_ID'].">".$row['USER_LNAME'].", ".$row['USER_FNAME']."</option>";
                        }
                    ?>   
                   </select>
               </div>
               <div class= "Q2" name= "Q2" id= "Q2"><br>
                   What Building is the problem in?<br><br>
                   <select name="1" id="1" required>
                      <option value='empty' disabled selected hidden>Select a Building</option>
                      <option value="Ardmore">Ardmore</option> 
                      <option value="Greenwood">Greenwood</option>
                      <option value="Harmon">Harmon</option>
                      <option value="Princeton">Princeton</option>
                      <option value="Jefferson">Jefferson</option>
                      <option value="HighSchool">High School</option>
                      <option value="Wheat">Wheat/Admin</option>
                      <option value="All">All Buildings</option>
                    </select>
               </div>
               <div class= "Q3" name= "Q3" id= "Q3"><br>
                   What type of problem are you having?<br><br>
                   <select name="2" id="2" required>
                      <option value='empty' disabled selected hidden>Select a Craft</option> 
                      <option value="Technology">Technology</option> 
                      <option value="Grounds">Grounds</option>
                      <option value="Maintenance">Maintenance</option>
                   </select>
               </div>  
               <div class= "Q4" name= "Q4" id= "Q4"><br>
                   What type of equipment is having the problem?<br><br>
                   <select name="3" id="3" onchange="java_script_:show1(this.options[this.selectedIndex].value)">
                      <option value='empty' disabled selected hidden>Select Equipment Type</option> 
                      <option value="Desktop">Desktop</option> 
                      <option value="Laptop">Laptop</option>
                      <option value="Toshiba Copier">Toshiba Copier</option>
                      <option value="Mobile Device">Mobile Device</option>
                      <option value="Other">Other</option>
                   </select>
                   <br>
                   <div id="otherType" style="display:none;">
                     <label for="otherType"><br>Specify</label>
                     <input type="text" name="otherType" maxlength="50" placeholder="Equipment Type"/>
                   </div>
                   <div id="ServiceTag" style="display:none;">
                     <label for="ServiceTag"><br>Service Tag </label>
                     <input type="text" name="ServiceTag" maxlength="20" placeholder=" (7 Alpha-numeric name)"/>
                   </div>
                   <div id="CopierCode" style="display:none;">
                     <label for="CopierCode"><br>Copier Code</label>
                     <input type="text" name="CopierCode" maxlength="6" placeholder="6 Digit Code"/>
                   </div>
                   <div id="computerName" style="display:none;">
                     <label for="computerName"><br>Computer Name</label>
                     <input type="text" name="computerName" maxlength="20" placeholder=" (i.e. LHS-LAB-SW01) "/>
                   </div>
               </div>
               <div class= "Q4a" name= "Q4a" id= "Q4a"><br>
                   What type of equipment is having the problem?<br><br>
                   <select name="3a" id="3a" onchange="java_script_:show1a(this.options[this.selectedIndex].value)">
                      <option value='empty' disabled selected hidden>Select Equipment Type</option> 
                      <option value="Heating/Cooling">Heating/Cooling</option> 
                      <option value="Lighting">Lighting</option>
                      <option value="Cleaning">Cleaning</option>
                      <option value="Plumbing">Plumbing</option>
                      <option value="Other">Other</option>
                   </select>
                   <br>
                   <div id="otherTypea" style="display:none;">
                     <label for="otherTypea"><br>Specify</label>
                     <input type="text" name="otherTypea" maxlength="50" placeholder="Equipment Type"/>
                   </div>
                </div>
                <div class= "Q4b" name= "Q4b" id= "Q4b"><br>
                   What type of equipment is having the problem?<br><br>
                   <select name="3b" id="3b" onchange="java_script_:show1b(this.options[this.selectedIndex].value)">
                      <option value='empty' disabled selected hidden>Select Equipment Type</option> 
                      <option value="Lawn/Garden">Lawn/Garden</option> 
                      <option value="Cleaning">Cleaning</option>
                      <option value="Other">Other</option>
                   </select>
                   <br>
                   <div id="otherTypeb" style="display:none;">
                     <label for="otherTypeb"><br>Specify</label>
                     <input type="text" name="otherTypeb" maxlength="50" placeholder="Equipment Type"/>
                   </div>
                </div>
               <div class= "Q5" name= "Q5" id= "Q5"><br>
                   Where is the problem location?<br><br>
                   <select name="4" id="4" onchange="java_script_:show0(this.options[this.selectedIndex].value)">
                      <option value='empty' disabled selected hidden>Select Location</option> 
                      <option value="Classroom">Classroom</option> 
                      <option value="Media Center">Media Center</option>
                      <option value="Computer Lab">Computer Lab</option>
                      <option value="Office">Office</option>
                      <option value="Other">Other</option>
                   </select>
                   <br>
                   <div id="roomnum" style="display:none;">
                     <label for="roomnum"><br>Room Number</label>
                     <input type="text" name="roomnum"/>
                   </div>
                   <div id="otherLoc" style="display:none;">
                     <label for="otherLoc"><br>Specify</label>
                     <input type="text" name="otherLoc" maxlength="20" placeholder="Location"/>
                   </div>
               </div>
               <div class= "Q6" name= "Q6" id= "Q6"><br>
                   Describe the problem to the best of your knowledge.<br><br>
                   <textarea onkeyup="charCount(this, 'counter', 250);" class="descrip" id="descrip" name="descrip" required maxlength="250"></textarea>
                   <!--<input disabled maxlength="3" size="3" value="250" id="counter"> characters remaining-->
               </div>
           </div>
        <button class= "submit" name= "submit" id= "submit">
            Submit
        </button>
        
    </form>
    <button class= "previous" name= "previous" id= "previous" onclick= "previousQ()">
        Previous
    </button>
    <button class= "next" name= "next" id= "next" onclick= "nextQ()">
        Next
    </button>
    
               
<?php
include "Config.php";
    $bldg = $_POST["1"];
    $craft = $_POST["2"];
    $room = $_POST["roomnum"];
    $desc = $_POST["descrip"];
    $service = $_POST["ServiceTag"];
    $ccode = $_POST["CopierCode"];
    if($_POST["1"] == "No"){
        $person = $_POST["otherPerson"];
    }else{
        $person = $user;
    }
    if($_POST["4"] == "Other"){
        $loc = $_POST["otherLoc"];
    }else{
        $loc = $_POST["4"];
    }
    if(isset($_POST["3a"])){
        if($_POST["3a"] == "Other"){
            $equip = $_POST["otherTypea"];
        }else{
            $equip = $_POST["3a"];
        }
    }
    if(isset($_POST["3b"])){
        if($_POST["3b"] == "Other"){
            $equip = $_POST["otherTypeb"];
        }else{
            $equip = $_POST["3b"];
        }
    }
    if(isset($_POST["3"])){
        if($_POST["3"] == "Other"){
            $equip = $_POST["otherType"];
        }else{
        $equip = $_POST["3"];
        }
    }
    if(isset($desc)){
        $sql = "insert into WORKORDER(USER_ID, WO_STATUS, WO_REQDATE, WO_COMPDATE, WO_AREATYPE, WO_AREANUM, WO_CRAFT, WO_SCHOOL, WO_DESC, WO_EQUIP, WO_SERVICETAG, WO_COPYCODE) values ('$person', 'Submitted', CURRENT_TIMESTAMP, '','$loc', '$room', '$craft', '$bldg', '$desc', '$equip', '$service', '$ccode')";
        if ($db->query($sql) == TRUE){
            ?>
            <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/Main.php'" />
            <?php
            echo "<script>
            alert('You have successfully added a ticket" .$_POST["3"]."a".$_POST["3a"]."b".$_POST["3b"]."'); 
            </script>";
        }else{
            ?>
            <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/TicketWindow.php'" />
            <?php
       
            echo "<script>
            alert('Something went wrong, please try again'); 
            </script>";
        }
    }
?>

                <div class= "circle1" name="circle1" id="circle1">
                    1
                </div>
                <div class= "circle2" name="circle2" id="circle2">
                    2
                </div>
                <div class= "circle3" name="circle3" id="circle3">
                    3
                </div>
                <div class= "circle4" name="circle4" id="circle4">
                    4
                </div>
                <div class= "circle5" name="circle5" id="circle5">
                    5
                </div>
                <div class= "circle6" name="circle6" id="circle6">
                    6
                </div>
                <div class= "check1" name="check1" id="check1">
                    <span class="checkmark">
                        <div class="checkmark_stem"></div>
                        <div class="checkmark_kick"></div>
                    </span>
                </div>
                <div class= "check2" name="check2" id="check2">
                    <span class="checkmark">
                        <div class="checkmark_stem"></div>
                        <div class="checkmark_kick"></div>
                    </span>
                </div>
                <div class= "check3" name="check3" id="check3">
                    <span class="checkmark">
                        <div class="checkmark_stem"></div>
                        <div class="checkmark_kick"></div>
                    </span>
                </div>
                <div class= "check4" name="check4" id="check4">
                    <span class="checkmark">
                        <div class="checkmark_stem"></div>
                        <div class="checkmark_kick"></div>
                    </span>
                </div>
                <div class= "check5" name="check5" id="check5">
                    <span class="checkmark">
                        <div class="checkmark_stem"></div>
                        <div class="checkmark_kick"></div>
                    </span>
                </div>
                <div class= "check6" name="check6" id="check6">
                    <span class="checkmark">
                        <div class="checkmark_stem"></div>
                        <div class="checkmark_kick"></div>
                    </span>
                </div>

           <script type= "text/javascript">
                function show0(aval) {
                    if (aval == "Other") {
                    otherLoc.style.display='inline-block';
                    roomnum.style.display='none';
                    Form.fileURL.focus();
                    } else if (aval == "Classroom"){
                    roomnum.style.display='inline-block';
                    otherLoc.style.display='none';
                    Form.fileURL.focus();
                    } else if (aval == "Computer Lab"){
                    roomnum.style.display='inline-block';
                    otherLoc.style.display='none';
                    Form.fileURL.focus();
                    }else{
                    otherLoc.style.display='none';
                    roomnum.style.display='none';
                    }
                }
                function show1(aval) {
                    if (aval == "Other") {
                    otherType.style.display='inline-block';
                    ServiceTag.style.display='none';
                    CopierCode.style.display='none';
                    computerName.style.display='none';
                    Form.fileURL.focus();
                    }  else if (aval == "Desktop"){
                    computerName.style.display='inline-block';
                    otherType.style.display='none';
                    ServiceTag.style.display='none';
                    CopierCode.style.display='none';
                    Form.fileURL.focus();
                    }  else if (aval == "Laptop"){
                    ServiceTag.style.display='inline-block';
                    otherType.style.display='none';
                    CopierCode.style.display='none';
                    computerName.style.display='none';
                    Form.fileURL.focus();
                    } else if (aval == "Toshiba Copier"){
                    CopierCode.style.display='inline-block';
                    otherType.style.display='none';
                    ServiceTag.style.display='none';
                    computerName.style.display='none'; 
                    Form.fileURL.focus();
                    }else{
                    otherType.style.display='none';
                    ServiceTag.style.display='none';
                    CopierCode.style.display='none';
                    computerName.style.display='none';
                    }
                }
                 function show1a(aval) {
                    if (aval == "Other") {
                    otherTypea.style.display='inline-block';
                    Form.fileURL.focus();
                    }  else{
                    otherTypea.style.display='none';
                    Form.fileURL.focus();
                    }
                }
                 function show1b(aval) {
                    if (aval == "Other") {
                    otherTypeb.style.display='inline-block';
                    Form.fileURL.focus();
                    }  else{
                    otherTypeb.style.display='none';
                    Form.fileURL.focus();
                    }
                }
                function show2(aval) {
                    if (aval == "No") {
                    otherPerson.style.display='inline-block';
                    Form.fileURL.focus();
                    }else{
                    otherPerson.style.display='none';
                    }
                }
                function nextQ(){
                    var value = parseInt(document.getElementById('number').value, 10);
                    if (document.getElementById(value).value != 'empty'){ 
                    value = isNaN(value) ? 0 : value;
                    value ++;
                    document.getElementById('number').value = value;
                    }else if(value == 3){
                        var find = document.getElementById('2').value;
                        if(find == "Maintenance"){
                            if (document.getElementById('3a').value != 'empty'){
                            value = isNaN(value) ? 0 : value;
                            value ++;
                            document.getElementById('number').value = value;
                            }
                        }
                        else if(find == "Grounds"){
                            if (document.getElementById('3b').value != 'empty'){
                            value = isNaN(value) ? 0 : value;
                            value ++;
                            document.getElementById('number').value = value;
                            }
                        }
                    }else{
                    value = isNaN(value) ? 0 : value;
                    alert("Please fill in the required field");
                    document.getElementById('number').value = value;
                    }
                    if (value == 0){
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       previous.style.display='none';
                       Q1.style.display='inline-block';
                       next.style.display='inline-block';
                       Form.fileURL.focus();
                    }else if (value == 1){
                       Q1.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       circle1.style.display='none';
                       submit.style.display='none';
                       Q2.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check1.style.display='inline-block';
                       Form.fileURL.focus();
                    }else if (value == 2){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle2.style.display='none';
                       Q3.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check2.style.display='inline-block';
                    }else if (value == 3){
                        var select = document.getElementById('2').value;
                        if(select == 'Technology'){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle3.style.display='none';
                       Q4.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check3.style.display='inline-block';
                        }else if (select == "Maintenance"){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle3.style.display='none';
                       Q4a.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check3.style.display='inline-block';
                        }else{
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4a.style.display='none';
                       Q4.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle3.style.display='none';
                       Q4b.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check3.style.display='inline-block';
                        }
                    }else if (value == 4){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle4.style.display='none';
                       Q5.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check4.style.display='inline-block';
                    }else if (value == 5){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       next.style.display='none';
                       circle5.style.display='none';
                       submit.style.display='inline-block';
                       previous.style.display='inline-block';
                       Q6.style.display='inline-block';
                       check5.style.display='inline-block';
                    }
                }
                function previousQ(){
                    var value = parseInt(document.getElementById('number').value, 10);
                    value = isNaN(value) ? 0 : value;
                    value--;
                    document.getElementById('number').value = value;
                    if (value == 0){
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       previous.style.display='none';
                       Q1.style.display='inline-block';
                       next.style.display='inline-block';
                       Form.fileURL.focus();
                    }else if (value == 1){
                       Q1.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       circle1.style.display='none';
                       submit.style.display='none';
                       Q2.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check1.style.display='inline-block';
                       Form.fileURL.focus();
                    }else if (value == 2){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle2.style.display='none';
                       Q3.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check2.style.display='inline-block';
                    }else if (value == 3){
                        var select = document.getElementById('2').value;
                        if(select == 'Technology'){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle3.style.display='none';
                       Q4.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check3.style.display='inline-block';
                        }else if (select == "Maintenance"){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle3.style.display='none';
                       Q4a.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check3.style.display='inline-block';
                        }else{
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4a.style.display='none';
                       Q4.style.display='none';
                       Q5.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle3.style.display='none';
                       Q4b.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check3.style.display='inline-block';
                        }
                    }else if (value == 4){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q6.style.display='none';
                       submit.style.display='none';
                       circle4.style.display='none';
                       Q5.style.display='inline-block';
                       previous.style.display='inline-block';
                       next.style.display='inline-block';
                       check4.style.display='inline-block';
                    }else if (value == 5){
                       Q1.style.display='none';
                       Q2.style.display='none';
                       Q3.style.display='none';
                       Q4.style.display='none';
                       Q4a.style.display='none';
                       Q4b.style.display='none';
                       Q5.style.display='none';
                       next.style.display='none';
                       circle5.style.display='none';
                       submit.style.display='inline-block';
                       previous.style.display='inline-block';
                       Q6.style.display='inline-block';
                       check5.style.display='inline-block';
                    }
                }
           </script>
    </body>
</html>
