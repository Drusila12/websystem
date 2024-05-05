<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ngiti</title>

    <link rel="icon" href="images/hand.png" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu"
      rel="stylesheet"
    />

    <!-- Font Awesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--External CSS-->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!--***** Back to top button *****-->
    <a title="scroll to top" id="button"></a>

    <!--***** Nav Bar *****-->
    <nav class="navbar navbar-expand-lg">
      <a href="#title"
        ><img src="images/logo.webp" alt="HelpingHand_Logo" class="navbarlogo"
      /></a>
     

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link px-2" href="#title"
              ><i class="fas fa-home"></i>&nbsp;Home</a
            >
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class=""></i>&nbsp;About Us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#mission">Mission</a>
              <a class="dropdown-item" href="#why-ngiti">Why Ngiti</a>
              <a class="dropdown-item" href="#how-it-started">How Did It All Start?</a>
              <a class="dropdown-item" href="#who-we-are">Who Are We?</a>
              <a class="dropdown-item" href="#ngiti-by-noemie-schiever">NGITI by Noémie Schiever</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-project"></i>&nbsp;Projects
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#mission">Project 2024</a>
              <a class="dropdown-item" href="#why-ngiti">Previous Projects</a>
              <a class="dropdown-item" href="#how-it-started">Project Gallery</a>
              
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link px-2" href="#faq"
              ><i class="fas fa-question"></i>&nbsp;FAQ</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="#contact"
              ><i class="fas fa-envelope"></i>&nbsp;Contact</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link px-2 donate-btn" href="#donate">
              <i class="fas fa-donate"></i>&nbsp;&nbsp;Donate
            </a>
          </li>
        </ul>
      </nav>
      
      <div id="donateModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Donate Form</h2>
        <form id="donation-form" method="POST" action="{{ route('donate.store') }}">
        @csrf
            <!-- Fullname input -->
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required maxlength="255">
            <br>
            <!-- Gcash Number input -->
            <label for="gcash_number">GCash Number:</label>
            <input type="text" id="gcash_number" name="gcash_number" required maxlength="11">
            <br>
            <!-- Amount input -->
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required min="0">
            <br>
            <!-- Reference Number input (optional) -->
            <label for="reference_number">Reference Number (Optional):</label>
            <input type="text" id="reference_number" name="reference_number" maxlength="255">
            <br>
            <!-- Submit button -->
            <button type="submit">Donate</button>
        </form>
    </div>
</div>
    </nav>

    <!--***** Title *****-->

    <section class="coloured-section" id="title">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="big-heading">
              <span class="red">Support</span> the  
              <span class="orange">education</span> and  
              <span class="orange">healthcare</span> of the 
              <span class="orange">Children</span>, in 
              <span class="red">Bogo</span>

              
          </h1>
            <div>
              <form>
                <button id="rzp-button1">
                  <i class="fas fa-donate" ></i>&nbsp;&nbsp;Donate here
                </button>
               
              </form>
            </div>
          </div>

          <div class="col-lg-6">
            <img
              class="title-image"
              src="images/a.webp"
              
            />
            <img
              class="title-image1"
              src="images/b.webp"
             
            />
          </div>
        </div>
      </div>
    </section>

    <!--***** Features *****-->

    <section id="features" class="features">
      <div class="secf">
        <h2>Our Mission </h2>
      </div>

      <div class="cards">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <br />
              <br />
              <i class="icon fas fa-check-circle fa-4x" id="icon1"></i>
              <h3 class="feature-title">Education.</h3>
              <br />
              <p>
                We work to ensure children are educated for life through
                collective efforts.
              </p>
            </div>

            <div class="flip-card-back">
              <br />
              <img
                src="images/Card-1.png"
                alt="rural schools"
                width="90%"
                height="90%"
              />
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <br />
              <br />
              <i class="icon fas fa-bullseye fa-4x" id="icon2"></i>
              <h3 class="feature-title">Nutrition.</h3>
              <br />
              <p>
                We work to address the causes of malnutrition with special focus
                on children below 5 years
              </p>
            </div>

            <div class="flip-card-back">
              <br />
              <img
                src="images/Card-2.jpg"
                alt="child"
                width="90%"
                height="90%"
              />
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <br />
              <br />
              <i class="icon fas fa-heart fa-4x" id="icon3"></i>
              <h3 class="feature-title">Livelihood.</h3>
              <br />
              <p>
                Our livelihood interventions enable families to enhance income
                and provide better for their children.
              </p>
            </div>

            <div class="flip-card-back">
              <br />
              <img
                src="images/Card-3.jpg"
                alt="childrens"
                width="90%"
                height="90%"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ****   FAQ Section  **** -->

    <section id="faq">
      <div class="secf">
        <h2>FAQ</h2>
      </div>

      <div class="container bg-none">
        <div
          class="accordion accordion-flush faq-container"
          id="accordionFlushExample"
        >
          <div class="accordion-item bg-transparent">
            <h2 class="accordion-header" id="flush-headingOne">
              <button
                class="accordion-button collapsed bg-transparent text-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                Is my payment/transaction secured when I’m donating?
              </button>
            </h2>

            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse text-light"
              aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body answer answer">
                All Payments are secured via 128-bit encryption. Helping Hand
                assures you that the information you provide is completely
                protected and that your donations are safe. Our secure-server
                software encrypts all your personal information including name,
                contact number, email ID and address. If you wish to maintain
                anonymity, you can click on ‘Anonymous’ while donating.
              </div>
            </div>
          </div>

          <div class="accordion-item bg-transparent">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button
                class="accordion-button collapsed bg-transparent text-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo"
              >
                How are the Children verified?
              </button>
            </h2>

            <div
              id="flush-collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body answer">
                We, are extremely particular about the authenticity of a
                campaign. In order to ensure it is genuine, we follow a strict
                3-step process before listing any fundraiser. The rigorous
                verification process involves submission of legal identity
                proofs and medical documents. Furthermore, the specifics of each
                case are verified by the concerned hospital’s medical team. All
                fundraisers are ‘Assured’ and they protect the donor’s interest.
              </div>
            </div>
          </div>

          <div class="accordion-item bg-transparent">
            <h2 class="accordion-header" id="flush-headingThree">
              <button
                class="accordion-button collapsed bg-transparent text-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree"
              >
                How are my donations being utilized?
              </button>
            </h2>

            <div
              id="flush-collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body answer">
                There are many campaigns in urgent need of funds. Every month,
                your donation will be transferred to a hospital, school,
                orphanage for one such campaign to aid a child’s treatment and
                education.
              </div>
            </div>
          </div>

          <div class="accordion-item bg-transparent">
            <h2 class="accordion-header" id="flush-headingFour">
              <button
                class="accordion-button collapsed bg-transparent text-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseFour"
              >
                Whom should I contact if I have a question or problem in making
                an online donation?
              </button>
            </h2>

            <div
              id="flush-collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingFour"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body answer">
                In case when you are stuck at any step while donating or you
                have any other question , you can directly contact on the given
                number: 123-90898.
              </div>
            </div>
          </div>

          <div class="accordion-item bg-transparent">
            <h2 class="accordion-header" id="flush-headingFive">
              <button
                class="accordion-button collapsed bg-transparent text-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive"
                aria-expanded="false"
                aria-controls="flush-collapseFive"
              >
                What does donating online offer me?
              </button>
            </h2>

            <div
              id="flush-collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingFive"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body answer">
                It provides an easy, convenient way to donate to our mission,
                and reduces our fundraising costs. Plus, by donating with your
                credit card, you can use your credit card statement for
                taxes/receipts, earn credit card rewards, save time and reduce
                postage costs.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--***** Contact Us *****-->

    <section id="contact">
      <div class="contact">
        <h2>Contact Us</h2>
        <p>HAVE SOME QUESTIONS?</p>

        <form class="form" id="myForm" enctype="multipart/form-data">
          <div class="contbutton">
            <label for="First">
              <input type="text" placeholder="First Name" id="First" /> </label
            ><br />
            <label for="Last">
              <input type="text" placeholder="Last Name" /> </label
            ><br />
            <label for="email">
              <input type="email" placeholder="What's your mail?" /> </label
            ><br />
            <label for="problem">
              <textarea
              rows="5"
              cols="39"
                class="question"
                placeholder="Your questions..."
                id="problem"
              /></textarea> </label
            ><br />

            <div class="subbtn">
              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>

        <div class="avatar"></div>
      </div>
    </section>

    <!--************* Footer ********** -->

    <footer id="dk-footer">
      <div class="container">
        <div class="sec Aboutus">
          <h2>Helping Hand</h2>
          <span class="animate-border border-black"></span>

          <div class="footer-detail">
            <p>
              “None of us, including me, ever do great things. But we can all do
              small things, with great love, and together we can do something
              wonderful. Just together.”
            </p>
          </div>
        </div>

        <!-- End Col -->
        <div class="sec QuickLinks">
          <h2>About Us</h2>
          <u1>
            <li><a href="#title">Home</a></li>
            <li><a href="#features">Mission</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Contact</a></li>
          </u1>
        </div>

        <!-- End col -->
        <div class="sec section-heading">
          <h2>Contact Us</h2>
          <p>Having some questions? Don’t miss your problem</p>

          <form action="#">
            <div class="sec form-row">
              <div class="col dk-footer-form">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email Address"
                />

                <button
                  type="submit"
                  id="gmailus"
                  value="mailto: sb2253@gmail.com"
                >
                  <i class="fa fa-send"></i>
                </button>
              </div>
            </div>
          </form>
        </div>

        <div class="sec">
          <h2>Follow Us</h2>

          <ul class="sci">
            <li>
              <a
                href="https://www.facebook.com/soumita.biswas.961/"
                target="_blank"
                ><i class="fa fa-facebook-official" aria-hidden="true"></i
              ></a>
            </li>

            <li>
              <a href="https://www.instagram.com/_.soumita._/" target="_blank"
                ><i class="fa fa-instagram" aria-hidden="true"></i
              ></a>
            </li>

            <li>
              <a
                href="https://www.linkedin.com/in/soumita-biswas-88b0941ab/"
                target="_blank"
                ><i class="fa fa-linkedin" aria-hidden="true"></i
              ></a>
            </li>

            <li>
              <a href="mailto: sb2253@gmail.com" target="_blank"
                ><i class="fa fa-envelope" aria-hidden="true"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <!-- End Contact Container -->
      <div class="copyrightText">
        <p class="p1">“For it is in giving that we receive.”</p>
        <p class="p2">
          Copyright ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          || Helping Hand. All rights reserved
        </p>
      </div>
    </footer>

    <!-- Javascript -->
<script>// Get the modal
var modal = document.getElementById("donateModal");

// Get the button that opens the modal
var btn = document.querySelector(".donate-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- external js file-->
    <script src="app.js"></script>
   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
