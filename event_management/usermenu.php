<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event Management Services Enterprise</title>	
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontstyle.css">
  </head>
  <body>
	
    <nav>
      <label class="logo">EMSE</label>
      <ul>
        <li><a href="usermenu.php">Home</a></li>
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
  <link rel="stylesheet" href="usermenustyle.css">
    <div class="menu-style">
        <form action="" method="POST">
            <a href="useraddevent.php"><input type="button" name="book" value="Book Event"></a>
            <a href="uservieworgnizers.php"><input type="button" name="manage" value="View all Organizers"></a>
            <a href="userviewsuppliers.php"><input type="button" name="suppliers" value="View All Suppliers"></a>

        </form>
    </div>
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


<?php
$connection = mysqli_connect("localhost","root","");
$database = mysqli_select_db($connection,'event_management');

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `cstmr_signup` WHERE email='$email' AND password = '$password'";
    $query_run = mysqli_query($connection,$query);

    if(mysqli_fetch_array($query_run)>0)
    {
        echo '<script type="text/javascript"> alert("Logged in successfully.") </script>';
       
    }
    else
    {
        echo '<script type="text/javascript"> alert("Invalid username or password") </script>';
    }
}

?>
  