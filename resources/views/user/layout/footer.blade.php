@php
    $setting = \App\Models\SettingsModel::first();
@endphp

<footer>
    <!-- Footer Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="footer-top-cap text-center">
                            {{-- <img src="{{ asset('user/assets/img/logo/logo2_footer.png') }}" alt=""> --}}
                            <span><a href="{{ $setting->website ?? '' }}">dipeshmishra.in</a></span>
                            <p>Entrepreneur | Youth Institution Builder | Empowerment Leader</p>
                            <p>Building India’s Youth Economy</p>
                        </div>
                        <div class="footer-social text-center my-1" style="float:none">
                            {{-- <a>Stay Connected</a> --}}
                            <a href="{{ $setting->twitter ?? '' }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $setting->facebook ?? '' }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $setting->website ?? ''}}" target="_blank"><i class="fas fa-globe"></i></a>
                            <a href="{{ $setting->instagram ?? '' }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $setting->youtube ?? ''}}" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p class="text-white">
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                iYouth Pvt. Ltd | All rights reserved | Developed
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                by <a href="https://www.raysitworld.com" target="_blank">Rays It & Design World</a>
                            </p>
                        </div>
                    </div>

                    {{-- <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a>Stay Connected</a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#">
        <i class="fas fa-level-up-alt"></i>
    </a>
</div>

<!-- JS here -->

<!-- Modernizr -->
<script src="{{ asset('user/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('user/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>

<!-- Jquery Mobile Menu -->
<script src="{{ asset('user/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Owl-Carousel, Slick -->
<script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user/assets/js/slick.min.js') }}"></script>

<!-- Animation -->
<script src="{{ asset('user/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('user/assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Nice-select, sticky -->
<script src="{{ asset('user/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.sticky.js') }}"></script>

<!-- Contact JS -->
<script src="{{ asset('user/assets/js/contact.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('user/assets/js/mail-script.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('user/assets/js/plugins.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>

{{-- AOS(animation On Scroll ) JS --}}
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // animation speed
        easing: 'ease-in-out',
        once: true // animation only once
    });
</script>
{{-- ------------ AOS JS End ------------------------ --}}
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/917987852989" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
{{-- -----------typing effect -------------- --}}

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const texts = [
            "Visionary Entrepreneur | Youth Institution Builder",
            "Founder & CEO – iYouth Pvt. Ltd.",
            "Founder & President – Chhattisgarh Youth Federation",
            "Founder – Chhattisgarh Youth Federation",
            "Founder & President – Chhattisgarh Adventure Sports Association"
        ];


        const speed = 70;
        const eraseSpeed = 40;
        const delayBetween = 1500;

        function startTypewriter(elementId) {

            let textIndex = 0;
            let charIndex = 0;
            const typewriter = document.getElementById(elementId);

            function type() {
                if (charIndex < texts[textIndex].length) {
                    typewriter.innerHTML += texts[textIndex].charAt(charIndex);
                    charIndex++;
                    setTimeout(type, speed);
                } else {
                    setTimeout(erase, delayBetween);
                }
            }

            function erase() {
                if (charIndex > 0) {
                    typewriter.innerHTML = texts[textIndex].substring(0, charIndex - 1);
                    charIndex--;
                    setTimeout(erase, eraseSpeed);
                } else {
                    textIndex++;
                    if (textIndex >= texts.length) textIndex = 0;
                    setTimeout(type, 500);
                }
            }

            type();
        }


        // Call function for multiple IDs
        startTypewriter("typewriter");


    });
</script>



</body>

</html>
