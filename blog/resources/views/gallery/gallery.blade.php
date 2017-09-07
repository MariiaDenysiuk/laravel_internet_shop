@extends('layouts.master')

@section('title')
   Gallery
@endsection
@section('content')
<div class="page-wrapper">

    <!-- Page Title -->
    <section class="container-fluid padding-top-3x">
        <h1 class="space-top-half tablet-center">Gallery</h1>
    </section><!-- .container-fluid -->

    <!-- Filters Bar -->
    <section class="container-fluid padding-top">
        <div class="filters-bar tablet-center space-top-half">
            <!-- Nav Filters -->
            <ul class="nav-filters">
                <li class="active"><a href="#" data-filter="*">All</a> <sup>9</sup></li>
                <li><a href="#" data-filter=".devices">Devices</a> <sup>2</sup></li>
                <li><a href="#" data-filter=".packaging">Packaging</a> <sup>2</sup></li>
                <li><a href="#" data-filter=".fashion">Fashion</a> <sup>3</sup></li>
                <li><a href="#" data-filter=".paper">Paper &amp; Books</a> <sup>2</sup></li>
            </ul><!-- .nav-filters -->
        </div><!-- .filters-bar -->
    </section><!-- .container -->

    <!-- Gallery Grid Full Width With Gap-->
    <section class="container-fluid padding-top-half padding-bottom-3x">
        <div class="isotope-grid grid-no-gap col-3 filter-grid">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>

            <!-- Gallery Item -->
            <div class="grid-item devices">
                <a href="images/gallery/01.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th01.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>Devices Mockup</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item fashion">
                <a href="images/gallery/02.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th02.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>Bart Reed Outware</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item packaging">
                <a href="images/gallery/03.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th03.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>Brand Box</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item paper">
                <a href="images/gallery/04.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th04.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>Flying Books</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item fashion">
                <a href="images/gallery/05.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th05.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>Design Socks</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item packaging">
                <a href="images/gallery/06.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th06.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>Tote Bag</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item devices">
                <a href="images/gallery/07.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th07.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>iPhone Mockup</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item paper">
                <a href="images/gallery/08.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th08.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>Leaflet Design</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->

            <!-- Gallery Item -->
            <div class="grid-item fashion">
                <a href="images/gallery/09.jpg" class="gallery-item">
                    <img src="images/gallery/thumbs/th09.jpg" alt="Gallery">
                    <span class="gallery-caption">
              <h3>T-Shirt Mockup</h3>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </span>
                </a>
            </div><!-- .grid-item -->
        </div><!-- .isotope-grid -->
    </section><!-- .container-fluid -->


</div><!-- .page-wrapper -->
@endsection('content')