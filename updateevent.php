<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event Management Services Enterprise</title>	
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="viewstyle.css">
  </head>
  <body>
	
    <nav>
      <label class="logo">EMSE</label>
      <ul>
        <li><a href="Menu.php">Home</a></li>
        <li><a href="#p-n-b-h">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact_us">Contact Us</a></li>
		<li><a href="Homepage.php">Logout</a></li>
       
      </ul>
    </nav>
    <section>
    </section>
  </body>
</html>

</head>

<body>

  <link rel="stylesheet" href="searchstyle.css">
    <center>

    <center>
    <form action=""method="POST" style="margin-top: -100px">
      <h1>Update Event</h>
      <div><input type="text" name="Event_ID" placeholder="Enter Event ID"/></div>
      <input type="submit" name="search" value="Search"> 
    </form>
    </center>

    <a href="Menu.php">
<div class="btnstyle2"><input  type="submit" name="login" value="back"/></div></a>  

<?php
$connection =mysqli_connect("localhost","root","");
$database = mysqli_select_db($connection, 'Event_management');
  if(isset($_POST['search']))
  {
    $Event_ID = $_POST['Event_ID'];

    $query = "SELECT * FROM event where Event_ID='$Event_ID'";
    $query_run = mysqli_query($connection,$query);

    while ( $row = mysqli_fetch_array($query_run)) 
    {
      ?>
        <div class="search-style">
        <form action =""method ="POST">
        <input type ="hidden" name="Event_ID" value="<?php echo $row['Event_ID']?>" />
        <label for="Name">Name:</label><input type ="text" name="Name" value="<?php echo $row['Name']?>" />
        <label for="Type">Type:</label><input type ="text" name="Type" value="<?php echo $row['Type']?>"/></br>
        <label for="Theme">Theme:</label><input type ="text" name="Theme" value="<?php echo $row['Theme']?>"/>
        <label for="Venue">Venue:</label><input type ="text" name="Venue" value="<?php echo $row['Venue']?>"/></br>
        <label for="Date">Date:</label><input type ="text" name="Date" value="<?php echo $row['Date']?>"/>
        <label for="Duration">Duration:</label><input type ="text" name="Duration" value="<?php echo $row['Duration']?>"/></br>
        <label for="Time">Time:</label><input type ="text" name="Time" value="<?php echo $row['Time']?>"/>
        <label for="No_of_Attendees">No. of attendees:</label><input type ="text" name="No_of_Attendees" value="<?php echo $row['No_of_Attendees']?>"/></br>
        <label for="catery">Catery:</label><input type ="text" name="catery" value="<?php echo $row['catery']?>"/>
        <label for="clothing_vendor">Clothing:</label><input type ="text" name="clothing_vendor" value="<?php echo $row['clothing_vendor']?>"/></br>
        <label for="photography_and_video">Photography:</label><input type ="text" name="photography_and_video" value="<?php echo $row['photography_and_video']?>"/>
        <label for="car_rental
        ">Car rental:</label><input type ="text" name="car_rental" value="<?php echo $row['car_rental']?>"/></br>
        <label for="event_designer">Event designer:</label><input type ="text" name="event_designer" value="<?php echo $row['event_designer']?>"/>
        <label for="invitations_and_printing">Invitations:</label><input type ="text" name="invitations_and_printing" value="<?php echo $row['invitations_and_printing']?>"/></br>
        <label for="music">Music:</label><input type ="text" name="music" value="<?php echo $row['music']?>"/>
        <label for="status">Status:</label><input type ="text" name="status" value="<?php echo $row['status']?>"/></br>

        <input type="submit" name="update" value="Update">
        </form>
        <a href="updateevent.php"><div class="btnstyle2"><input type="submit" name="Back" value="back"></div></a>   
        </div>
    <?php
    }
  }
?>
  </center>
</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$database = mysqli_select_db($connection, 'Event_management');

if(isset($_POST['update']))
{
  $Name = $_POST['Name'];
  $Type = $_POST['Type'];
  $Theme = $_POST['Theme'];
  $Venue = $_POST['Venue'];
  $Date = $_POST['Date'];
  $Duration = $_POST['Duration'];
  $Time = $_POST['Time'];
  $No_of_Attendees = $_POST['No_of_Attendees'];

  $catery = $_POST['catery'];
  $clothing_vendor = $_POST['clothing_vendor'];
  $photography_and_video = $_POST['photography_and_video'];
  $car_rental = $_POST['car_rental'];
  $event_designer = $_POST['event_designer'];
  $invitations_and_printing = $_POST['invitations_and_printing'];
  $music = $_POST['music'];
  $status = $_POST['status'];

  $query = "UPDATE `event` SET Name='$_POST[Name]',
  Type='$_POST[Type]',
  Theme='$_POST[Theme]',
  Venue='$_POST[Venue]',
  Date='$_POST[Date]',
  Duration='$_POST[Duration]',
  Time='$_POST[Time]',
  No_of_Attendees='$_POST[No_of_Attendees]',

  catery = '$_POST[catery]',
  clothing_vendor = '$_POST[clothing_vendor]',
  photography_and_video = '$_POST[photography_and_video]',
  car_rental = '$_POST[car_rental]',
  event_designer = '$_POST[event_designer]',
  invitations_and_printing = '$_POST[invitations_and_printing]',
  music = '$_POST[music]',
  status = '$_POST[status]'
  where Event_ID = $_POST[Event_ID] ";

    $query_run = mysqli_query($connection, $query);

     if($query_run)
     {
      echo '<script> alert("Updated successfully.") </script>';
     }
     else
     {
      echo '<script> alert("Update failed.") </script>';
     }
}

?>

  </center>
      
</body>
</html>
<div class="divide">

  <p>.</p>
  
</div>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="servicesstyle.css">

  </head>
  <body>
    <div class="services-section">
      <div class="inner-width">
        <h1 class="section-title" id="services">Our Services</h1>
        <div class="border"></div>
        <div class="services-container">

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-paint-brush">01</i>
            </div>
            <div class="service-title">Timeline Coordination</div>
            <div class="service-desc">
              A calendar is an event organizer's best friend. Lt us guide you through the process of defining a timeline that is 
              unique to your project and help you stay on track till the very end
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-code">02</i>
            </div>
            <div class="service-title">Budget Planning</div>
            <div class="service-desc">
              We have the expretise to develop a budget that works for your organization, as well as the tools to track al of your
              vendor costs.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-brush">03</i>
            </div>
            <div class="service-title">Meeting Logistics</div>
            <div class="service-desc">
              Put your event in the capable hands of one of our event organizers who specialize in juggling mulltiple vendors and 
              keeping even the most logistically complicated day running smoothly.
            </div>
          </div>
           <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-paint-brush">04</i>
            </div>
            <div class="service-title">Housing Management</div>
            <div class="service-desc">
             Attendees are increasingly booking events online. We at EMSE's are up to date on the latest industry
             trends and use our resources to provide the best package for our clients.
            </div>
          </div>
           <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-paint-brush">05</i>
            </div>
            <div class="service-title">Event Communication</div>
            <div class="service-desc">
             Whether you're communicating to potential vendors, speakers or exhibitors, EMSE can assist in developing
             effective, concise and appropriate communication strategies.
            </div>
          </div>
           <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-paint-brush">06</i>
            </div>
            <div class="service-title">Guideline Integration</div>
            <div class="service-desc">
             We integrate sustainable event strategies into all our services and submit a final case study tracking
             implemented changes. We will provide guidance to our clients throughout all stages of the event. This all 
             comes with no additional cost.
            </div>
          </div>

          
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
<link rel="stylesheet" href="aboutusstyle.css">
<style>
  @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700);
@import url('https://fonts.googleapis.com/css?family=Lato:400,700,900,900i');
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900');

</style>
<div id="menu-bar"></div>
<div id="page-name-bar"></div>


<div id="main-wrap">
  
  <a href="#"><i class="fa fa-facebook-square"></i></a>
  <a href="#"><i class="fa fa-twitter-square"></i></a>
  <div id="phone-sec">
   <i class="fa fa-phone"></i>
    <i class="fa fa-home"></i>
    <i class="fa fa-clock-o"></i>
  </div>  

  <div id="menu-bar2"></div>
  
 
  <div id="about-us-text"> Our aim is to help clients who need an event planner. Event Management System is an application we developed. It is about managing a large scale event such as birthdays, anniversaries, weddings, reunions and much more. It involves preparing or studying concepts before launching an event. This includes budgeting, scheduling, catering, arranging decorations and connections to suppliers. The person managing all of these events is called the event organizer. This person plans and executes the event and takes responsibility for the event. This includes overall design, marketing, communication and services to clients. 

 This system is significant to the clients who are first-timers in booking an event or don’t know how or where to find suppliers for their desired event. Our system has all the necessities for an event so the clients won’t have a problem in finding all the elements in an event and budgeting because this system can do it for them. 
</div>
  
  
  
  <div id="page-name-bar-heading">
    
    <p id="p-n-b-h">About Us</p>
  </div>
  
  </p>

</div>

</div>
<div id="page-name-bar2"></div>
<div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <a href="#"><img src="emse.png"></a>
                        <p id="contact_us">Contact Us</p>
                        <div class="hr"></div>
                        <h6>Feliciano St. Aguada Ozamiz City, Misamis Occidental.<div><div>emseservices@gmail.com</div></div></h6>
                        <h6>09883940004<span>|</span>888-993-222</h6>                       
                    </div>
                </div>
            </div>
        </div>


