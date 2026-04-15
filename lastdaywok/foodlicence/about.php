<?php include('header.php'); ?>
<style>
    
/* About Box */
.about-box {
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border: 1px solid #eee;
}

/* Text */
.about-box p {
    font-size: 15px;
    color: #444;
    line-height: 1.7;
    margin-bottom: 15px;
}

/* Headings */
.about-box h2 {
    font-size: 20px;
    font-weight: 600;
    color: #1c5482;
    margin-top: 20px;
    margin-bottom: 10px;
}

/* List */
.about-list {
    list-style: none;
    padding-left: 0;
}

.about-list li {
    font-size: 14px;
    color: #555;
    margin-bottom: 8px;
}

/* Disclaimer */
.about-disclaimer {
    background: #fff3f3;
    padding: 15px;
    border-left: 4px solid red;
    border-radius: 8px;
    font-size: 14px;
    color: #333;
    margin: 20px 0;
}

/* Responsive */
@media (max-width: 768px) {
    .about-box {
        padding: 20px;
    }

    .about-box h2 {
        font-size: 18px;
    }
}
</style>
<div class="container-fluid header hero-bg p-0 pb-5">

    <!-- Heading -->
    <h1 class="text-uppercase text-center fs-3 p-4">About Invenix India</h1>

    <div class="row justify-content-center">
        <div class="col-lg-10 wow fadeIn" data-wow-delay="0.1s">

            <div class="about-box">

                <!-- Intro -->
                <p>
                    Invenix India is a private consultancy firm offering professional assistance for FSSAI
                    registration, licensing, renewal, modification, and food business compliance services across India.
                </p>

                <p>
                    We simplify complex government procedures by guiding business owners through documentation,
                    filing, and compliance requirements.
                </p>

                <!-- Disclaimer -->
                <div class="about-disclaimer">
                    ⚠️ <strong>Important:</strong> We are not associated with FSSAI or any government authority. We do not issue
                    licenses. We provide consultancy and application assistance services only.
                </div>

                <!-- Mission -->
                <h2>Our Mission</h2>
                <p>
                    To make compliance simple, transparent, and accessible for every food business in India.
                </p>

                <!-- Why Choose -->
                <h2>Why Choose Us?</h2>
                <ul class="about-list">
                    <li>✔ Expert consultants</li>
                    <li>✔ Transparent pricing</li>
                    <li>✔ Pan-India service</li>
                    <li>✔ Dedicated support</li>
                    <li>✔ Timely updates</li>
                    <li>✔ Compliance-focused approach</li>
                </ul>

            </div>

        </div>
    </div>

</div>

<?php include('footer.php'); ?>