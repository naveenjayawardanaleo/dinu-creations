<?php include 'inc/header.php'; ?>



<section class="contact-page-section">
    <div class="auto-container">


        <div class="contact-form-inner">
            <div class="sec-title centred">
                <h2>Let’s Start a Conversation Today!</h2>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <div class="form-inner">
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label for="fullName">Full Name (Reference #):</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name and reference number">
                    </div>

                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" id="age" placeholder="Enter your age">
                    </div>

                    <div class="form-group">
                        <label for="howKnow">How did you come to know us? Who referred you to us?</label>
                        <input type="text" class="form-control" id="howKnow" placeholder="Please provide details">
                    </div>

                    <div class="form-group">
                        <label for="telephone">Telephone (WhatsApp/Viber):</label>
                        <input type="tel" class="form-control" id="telephone" placeholder="Enter your telephone number">
                    </div>

                    <div class="form-group">
                        <label for="education">Educational Qualifications:</label>
                        <select class="form-control" id="education">
                            <option>Grade 12</option>
                            <option>Certificate</option>
                            <option>Diploma</option>
                            <option>Degree</option>
                            <option>Masters</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="workExperience">Work Experiences:</label>
                        <textarea class="form-control" id="workExperience" placeholder="Briefly describe your work experiences"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="maritalStatus">Marital Status:</label>
                        <select class="form-control" id="maritalStatus">
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <!-- More fields can be added here as per your requirements -->

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>