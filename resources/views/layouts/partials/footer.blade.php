<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-info text-center">
                    <img src="img/logo.jpg" width="50" alt="iemalteria" class="img-fluid img-thumbnail">
                    <p > "{!! $settings['LEMA_INSTITUCIONAL'] ?? '' !!}"</p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Enlaces Útiles</h4>
                    <ul>
                        <li> <a href="#">Home</a></li>
                        <li> <a href="#">About us</a></li>
                        {{-- @guest
                            <li> <a href="{{ route('login') }}">Login</a></li>
                        @endguest
                        @auth
                            <li> <a href="{{ route('admin.home') }}">Admin Panel</a></li>
                        @endauth --}}
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contáctenos</h4>
                    <p>
                        <strong>Dirección:</strong> {!! $settings['DIRECCION_SEDE_PRINCIPAL'] ?? '' !!} <br>
                        <strong>Teléfono:</strong> {{ $settings['CONTACTO_TELEFONO'] }} <br>
                        <strong>Email:</strong> {{ $settings['CONTACTO_EMAIL'] }} <br>
                    </p>

                    <div class="social-links">
                        <a href=" {{ $settings['INSTAGRAM_URL'] ?? '' }} "class="instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href=" {{ $settings['GOOGLE_URL'] ?? '' }} " class="google">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href=" {{ $settings['FACEBOOK_URL'] ?? '' }} " class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="text-center">
                <div class="copyright pt-4">
                    &copy; <strong>Institución Educativa Maltería</strong>, todos los derechos reservados, 2023
                    <div class="credits">
                        Diseñado por <a href="https://github.com/juanjo00sg">JJSG</a> & <a
                            href="https://www.autonoma.edu.co/">UAM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
