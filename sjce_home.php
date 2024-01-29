<?php
  if(isset($_POST['contact_btn'])){
    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $message=$_POST['user_message'];
    $to="hodchemical@stjosephs.ac.in";
    $header="from:$email";
    if(mail($to, $subject, $message, $header)){
      $msg1="Message Submitted Successfully";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJCE - Summer Camp</title>
    <link rel="stylesheet" href="sjce_home.css">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <img src="header.png">
      </nav>
    </header>

    <section class="homepage" id="home">
      <div class="content">
        <div class="text">
          <h1>Department Of Chemical Engineering</h1>
          <p>
            Offers a summer intership exclusively for class XII current/completed <br> From 15th April to 24th May</p>
        </div>
        <div class="btns">
          <a href="#services">View Courses</a>
          <a href="https://stjosephsgroup.org/sjce/chem" target="_blank">Register now</a>
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <h2>Courses Offered</h2>
      <p>Food, Transport & Participation certificates will be provided</p>
      <ul class="cards">
        <li class="card">
          <img src="flavoralchemy.jpeg" alt="img">
          <h3>Flavor Alchemy</h3>
          <p>creatively blends tastes and textures for a delightful dining experience.</p></a>
        </li>
        <li class="card">
          <img src="pharmaproinspect.jpg" alt="img">
          <h3>Pharma Pro Inspect</h3>
          <p>monitoring the quality of pharmaceutical products as a means of eliminating the hazard.</p>
        </li>
        <li class="card">
          <img src="latherlabanalytics.jpg" alt="img">
          <h3>Lather Lab Analytics</h3>
          <p>research and development in areas such as adapted preservation methods for new hides and skins.</p>
        </li>
      </ul>
      <ul class="cards">
        <li class="card">
          <img src="concreteinsight.jpg" alt="img">
          <h3>Cement InsightX:Concrete Clarity</h3>
          <p>Concrete Clarity Meter is handheld, easily transportable, lightweight, & easy to use. Its also accurate, repeatable and cannot be fooled.</p>
        </li>
        <li class="card">
          <img src="essense.jpg" alt="img">
          <h3>Lab Mastery:Unlocking The Essence</h3>
          <p>the study of chemical reactions, the combination of the elements and their compounds to give new compounds.</p>
        </li>
      </ul>
    </section>

    <section class="services bg2" id="services">
      <h2>Courses Offered</h2>
      <p>Food, Transport & Participation certificates will be provided</p>
      <ul class="cards">
        <li class="card">
          <img src="blueprint.jpg" alt="img">
          <h3>ChemCraft: Blueprinting Industry Innovation</h3>
          <p>describes the environment and behaviors necessary for ongoing innovation in an organization.</p>
        </li>
        <li class="card">
          <img src="matlab.png" alt="img">
          <h3>CodeClash: MATLAB vs C++ Showdown</h3>
          <p>are both widely used programming languages in the field of software development and scientific computing</p>
        </li>
        <li class="card">
          <img src="aspen.png" alt="img">
          <h3>Aspen Sim Master</h3>
          <p>to mathematically model chemical processes, from unit operations to full chemical plants and refineries.</p>
        </li>
      </ul>
      <ul class="cards">
        <li class="card">
          <img src="dynamo.png" alt="img">
          <h3>Design Dynamo: Crafting Concepts into reality</h3>
          <p>create visual logic so they can explore a wide range of parametric conceptual designs.</p>
        </li>
        <li class="card">
          <img src="watertreatment.jpg" alt="img">
          <h3>Aqua Quandaries: Tracking Real-time challenges in water treatment</h3>
          <p>The list of potential problems encountered by water treatment managers is almost endless.</p>
        </li>
      </ul>
    </section>

    <section class="about" id="about">
      <h2>TimeTable</h2>
      <table>
        <tr>
          <th rowspan="2">Day</th>
          <th rowspan="2">Topic</th>
          <th colspan="2">Syllabus</th>
        </tr>
        <tr>
          <td>FN Session</td>
          <td>AN Session</td>
        </tr>
        <tr>
          <td>Day1</td>
          <td>Flavor Alchemy</td>
          <td>
            <ul>
              <li>Proximate analysis of fats and oils</li>
              <li>Step-by-step breakdown of soap production</li>
              <li>Troubleshooting common issues in soap making</li>
              <li>Key quality parameters: pH, moisture content, hardness, etc.</li>
            </ul>
          </td>
          <td>
            <ul>
              <li>Group discussions on analytical approaches</li>
              <li>Students will analyse a provided soap sample</li>
              <li>Comprehensive soap analysis report and presentation</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>Day2</td>
          <td>Matlab VS C++ Show Down</td>
          <td>
            <ul>
              <li>Overview of MATLAB and C++</li>
              <li>Setting up development environments for MATLAB and C++</li>
              <li>MATLAB syntax and scripting</li>
              <li>Hands-on exercises in solving mathematical problems</li>
              <li>Case studies and practical examples</li>
            </ul>
          </td>
          <td>
            <ul>
              <li>Implementing a numerical algorithm in both MATLAB and C++</li>
              <li>Students will choose a project that highlights the strengths of either MATLAB or C++</li>
              <li>students’ hands on real -time problem In MATLAB.</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>Day3</td>
          <td>Aspen Sim Master</td>
          <td>
            <ul>
              <li>Introduction to Process Simulation and Aspen Software</li>
              <li>Design of unit operations </li>
              <li>Hands-on exercises solving aspen </li>
            </ul>
          </td>
          <td>
            <ul>
              <li>STUDENTS WILL CHOOSE  PROJECT </li>
              <li>case studies and practical examples</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>Day4</td>
          <td>Aqua Quandaries</td>
          <td>
            <ul>
              <li>ANALYSIS OF WATER SAMPLE</li>
              <li>TESTING OF PROEPRTIES</li>
              <li>MAPPING THE SAMPLE</li>
            </ul>
          </td>
          <td>
            <ul>
              <li>MEMBRANE SITE VISIT</li>
              <li>REAL TIME OPERATION OF WATER TREATMENT PLANT</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>Day5</td>
          <td>Aqua Quandaries</td>
          <td>
            <ul>
              <li>Students Project Expo</li>
            </ul>
          </td>
          <td>
            <ul>
              <li>Validation and certification</li>
            </ul>
          </td>
        </tr>
      </table>
      </div>
    </section>

    <section class="contact bg2" id="contact">
      <h2>Contact Us</h2>
      <p>Reach out to us for any inquiries or feedback.</p>
      <div class="row">
        <div class="col information">
          <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> OMR, Chennai - 600119</p>
            <p><i class="fas fa-envelope"></i> hodchemical@stjosephs.ac.in</p>
            <p><i class="fas fa-phone"></i> +918754479033</p>
          </div>          
        </div>
        <div class="col form">
          <form method="POST">
            <strong>
              <?php if(!empty($msg1)){
                echo $msg1;
              } ?>
            </strong>
            <input type="text" placeholder="Name*" name="user_name" required>
            <input type="email" placeholder="Email*" name="user_email" required>
            <textarea placeholder="Message*" name="user_message" id="textarea" required></textarea>
            <button id="submit" type="submit" name="contact_btn">Send Message</button>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div>
        <span>All rights reserved St.Joseph's College Of Engineering | Design By Website Development Team</span>
        <span class="link">
            <a href="#">Home</a>
            <a href="#contact">Contact</a>
        </span>
      </div>
    </footer>

  </body>
</html>