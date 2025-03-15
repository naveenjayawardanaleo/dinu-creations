<?php include 'inc/header.php'; ?>

<!--Breadcrumb Start-->
<div class="pq-breadcrumb pq-bg-dark pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb align-items-center">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home me-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb End-->

<!--Contacts & Forms Start-->
<section class="contact-form">
    <div class="container">
        <div class="row g-0 align-items-center">
            <div class="col-lg-5">
                <div class="pq-bg-dark pq-contact-form-p">
                    <div class="pq-section pq-style-1 text-left">
                        <h5 class="pq-section-title pq-text-white" id="contacts" data-high_text="Contacts" data-title_text="Our Contacts" data-rough_color="#fd4a18" data-rough_type="underline">Contact
                            Information</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pq-icon-box pq-style-5">

                                    <div class="pq-icon-box-content">
                                        <h4 class="pq-text-white">Location</h4>
                                        <p class="pq-text-white mb-0">
                                            <b>Dinu Creations</b> <br>
                                            77/4, Sri Soratha Mawatha,


                                            Gangodawila, <br> Nugegoda, Sri Lanka.
                                        </p>
                                    </div>
                                </div>
                                <div class="pq-icon-box pq-style-5">

                                    <div class="pq-icon-box-content">
                                        <h4 class="pq-text-white">Phone
                                            Number</h4>
                                        <p class="pq-text-white mb-0">
                                            +94 011 2802 330 / +94 076
                                            8024 075</p>

                                        <p class="pq-text-white mb-0">
                                            +94 071 2935 829 </p>

                                    </div>
                                </div>
                                <div class="pq-icon-box pq-style-5">

                                    <div class="pq-icon-box-content">
                                        <h4 class="pq-text-white">E-Mail
                                            Address</h4>
                                        <p class="pq-text-white mb-0">dinucreation7@gmail.com</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-4 mt-lg-0">
                <div class="form-div">
                    <div class="pq-section pq-style-1 text-left">
                        <h5 class="pq-section-title" id="quote" data-high_text="Quote" data-title_text="Request A Quote" data-rough_color="#fd4a18" data-rough_type="underline">Request A
                            Quote</h5>
                        <p class="pq-section-description">Have a question or inquiry? Feel free to reach out to us by filling out the contact form below. Our team will get back to you as soon as possible. We appreciate your interest and look forward to assisting you.</p>
                    </div>
                    <form action="process_form.php" method="post" class="pq-contactform pq-applyform" novalidate>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="name" id="first-name" class="name-field" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="email" name="email" id="e-mail" class="e-mail-field" placeholder="Email" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="phone" id="phone-number" class="phone-number-field" placeholder="Cell Phone" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="subject" id="subject" class="subject-field" placeholder="Subject" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" id="message" rows="5" cols="10" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="pq-button form-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    // Check if a status parameter is set in the URL
                    if (isset($_GET['status'])) {
                        $status = $_GET['status'];

                        // Display a message based on the status parameter
                        if ($status === "success") {
                            echo "<p>Thank you! Your message has been sent.</p>";
                        } elseif ($status === "error") {
                            echo "<p>Oops! Something went wrong and we couldn't send your message. Please try again later.</p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contacts & Forms End-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.305994673863!2d79.90156349678955!3d6.8538779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b2537b7b59f%3A0x19a794686a5834ba!2sDinu%20Creations!5e0!3m2!1sen!2slk!4v1705132053249!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<script type="text/javascript">
    var d = document.getElementById("contact");

    d.className += " current-menu-item";
</script>




<?php include 'inc/footer.php'; ?>