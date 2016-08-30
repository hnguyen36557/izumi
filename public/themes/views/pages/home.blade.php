@extends('layouts.frontend')
@section('title', 'Thời Trang Trẻ')
@section('content')

    <div class="container">
        <div class="row">
            <div class="std">
                <div class="best-pro col-lg-12">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Best sellers</h2>
                        </div>
                        <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                                @foreach($product as $item)
                                <!-- Item -->
                                <div class="item">
                                    <div class="col-item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="new-label new-top-left">New</div>
                                                <div class="item-img-info"> <a href="product_detail.php"  title="Sample Product" class="product-image"> <img src="{{ asset('public/uploads/images/'.$item->image) }}" alt="Sample Product"> </a>
                                                    <div class="item-box-hover">
                                                        <div class="box-inner">
                                                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"> <span> Quick View</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a href="product_detail.php" title="Sample Product">{{ $item->name }} </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price">{{ $item->price }}</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                            <button  title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                            <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-pro col-lg-12">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Featured Products</h2>
                        </div>
                        <div id="featured-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                                @foreach($products as $items)
                                <!-- Item -->
                                <div class="item">
                                    <div class="col-item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="new-label new-top-left">New</div>
                                                <div class="item-img-info"> <a href="product_detail.php"  title="Sample Product" class="product-image"> <img src="{{ asset('public/uploads/images/'.$items->image) }}" alt="Sample Product"> </a>
                                                    <div class="item-box-hover">
                                                        <div class="box-inner">
                                                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a href="grid.php"  title="Sample Product"> {{ $items->name }} </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">{{ $items->price }}</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                            <button  title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                            <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection