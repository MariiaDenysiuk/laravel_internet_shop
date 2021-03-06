@extends('layouts.master')
@section('title')
    Laravel shopping cart
@endsection
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper single-page">

    <section class="fw-section bg-gray padding-top-3x">

        <!-- Page Navigation -->
        <a href="#" class="page-nav page-prev">
        <span class="page-preview">
          <img src="img/pager/01.jpg" alt="Page">
        </span>
            &mdash; Prev
        </a>
        <a href="#" class="page-nav page-next">
        <span class="page-preview">
          <img src="img/pager/02.jpg" alt="Page">
        </span>
            Next &mdash;
        </a>
        <div class="container padding-top">

            <!-- Product Gallery -->
            <div class="product-gallery">
                <!-- Preview -->
                <ul class="product-gallery-preview">
                    <li id="preview01"><img src="{{asset($singlePage->imagePath)}}" alt="Product"></li>
                    <li id="preview02" class="current"><img src="{{asset($singlePage->imagePath1)}}" alt="Product"></li>
                    <li id="preview03"><img src="{{asset($singlePage->imagePath2)}}" alt="Product"></li>
                </ul><!-- .product-gallery-preview -->
                <!-- Thumblist -->
                <ul class="product-gallery-thumblist">
                    <li><a href="#preview01">
                            <img src="{{asset($singlePage->imagePath)}}" alt="Product">
                        </a></li>
                    <li class="active"><a href="#preview02">
                            <img src="{{asset($singlePage->imagePath1)}}" alt="Product">
                        </a></li>
                    <li><a href="#preview03">
                            <img src="{{asset($singlePage->imagePath2)}}" alt="Product">
                        </a></li>
                </ul><!-- .product-gallery-thumblist -->
            </div><!-- .product-gallery -->
        </div><!-- .container -->
    </section><!-- .fw-section.bg-gray -->

    <!-- Product Info -->
    <section class="fw-section bg-gray padding-bottom-3x">
        <div class="container">
            <div class="product-info padding-top-2x text-center">
                <h1 class="h2 space-bottom-half">{{$singlePage->title}}</h1>
                <h2>${{$singlePage->price}}</h2>
                <p class="text-sm text-gray">Quisque rutrum eu sapien in viverra. Quisque id consectetur tellus. Etiam in lacus ut lorem vehicula vehicula non et felis. Integer quis solis.</p>
                <div class="product-meta">
                    <div class="product-sku">
                        <strong>SKU: </strong>
                        <span>146950023</span>
                    </div>
                    <div class="product-category">
                        <strong>Category: </strong>
                        <a href="#">Furniture</a>
                    </div>
                    <span class="product-rating text-warning">
              <i class="material-icons star"></i>
              <i class="material-icons star"></i>
              <i class="material-icons star"></i>
              <i class="material-icons star"></i>
              <i class="material-icons star_border"></i>
            </span>
                </div><!-- .product-meta -->
                <div class="product-tools shop-item cart-block">
                    <input type="hidden" class="item-id price_hidden" value="{{$singlePage->id}}">
                    <input type="hidden" class='absolute-path' value="{{asset('/')}}">
                    <div class="count-input">
                        <a class="incr-btn-single" data-action="decrease" href="#">–</a>
                        <input class="quantity numb" type="text" value="1">
                        <a class="incr-btn-single" data-action="increase" href="#">+</a>
                    </div><!-- .count-input -->
                    <div class="form-element">
                        <select class="form-control form-control-sm color-select">
                            <option value="blue" data-image="preview02">Blue</option>
                            <option value="green" data-image="preview01">Green</option>
                            <option value="red" data-image="preview03">Red</option>
                            <option value="yellow" data-image="preview04">Yellow</option>
                        </select>
                    </div><!-- .form-element -->
                    <a href="#" class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                    </a><!-- .add-to-cart -->
                </div><!-- .product-tools -->
                <div class="product-share">
                    <span>Share this product: </span>
                    <div class="social-bar">
                        <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                            <i class="socicon-instagram"></i>
                        </a>
                    </div>
                </div><!-- .product-share -->
            </div><!-- .product-info -->
        </div><!-- .container -->
    </section><!-- .fw-section.bg-gray -->

    <!-- Product Tabs -->
    <section class="container padding-top-2x">
        <!-- Nav Tabs -->
        <ul class="nav-tabs text-center" role="tablist">
            <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
            <li><a href="#additional" role="tab" data-toggle="tab">Additional Info</a></li>
            <li><a href="#reviews" role="tab" data-toggle="tab">Reviews <sup>3</sup></a></li>
        </ul><!-- .nav-tabs -->
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane transition fade in active" id="description">
                <div class="row space-top">
                    <div class="col-md-6 space-bottom">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://player.vimeo.com/video/105829213?color=77cde3&title=0&byline=0&portrait=0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>{{$singlePage->description}}</p>
                    </div>
                </div>
            </div><!-- .tab-pane -->
            <div role="tabpanel" class="tab-pane transition fade" id="additional">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table-no-border">
                            <tr>
                                <th>Weight</th>
                                <td>{{$singlePage->weight}}</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <td>{{$singlePage->dimensions}}</td>
                            </tr>
                            <tr>
                                <th>Materials</th>
                                <td>{{$singlePage->maerials}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table-no-border">
                            <tr>
                                <th>Colors</th>
                                <td>Blue, Creme, Orange, Red</td>
                            </tr>
                            <tr>
                                <th>Manufacturer</th>
                                <td>Norway</td>
                            </tr>
                            <tr>
                                <th>Other Info</th>
                                <td>Repellendus ea laudantium pariatur eum.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div><!-- .tab-pane -->
            <div role="tabpanel" class="tab-pane transition fade" id="reviews">
                <!-- Review -->
                <div class="review">
                    <div class="review-author-ava">
                        <img src="img/shop/reviews/01.jpg" alt="Review Author">
                    </div>
                    <div class="review-body">
                        <div class="review-meta">
                            <div class="column">
                                <h4 class="review-title">Very stylish. Great Deal!</h4>
                            </div>
                            <div class="column">
                  <span class="product-rating text-warning">
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                  </span>
                            </div>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        <cite>Jessie James</cite>
                    </div>
                </div><!-- .review -->
                <!-- Review -->
                <div class="review">
                    <div class="review-author-ava">
                        <img src="img/shop/reviews/02.jpg" alt="Review Author">
                    </div>
                    <div class="review-body">
                        <div class="review-meta">
                            <div class="column">
                                <h4 class="review-title">Nice nordic design, afordable price.</h4>
                            </div>
                            <div class="column">
                  <span class="product-rating text-warning">
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star_border"></i>
                  </span>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio. Possimus similique eligendi explicabo, dolore, beatae sequi.</p>
                        <cite>Susanna Davis</cite>
                    </div>
                </div><!-- .review -->
                <!-- Review -->
                <div class="review">
                    <div class="review-author-ava">
                        <img src="img/shop/reviews/03.jpg" alt="Review Author">
                    </div>
                    <div class="review-body">
                        <div class="review-meta">
                            <div class="column">
                                <h4 class="review-title">Godd value for your money.</h4>
                            </div>
                            <div class="column">
                  <span class="product-rating text-warning">
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star"></i>
                    <i class="material-icons star_border"></i>
                  </span>
                            </div>
                        </div>
                        <p>Anuo ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        <cite>Donald Murphy</cite>
                    </div>
                </div><!-- .review -->
                <!-- Reviview Form -->
                <h4 class="padding-top">Leave a review</h4>
                <form method="post" class="row padding-top">
                    <div class="col-sm-4">
                        <div class="form-element">
                            <input type="text" class="form-control" placeholder="Name*" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-element">
                            <input type="email" class="form-control" placeholder="Email*" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-element form-select">
                            <select class="form-control">
                                <option>5 stars</option>
                                <option>4 stars</option>
                                <option>3 stars</option>
                                <option>2 stars</option>
                                <option>1 star</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-element">
                            <textarea rows="8" class="form-control" placeholder="Review*" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-lg-offset-9 col-md-offset-8 col-sm-offset-6">
                                <button type="submit" class="btn btn-block btn-primary waves-effect waves-light space-top-none space-bottom-none">Leave Review</button>
                            </div>
                        </div>
                    </div>
                </form><!-- .row -->
            </div><!-- .tab-pane -->
        </div><!-- .tab-content -->
    </section><!-- .container -->

    <!-- Related Products -->
    <section class="container padding-top padding-bottom">
        <hr>
        <h3 class="padding-top">You May Also Like</h3>
        <div class="row padding-top">
            @foreach($products_cat as $product_cat)
            <div class="col-lg-3 col-sm-6">
                <div class="shop-item">
                    <div class="shop-thumbnail">
                        <a href="{{action('ProductController@getSinglePage',['id'=>$product_cat->id, 'category'=>$product_cat->category_id])}}" class="item-link"></a>
                        <img src="{{asset($product_cat->imagePath)}}" alt="Shop item">
                        <div class="shop-item-tools">
                            <input type="hidden" class="item-id price_hidden" value="{{$product_cat->id}}">
                            <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                <i class="material-icons favorite_border"></i>
                            </a>
                            <a href="#" class="add-to-cart">
                                <em>Add to Cart</em>
                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="shop-item-details">
                        <h3 class="shop-item-title"><a href="#">{{$product_cat->title}}</a></h3>
                        <span class="shop-item-price">
                ${{$product_cat->price}}
              </span>
                    </div>
                </div><!-- .shop-item -->
            </div><!-- .col-lg-3.col-sm-6 -->
            @endforeach

        </div><!-- .row -->
    </section><!-- .container -->
</div><!-- .page-wrapper -->
@endsection
