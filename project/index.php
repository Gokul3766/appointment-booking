<?php

$conn = mysqli_connect('localhost:3307','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Applience</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/76a467d13b.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg sticky-top">
            <a class="navbar-brand" href="#">HOME CARE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT US</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">SERVICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#whyus">WHY US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#reviews">REVIEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#locations">LOCATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
                  
                </ul>

                
                <a href="#contact" style="text-decoration:none; color:beige"><button >
  <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <span>BOOK</span>
  </button></a>

            </div>

</div>
</header>


<div id="slider">
<div class="container-fluid">
<div id="carousel-autoplay" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.glotechrepairs.co.uk/assets/custom/img/header/product-types/washing-machine-repairs.jpg" class="d-block" >
    </div>
    <div class="carousel-item">
      <img src="https://st2.depositphotos.com/1010613/8093/i/950/depositphotos_80938744-stock-photo-repairman-repairing-refrigerator.jpg" class="d-block">
    </div>
    <div class="carousel-item">
      <img src="https://st2.depositphotos.com/1010613/8093/i/600/depositphotos_80938892-stock-photo-woman-looking-at-repairman-repairing.jpg" class="d-block">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-autoplay" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-autoplay" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<div id="services">
<div class="container-fluid">
  <div class="row align-items-center justify-center text-center p-3">
    <h1>OUR SERVICES</h1>
    <br>
    <div class="col-sm-4 p-3">
      <img src="smart-washing-machine.gif" width=150px height=150px><br>
    WASHING MACHINES
    </div>
    <div class="col-sm-4 p-3">
    <img src="refrigerator.gif" width=150px height=150px><br>
    REFRIGERATORS
    </div>
    <div class="col-sm-4 p-3">
    <img src="air-conditioner.gif" width=150px height=150px><br>
    AIR CONDITIONERS
    </div>
    <div class="col-sm-4 p-3">
    <img src="tv.gif" width=150px height=150px><br>
    TELIVISIONS
    </div>
    <div class="col-sm-4 p-3">
    <img src="oven.gif" width=150px height=150px><br>
    OVENS
    </div>
    <div class="col-sm-4 p-3">
    <img src="exhaust.gif" width=150px height=150px><br>
    KITCHEN CHIMEYS
    </div>
  </div>
</div>
</div>


<div id="about"> 
  <div class="container-fluid">
<div class="row align-items-center justify-center p-3">
  <div class="col-sm">
    <h1>ABOUT US</h1>
    <br>
    <p>We Provide Our Best And Most Satisfying Service For All Types Of Washing Machines Regrigerators, Dish washers, Air-Conditioners And We Will Serve All Brands Of Home Appliances Like LG, Samsung, IFB, Whirlpool, Videocon,Bosch,Godrej,Haier,Ifb,Lg,Onida,Panasonic,Whirlpool With A Team Of Highly Skilled And Verified Technicians, We Deliver Top-Notch Services For Your Essential Home Appliances. Our Well-Trained Team Can Cater To Your Needs For Installation And Repair Services Of Chennai Service Point.</p><br>
    <img src="verified.gif" width=50px height=50px>100% Best Quality Service<br>
    <img src="verified.gif"width=50px height=50px>24/7 Support<br>
    <img src="verified.gif"width=50px height=50px>Saves Money<br>
  </div>
  <div class="col-sm">
    <img src="https://i0.wp.com/columbia-appliance.ca/wp-content/uploads/2020/04/hero-home.png?w=1080&ssl=1" class="img-fluid">
  </div>
</div>
</div>
</div>




<div id="whyus">
<div class="container-fluid">
  <div class="row align-items-center justify-center text-center p-3">
    <h1>WHY US</h1>
    <br>
  <div class="col-sm-4 p-3">
      <img src="purse.gif" width=150px height=150px><br>
      <h3>Lowest inspection Charge</h3>
      <p>If you are availing the service, no inspection charge only pay the service charge, Incase not availing the service you have to pay the inspection charge of Rs.600.<p>
    </div>
    <div class="col-sm-4 p-3">
    <img src="calendar.gif" width=150px height=150px><br>
    <h3>30 days warranty</h3>
    <p>All appliance services are covered by 30 days warranty any issues with in our warranty period please reach us immediately</p>
    </div>
    <div class="col-sm-4 p-3">
    <img src="labour-day.gif" width=150px height=150px><br>
    <h3>Trusted technicians</h3>
    <p>ServiceTree provides services only from trusted technicians.</p>
    </div>
    <div class="col-sm-4 p-3">
    <img src="tag.gif" width=150px height=150px><br>
    <h3>Transparent pricing</h3>
    <p>Get a complete rate card before availing the service, no more surprises on pricing. No hidden charges, you would know your options.</p>
    </div>
    <div class="col-sm-4 p-3">
    <img src="payment.gif" width=150px height=150px><br>
    <h3>Pay after service</h3>
    <p>We go the extra mile for our customer's convenience with multiple payment modes-choose to pay before or after availing the services, either online or offline.</p>
    </div>
    <div class="col-sm-4 p-3">
    <img src="support.gif" width=150px height=150px><br>
    <h3>Excellent customer support</h3>
    <p>You can rely on us for any service assistance. We would be glad to answer your queries via call or e-mail reach us. We would love to hear from you.</p>
    </div>

  </div>
</div>
</div>

<div id="reviews">
  <div class="container">
    <div class="row align-items-center justify-center text-center p-3">
     <h1>REVIEWS</h1>
      <div class="col-sm p-3 bg-dark text-white ms-2 me-2 mt-4">
      <h3 style="color:white;">Excellent</h3>
      <br>
      <blockquote class="blockquote">
  <p class="mb-0">Gave me some important information and cleary sorted the problem and fix.</p>
  <br>
  <footer class="blockquote-footer">M.S.SUNDAR, valasarvakkam</footer>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
</blockquote>
      </div>


      <div class="col-sm p-3 bg-dark text-white ms-2 me-2 mt-4">
      <h3 style="color:white;">Good job</h3>
      <br>
      <blockquote class="blockquote">
  <p class="mb-0">very happy with his service. 2 years of problem with our AC was solved imediately.</p>
  <br>
  <footer class="blockquote-footer">KIRUTHIKA, Adayar</footer>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
</div>

      <div class="col-sm p-3 bg-dark text-white ms-2 me-2 mt-4">
      <h3 style="color:white;">GOOD</h3>
      <br>
      <blockquote class="blockquote">
  <p class="mb-0">Your service was excellent guys I would like to give you 4 rating.Thank you</p>
  <br>
  <footer class="blockquote-footer">LALITH, Ashok Nagar</footer>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
  <i class="fa-solid fa-star"></i>
</div>

    </div>
  </div>
</div>


<div id="faq">
  <div class="container-fluid mt-4">
    <h1>FAQ</h1>
    <br>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What is HomeAssist Plan?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>In today’s busy world, the role of Home Appliances has evolved from being a luxury to an everyday necessity. They have become an integral part of our lives and help us get so much done. Any breakdown of our appliances disrupts our everyday lives and throw us off our budget and schedule. A breakdown not only brings financial burden but also a great deal of hassle in getting the products repaired. Annual Maintenance Contracts can alleviate some of these problems but you need to and manage a contract for each of your appliances, provides coverage only against breakdowns and service standards are usually really poor. What if you could protect all your appliances in your home under a single plan and also get a superlative service?</p>
      <p>HomeAssist is a unique protection plan with which you can cover all the appliances in your Home against not just functional breakdowns but also against Accidental Damages, under a single plan. E.g. you can cover minimum 3 products for a cover amount of Rs.60,000. Think of it as a family floater plan for your appliances.</p>
      <p>
      What’s more, we not only cover the financial risk associated with the breakdowns of the appliances, but provide exceptional service experience backed by service guarantees in the event of a damage to any of your covered products. If your product can not be repaired, we will provide with you with a monetary settlement reflecting the current market value of your appliance. Please refer to the Terms & Conditions for details.
      </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      What does a HomeAssist plan protect against?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>HomeAssist protects you against the financial risk associated with damage or loss of your covered appliances due to any of the following reasons:</p>

<p>1. Breakdown/Functional Breakdown/Electric & Mechanical Breakdown: Any mechanical and/or electrical defects and or failure of the product that causes it to not function in its intended manner under normal usage conditions.</p>

<p>2. Accidental Damage: A damage to the covered product(s) within the premises as a result of an impact purely as a result of an accident. Any willful damage to the product(s) or negligence on your part to safeguard the product from damage will not be considered as an accidental damage.</p>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Why should I buy a HomeAssist plan?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>There are many great reasons to buy a HomeAssist plan.</p>

<p>1. Your older appliances are more prone to breakdowns. A HomeAssist membership covers appliances up to 10 years old so that there are no surprise expenditures that can throw you off your budget.</p>

<p>2. No need to maintain different contracts for different appliances. With HomeAssist you can over all the appliances in your home under a single plan.</p>

<p>3. No other protection plan in the market offers as wide a coverage as HomeAssist. We not only cover functional breakdowns but also accidental damages.</p>

<p>4. Ask any of your friends who has got one repaired recently, getting the products repaired is a big hassle. HomeAssist comes with service assurance so that you can relax while do whatever is necessary to get your appliances back to normal working condition as soon as possible.</p>

<p>5. You get great valuation for your appliances, as we only apply a 10% depreciation per annum for your appliance’s age and no more than 60% depreciation.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<div id="locations">
<div class="container-fluid">
  <div class="row mt-5">
    <h1>LOCATIONS</h1>
    <br><br><br>
    <h3>AREAS WE SERVE</h3>
    <br><br><br>
    <p>We offer wide range of services to all major locations</p>

    <div class="col-sm-2 ">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Adyar</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Thiruvanmiyur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kottivakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Uthandi</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Iyyappanthangal</p>
    </div>
    <div class="col-md-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Ashok Nagar</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kandanchavadi</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Semmancheri</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Palavakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kanathur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Vanagaram</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Valasaravakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Perungudi</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Navallur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Neelankarai</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Muttukadu</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Ambathur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Alwarthirunagar</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Thoraipakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Siruseri</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Vettuvankeni</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kovur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Avadi</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Virugambakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Karapakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Padur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Injambakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Porur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Anna Nagar</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Saligramam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Sholinganallur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kelambakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Panaiyur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kundrathur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    KK Nagar</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Vadapalani</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Guindy</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Velachery</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Medavakkam</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Tambaram</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Vandalur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kolathur</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Chetpet</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Ayanavaram</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Kilpauk</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Aminjikarai</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Pallavaram</p>
    </div>
    <div class="col-sm-2">
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i>
    Chromepet</p>
    </div>
    
  

  </div>
</div>

</div>

<div id="contact">
<div class="container-fluid">
  <div class="row align-items-center justify-center text-center p-3 mt-4 mb-3">
    <div class="col-sm-7">
      <h1>HOME CARE</h1>
    <p>Home Care is the first choice for the Installation, Repair and Maintenance of all Home Appliances in Chennai.</p>
    <h3>CONTACT INFO</h3>
    <p><i class="fa-solid fa-location-dot" style="color: #5e8e06;"></i> No 12, Muthamil Street, Ambal Nagar, Kovur,
Chennai - 600128.</p>
<p><i class="fa-solid fa-phone-volume" style="color: #7c8f61;"></i> (+91) 88073 11209</p>
<p><i class="fa-sharp fa-regular fa-envelope" style="color: #899c6d;"></i> homecare@gmail.com</p>



    </div>
    <div class="col-sm-5">
      
    <h1 class="heading">MAKE APPOINTMENT</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <?php 
    if(isset($message)){
      foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
        }
      }
   ?>
   <span>Enter Your Name :</span><br>
   <input type="text" name="name" class="box" required><br><br>
   <span>Enter Your Email :</span><br>
   <input type="email" name="email" class="box" required><br><br>
   <span>Enter Your Number :</span><br>
   <input type="number" name="number" class="box" required><br><br>
   <span>Choose Appointment Date :</span><br>
   <input type="datetime-local" name="date" class="box" required><br><br>
   <input type="submit" value="Submit" name="submit" class="link-btn">
</form>  </div>
  </div><br>
  <p style="text-align:center">©Copyright 2019 homecare Service Center. All Rights Reserved<p>
</div>

</div>


    
</body>
</html>