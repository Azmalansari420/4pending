<?php include('header.php'); ?>
    <!-- header style end -->

    <!-- Bread-Crumb style -->

    <!-- bread crumb area -->
    <div class="rts-breadcrumb-area rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <div class="pagination-wrapper">
                            <a href="index">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="">Admission</a>
                        </div>
                        <!-- breadcrumb pagination area -->
                        <h2 class="title">Admission</h2>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- Bread-Crumb style End -->

    <!-- course area start -->
    <section class="rts-contact-area rts-section-gap inner">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg" alt="">Admission Form</p>
                <h2 class="section-title">Apply Now & Start Your Journey With Us</h2>
            </div>
            <div class="section-inner">
                <div class="row justify-content-center">
                   
                    <div class="col-lg-12">
                        <form action="#" class="contact-form">
    <div class="form-inner">

        <div class="single-input">
            <label>Name</label>
            <input type="text" name="Name" placeholder="Your Name" required>
        </div>

        <div class="single-input">
            <label>Mobile</label>
            <input type="text" name="Number" placeholder="Phone Number" required>
        </div>

        <div class="single-input">
            <label>Email</label>
            <input type="email" name="Email" placeholder="Your Email" required>
        </div>

        <div class="single-input">
            <label>Date of Birth</label>
            <input type="date" name="dob" required>
        </div>

        <div class="single-input">
            <label>Gender</label>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>

        <div class="single-input">
            <label>Course</label>
            <select name="course" required>
                <option value="">Select Class</option>
                <option value="nursery">Nursery</option>
                <option value="lkg">LKG</option>
                <option value="ukg">UKG</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
            </select>
        </div>

        <div class="single-input">
            <label>Address</label>
            <input type="text" name="address" placeholder="Your Address" required>
        </div>

        <div class="single-input">
            <label>City</label>
            <input type="text" name="city" placeholder="City" required>
        </div>

        <div class="single-input">
            <label>State</label>
            <input type="text" name="state" placeholder="State" required>
        </div>

        <div class="single-input">
            <label>Pincode</label>
            <input type="text" name="pincode" placeholder="Pincode" required>
        </div>

        <div class="single-input">
            <label>Previous Qualification</label>
            <input type="text" name="qualification" placeholder="Last Qualification" required>
        </div>

        <div class="single-input">
            <label>Upload Documents</label>
            <input type="file" name="documents">
        </div>

        <div class="single-input message">
            <textarea name="Message" placeholder="Message" required></textarea>
        </div>

        <div class="form-btn">
            <button type="submit" class="rts-btn btn-primary">Apply Now</button>
        </div>

    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

    <!-- footer call to action area start -->

 <?php include('footer.php'); ?>