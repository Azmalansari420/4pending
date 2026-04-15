(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: false,
        animateOut: 'fadeOutLeft',
        items: 1,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });


})(jQuery);

function selectState() {
    const state = document.getElementById('office-state').value;
    // Populate the district dropdown based on the selected state
    const districtSelect = document.getElementById('office-district');
    districtSelect.innerHTML = `<option value="">Select District</option>`;
    // Replace the below array with actual data as required
    const districts = {
        "Assam": ["Guwahati", "Dibrugarh", "Jorhat"],
        "Delhi": ["Central Delhi", "East Delhi", "New Delhi"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara"],
        "Jammu_and_Kashmir": ["Jammu", "Srinagar", "Leh"],
        "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode"]
    };
    if (districts[state]) {
        districts[state].forEach(district => {
            const option = document.createElement('option');
            option.value = district;
            option.textContent = district;
            districtSelect.appendChild(option);
        });
    }
}

function selectOrganisationType() {
    const orgType = document.getElementById('type_of_organisation').value;
    const nature = document.getElementById('nature');
    if (orgType) {
        nature.style.display = 'block';
    } else {
        nature.style.display = 'none';
    }
}

document.getElementById('main-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Collect all form data
    const formData = new FormData(this);

    // For demonstration, log the form data to console
    for (let [name, value] of formData.entries()) {
        console.log(`${name}: ${value}`);
    }

    alert('Form submitted successfully! (This is a demo alert, replace with actual submission)');
});