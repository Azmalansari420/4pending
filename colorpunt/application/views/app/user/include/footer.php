<div class="toaster"></div>


<!-- how to play -->
<div class="modal fade" id="exampleModalLong">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">How to Play</h5>
                <button class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>1 minutes 1 issue, 45 seconds to order, 15 seconds waiting for the draw. It opens all day. The total number of trade is 1440 issues.<br></p>
                <p>If you spend 100 to trade, after deducting 2 service fee, your contract amount is 98:</p>

                <p>1.<strong style="color:#17B15E;">Select green:</strong> if the result shows 1,3,7,9 you will get (98*2) 196;If the result shows 5, you will get (98*1.5) 147</p>

                <p>2.<strong style="color:#D23838;">Select red:</strong> if the result shows 2,4,6,8 you will get (98*2) 196;If the result shows 0, you will get (98*1.5) 147</p>

                <p>3.<strong style="color:#9B48DB;">Select violet:</strong> if the result shows 0 or 5, you will get (98*4.5) 441</p>

                <p>4. Select number:if the result is the same as the number you selected, you will get (98*9) 882</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="<?=base_url() ?>assets/js/jquery.js"></script>
<script src="<?=base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?=base_url() ?>assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?=base_url() ?>assets/js/dz.carousel.js"></script>
<script src="<?=base_url() ?>assets/js/settings.js"></script>
<script src="<?=base_url() ?>assets/js/custom.js"></script>

<script>

    $(".select-amount").click(function(event) {
        $(".select-amount").removeClass("selected");
        $(this).addClass("selected");
        final_amount = amount = $(this).data('amt');
        $('#bet-amount').val(amount);
    }); 

function toaster(message, type) 
   {
     var toaster = $('.toaster');
     toaster.html(message);
     toaster.addClass(type);
     toaster.fadeIn(500);
     setTimeout(function() {
       toaster.fadeOut(500);
     }, 3000);
   }






 


/*webview*/

  var href = '';
    var full_url_new = '';
    var full_url_old = '';

    // Handle all anchor link clicks
    $(document).on("click", "a", function (e) {
        href = $(this).attr('href');
        var exemptClasses = ['scroll-top', 'back-btn'];
        var exemptHrefs = ['javascript:void(0);', '#profile', '#home', '#!', '#'];

        if (!exemptClasses.includes($(this).attr('class')) && !exemptHrefs.includes(href)) {
            e.preventDefault();
            get_full_url();
            var obj = { Title: '', Url: full_url_new };
            // history.pushState(obj, obj.Title, obj.Url);
            change_page();
        }
    });

    // Handle links with .link class using data-href
    $(document).on("click", ".link", function (e) {
        e.preventDefault();
        href = $(this).data('href');
        get_full_url();
        var obj = { Title: '', Url: full_url_new };
        // history.pushState(obj, obj.Title, obj.Url);
        change_page();
    });

    // Handle browser history navigation
    $(window).on('popstate pushState', function () {
        change_page();
    });

    // Mobile menu open/close
    var modalNav = $(".menu-mobile-popup");

    $(document).on("click", ".btn-sidebar, .btn-st2", function () {
        modalNav.addClass("modal-menu--open");
    });

    $(document).on("click", ".modal-menu__backdrop", function () {
        modalNav.removeClass("modal-menu--open");
    });

    // Get full URL with device_id and firebase_token
    function get_full_url() {
        if (!href || href === '#') return false;

        var full_url = href;

        // Get device_id and firebase_token from current URL
        var current_url = window.location.href;
        var device_id = current_url.includes('device_id=') ? current_url.split('device_id=')[1].split('&')[0] : '';
        var firebase_token = current_url.split('firebase_token=')[1];

        // Append device_id if not already in the link
        if (!href.includes('device_id')) {
            full_url += href.includes('?') ? '&' : '?';
            full_url += 'device_id=' + device_id;
        }

        // Prepend base URL if needed
        if (!full_url.includes("<?=base_url('api/') ?>")) {
            var base = "<?=base_url(user_app) ?>";
            full_url = full_url.includes(base) ? base + full_url.split(base)[1] : base + full_url;
        }

        // Add firebase_token to the URL
        full_url_new = full_url + '&firebase_token=' + firebase_token;
    }

    // Change page by updating window location
    function change_page() {
        window.location.href = full_url_new;
    }

   
   
   
   /*refresh*/
   document.addEventListener('touchstart', handleTouchStart, false);        
   document.addEventListener('touchmove', handleTouchMove, false);
   
   var xDown = null;                                                        
   var yDown = null;
   
   function getTouches(evt) {
   return evt.touches ||             // browser API
       evt.originalEvent.touches; // jQuery
   }                                                     
                                                                       
   function handleTouchStart(evt) {
   const firstTouch = getTouches(evt)[0];                                      
   xDown = firstTouch.clientX;                                      
   yDown = firstTouch.clientY;                                      
   }; 
   function top_0_refrash()
   {
   var top = document.documentElement.scrollTop || document.body.scrollTop;
   if(top==0)
   {
    $(".preload").show(); 
    location.reload();
   }
   }                                               
                                                                       
   function handleTouchMove(evt) {
   if ( ! xDown || ! yDown ) {
      return;
   }
   
   var xUp = evt.touches[0].clientX;                                    
   var yUp = evt.touches[0].clientY;
   
   var xDiff = xDown - xUp;
   var yDiff = yDown - yUp;
                                                                       
   if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
      if ( xDiff > 0 ) {
          /* right swipe */ 
      } else {
          /* left swipe */
      }                       
   } else {
      if ( yDiff > 0 ) {
      } else { 
          /* up swipe */
          top_0_refrash();
      }                                                                 
   }
   /* reset values */
   xDown = null;
   yDown = null;                                             
   };



</script>

<!-- webview end -->




</body>
</html>