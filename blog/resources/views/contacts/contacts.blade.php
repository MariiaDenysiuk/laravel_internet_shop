@extends('layouts.master')

@section('title')
    Contacts
@endsection
@section('content')
<div class="page-wrapper">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5DLwPPVAz88_k0yO2nmFe7T9k1urQs84"></script>
    <!-- Navbar -->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page. -->

    <!-- Google Map -->
    <!-- Data API:
         data-height="500" height of the map in pixels
         data-address="Your address" string
         data-zoom="number" to control map zoom when loaded
         data-disable-controls="false/true" enable/disable map controls like pan, zoom, etc.
         data-scrollwheel="true/false" enable/disable mouse scroll wheel zoom
         data-marker="path_to_your_image" path to custom marker image
         data-marker-title=" Your title" appears on marker hover
         data-styles="[array]" you can adjust the look and feel of your map. Recommend to use https://snazzymaps.com
     -->
    <div class="google-map"
         data-height="480"
         data-address="New York, USA"
         data-zoom="6"
         data-disable-controls="false"
         data-scrollwheel="false"
         data-marker="img/map-marker.png"
         data-marker-title="A-Shop Office"
         data-styles='[{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}]'
    ></div><!-- .google-map -->

    <!-- Container -->
    <section class="container space-top-3x">
        <h1>Contacts</h1>
        <div class="row padding-top">
            <div class="col-sm-5 padding-bottom-2x">
                <ul class="list-icon">
                    <li>
                        <i class="material-icons location_on"></i>
                        45 Park Avenue, Apt. 303<br>New York, NY 10016, USA
                    </li>
                    <li>
                        <i class="material-icons phone"></i>
                        001 (917) 555-4836
                    </li>
                    <li>
                        <i class="material-icons phone_iphone"></i>
                        001 (800) 333-6578
                    </li>
                    <li>
                        <i class="material-icons email"></i>
                        <a href="mailto:info@m-store.com">info@m-store.com</a>
                    </li>
                    <li>
                        <i class="socicon-skype"></i>
                        <a href="#">skype_id</a>
                    </li>
                </ul><!-- .list-icon -->
                <p>Working hours: <span class="text-gray">10am - 8pm, Mn - St</span></p>
                <span class="display-inline" style="margin-bottom: 6px;">Social accounts: &nbsp;&nbsp;</span>
                <div class="social-bar display-inline">
                    <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="socicon-facebook"></i>
                    </a>
                    <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                        <i class="socicon-googleplus"></i>
                    </a>
                    <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="socicon-twitter"></i>
                    </a>
                    <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                        <i class="socicon-instagram"></i>
                    </a>
                </div><!-- .social-bar -->
            </div><!-- .col-sm-5 -->
            <div class="col-sm-7 padding-bottom-2x">
                <form method="post" class="ajax-form">
                    <div class="contact-form container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-element">
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-element">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
                            </div>
                        </div><!-- .row -->
                        <div class="form-element">
                            <textarea rows="6" class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light space-top-none">Send Message</button>
                    </div>
                    <div class="status-message"></div>
                </form>
            </div><!-- .col-sm-7 -->
        </div><!-- .row -->
    </section><!-- .container -->
</div><!-- .page-wrapper -->
@endsection