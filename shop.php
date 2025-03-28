<?php 
require('Files/header.php') ;

$products = dbSelect('products',  ' 1 ORDER BY id DESC' );

?>

<!-- Page Title-->
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Grid left sidebar</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Shop grid left sidebar</h1>
        </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4">
            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar" style="max-width: 22rem;">
                <div class="offcanvas-header align-items-center shadow-sm">
                    <h2 class="h5 mb-0">Filters</h2>
                    <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                    <!-- Categories-->
                    <div class="widget widget-categories mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">Categories</h3>
                        <div class="accordion mt-n1" id="shop-categories">
                            <!-- Shoes-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shoes" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shoes">Shoes</a></h3>
                                <div class="accordion-collapse collapse" id="shoes" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3">1,953</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Pumps &amp; High Heels</span><span class="fs-xs text-muted ms-3">247</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Ballerinas &amp; Flats</span><span class="fs-xs text-muted ms-3">156</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sandals</span><span class="fs-xs text-muted ms-3">310</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sneakers</span><span class="fs-xs text-muted ms-3">402</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Boots</span><span class="fs-xs text-muted ms-3">393</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Ankle Boots</span><span class="fs-xs text-muted ms-3">50</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Loafers</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Slip-on</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Flip Flops</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Clogs &amp; Mules</span><span class="fs-xs text-muted ms-3">24</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Athletic Shoes</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Oxfords</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Smart Shoes</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clothing-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button" href="#clothing" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="clothing">Clothing</a></h3>
                                <div class="accordion-collapse collapse show" id="clothing" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3">2,548</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Blazers &amp; Suits</span><span class="fs-xs text-muted ms-3">235</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Blouses</span><span class="fs-xs text-muted ms-3">410</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Cardigans &amp; Jumpers</span><span class="fs-xs text-muted ms-3">107</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Dresses</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Hoodie &amp; Sweatshirts</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Jackets &amp; Coats</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Jeans</span><span class="fs-xs text-muted ms-3">215</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Lingerie</span><span class="fs-xs text-muted ms-3">150</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Maternity Wear</span><span class="fs-xs text-muted ms-3">8</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Nightwear</span><span class="fs-xs text-muted ms-3">26</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Shirts</span><span class="fs-xs text-muted ms-3">164</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Shorts</span><span class="fs-xs text-muted ms-3">147</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Socks &amp; Tights</span><span class="fs-xs text-muted ms-3">139</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sportswear</span><span class="fs-xs text-muted ms-3">65</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Swimwear</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">T-shirts &amp; Vests</span><span class="fs-xs text-muted ms-3">209</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Tops</span><span class="fs-xs text-muted ms-3">132</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Trousers</span><span class="fs-xs text-muted ms-3">105</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Underwear</span><span class="fs-xs text-muted ms-3">87</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bags-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#bags" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bags">Bags</a></h3>
                                <div class="accordion-collapse collapse" id="bags" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3">801</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Handbags</span><span class="fs-xs text-muted ms-3">238</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Backpacks</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Wallets</span><span class="fs-xs text-muted ms-3">104</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Luggage</span><span class="fs-xs text-muted ms-3">115</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Lumbar Packs</span><span class="fs-xs text-muted ms-3">17</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Duffle Bags</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Bag / Travel Accessories</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Diaper Bags</span><span class="fs-xs text-muted ms-3">5</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Lunch Bags</span><span class="fs-xs text-muted ms-3">8</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Messenger Bags</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Laptop Bags</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Briefcases</span><span class="fs-xs text-muted ms-3">45</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sport Bags</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sunglasses-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#sunglasses" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sunglasses">Sunglasses</a></h3>
                                <div class="collapse" id="sunglasses" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="fs-xs text-muted ms-3">1,842</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Sunglasses</span><span class="fs-xs text-muted ms-3">953</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Sunglasses</span><span class="fs-xs text-muted ms-3">589</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Classic Sunglasses</span><span class="fs-xs text-muted ms-3">300</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Watches-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#watches" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="watches">Watches</a></h3>
                                <div class="accordion-collapse collapse" id="watches" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="fs-xs text-muted ms-3">734</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Watches</span><span class="fs-xs text-muted ms-3">572</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Casual Watches</span><span class="fs-xs text-muted ms-3">110</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Luxury Watches</span><span class="fs-xs text-muted ms-3">34</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Watches</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Accessories-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#accessories" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="accessories">Accessories</a></h3>
                                <div class="accordion-collapse collapse" id="accessories" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="fs-xs text-muted ms-3">920</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Belts</span><span class="fs-xs text-muted ms-3">364</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Hats</span><span class="fs-xs text-muted ms-3">405</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Jewelry</span><span class="fs-xs text-muted ms-3">131</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Cosmetics</span><span class="fs-xs text-muted ms-3">20</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Price range-->
                    <div class="widget mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">Price</h3>
                        <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                            <div class="range-slider-ui"></div>
                            <div class="d-flex pb-1">
                                <div class="w-50 pe-2 me-2">
                                    <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                                        <input class="form-control range-slider-value-min" type="text">
                                    </div>
                                </div>
                                <div class="w-50 ps-2">
                                    <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                                        <input class="form-control range-slider-value-max" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filter by Brand-->
                    <div class="widget widget-filter mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">Brand</h3>
                        <div class="input-group input-group-sm mb-2">
                            <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                        </div>
                        <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="adidas">
                                    <label class="form-check-label widget-filter-item-text" for="adidas">Adidas</label>
                                </div><span class="fs-xs text-muted">425</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="ataylor">
                                    <label class="form-check-label widget-filter-item-text" for="ataylor">Ann Taylor</label>
                                </div><span class="fs-xs text-muted">15</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="armani">
                                    <label class="form-check-label widget-filter-item-text" for="armani">Armani</label>
                                </div><span class="fs-xs text-muted">18</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="banana">
                                    <label class="form-check-label widget-filter-item-text" for="banana">Banana Republic</label>
                                </div><span class="fs-xs text-muted">103</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="bilabong">
                                    <label class="form-check-label widget-filter-item-text" for="bilabong">Bilabong</label>
                                </div><span class="fs-xs text-muted">27</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="birkenstock">
                                    <label class="form-check-label widget-filter-item-text" for="birkenstock">Birkenstock</label>
                                </div><span class="fs-xs text-muted">10</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="klein">
                                    <label class="form-check-label widget-filter-item-text" for="klein">Calvin Klein</label>
                                </div><span class="fs-xs text-muted">365</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="columbia">
                                    <label class="form-check-label widget-filter-item-text" for="columbia">Columbia</label>
                                </div><span class="fs-xs text-muted">508</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="converse">
                                    <label class="form-check-label widget-filter-item-text" for="converse">Converse</label>
                                </div><span class="fs-xs text-muted">176</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dockers">
                                    <label class="form-check-label widget-filter-item-text" for="dockers">Dockers</label>
                                </div><span class="fs-xs text-muted">54</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fruit">
                                    <label class="form-check-label widget-filter-item-text" for="fruit">Fruit of the Loom</label>
                                </div><span class="fs-xs text-muted">739</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="hanes">
                                    <label class="form-check-label widget-filter-item-text" for="hanes">Hanes</label>
                                </div><span class="fs-xs text-muted">92</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="choo">
                                    <label class="form-check-label widget-filter-item-text" for="choo">Jimmy Choo</label>
                                </div><span class="fs-xs text-muted">17</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="levis">
                                    <label class="form-check-label widget-filter-item-text" for="levis">Levi's</label>
                                </div><span class="fs-xs text-muted">361</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="lee">
                                    <label class="form-check-label widget-filter-item-text" for="lee">Lee</label>
                                </div><span class="fs-xs text-muted">264</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wearhouse">
                                    <label class="form-check-label widget-filter-item-text" for="wearhouse">Men's Wearhouse</label>
                                </div><span class="fs-xs text-muted">75</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newbalance">
                                    <label class="form-check-label widget-filter-item-text" for="newbalance">New Balance</label>
                                </div><span class="fs-xs text-muted">218</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="nike">
                                    <label class="form-check-label widget-filter-item-text" for="nike">Nike</label>
                                </div><span class="fs-xs text-muted">810</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="navy">
                                    <label class="form-check-label widget-filter-item-text" for="navy">Old Navy</label>
                                </div><span class="fs-xs text-muted">147</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="polo">
                                    <label class="form-check-label widget-filter-item-text" for="polo">Polo Ralph Lauren</label>
                                </div><span class="fs-xs text-muted">64</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="puma">
                                    <label class="form-check-label widget-filter-item-text" for="puma">Puma</label>
                                </div><span class="fs-xs text-muted">370</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="reebok">
                                    <label class="form-check-label widget-filter-item-text" for="reebok">Reebok</label>
                                </div><span class="fs-xs text-muted">506</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="skechers">
                                    <label class="form-check-label widget-filter-item-text" for="skechers">Skechers</label>
                                </div><span class="fs-xs text-muted">209</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="hilfiger">
                                    <label class="form-check-label widget-filter-item-text" for="hilfiger">Tommy Hilfiger</label>
                                </div><span class="fs-xs text-muted">487</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="armour">
                                    <label class="form-check-label widget-filter-item-text" for="armour">Under Armour</label>
                                </div><span class="fs-xs text-muted">90</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="urban">
                                    <label class="form-check-label widget-filter-item-text" for="urban">Urban Outfitters</label>
                                </div><span class="fs-xs text-muted">152</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="vsecret">
                                    <label class="form-check-label widget-filter-item-text" for="vsecret">Victoria's Secret</label>
                                </div><span class="fs-xs text-muted">238</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wolverine">
                                    <label class="form-check-label widget-filter-item-text" for="wolverine">Wolverine</label>
                                </div><span class="fs-xs text-muted">29</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wrangler">
                                    <label class="form-check-label widget-filter-item-text" for="wrangler">Wrangler</label>
                                </div><span class="fs-xs text-muted">115</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Filter by Size-->
                    <div class="widget widget-filter mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">Size</h3>
                        <div class="input-group input-group-sm mb-2">
                            <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                        </div>
                        <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-xs">
                                    <label class="form-check-label widget-filter-item-text" for="size-xs">XS</label>
                                </div><span class="fs-xs text-muted">34</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-s">
                                    <label class="form-check-label widget-filter-item-text" for="size-s">S</label>
                                </div><span class="fs-xs text-muted">57</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-m">
                                    <label class="form-check-label widget-filter-item-text" for="size-m">M</label>
                                </div><span class="fs-xs text-muted">198</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-l">
                                    <label class="form-check-label widget-filter-item-text" for="size-l">L</label>
                                </div><span class="fs-xs text-muted">72</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-xl">
                                    <label class="form-check-label widget-filter-item-text" for="size-xl">XL</label>
                                </div><span class="fs-xs text-muted">46</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-39">
                                    <label class="form-check-label widget-filter-item-text" for="size-39">39</label>
                                </div><span class="fs-xs text-muted">112</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-40">
                                    <label class="form-check-label widget-filter-item-text" for="size-40">40</label>
                                </div><span class="fs-xs text-muted">85</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-41">
                                    <label class="form-check-label widget-filter-item-text" for="size-40">41</label>
                                </div><span class="fs-xs text-muted">210</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-42">
                                    <label class="form-check-label widget-filter-item-text" for="size-42">42</label>
                                </div><span class="fs-xs text-muted">57</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-43">
                                    <label class="form-check-label widget-filter-item-text" for="size-43">43</label>
                                </div><span class="fs-xs text-muted">30</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-44">
                                    <label class="form-check-label widget-filter-item-text" for="size-44">44</label>
                                </div><span class="fs-xs text-muted">61</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-45">
                                    <label class="form-check-label widget-filter-item-text" for="size-45">45</label>
                                </div><span class="fs-xs text-muted">23</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-46">
                                    <label class="form-check-label widget-filter-item-text" for="size-46">46</label>
                                </div><span class="fs-xs text-muted">19</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-47">
                                    <label class="form-check-label widget-filter-item-text" for="size-47">47</label>
                                </div><span class="fs-xs text-muted">15</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-48">
                                    <label class="form-check-label widget-filter-item-text" for="size-48">48</label>
                                </div><span class="fs-xs text-muted">12</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-49">
                                    <label class="form-check-label widget-filter-item-text" for="size-49">49</label>
                                </div><span class="fs-xs text-muted">8</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-50">
                                    <label class="form-check-label widget-filter-item-text" for="size-50">50</label>
                                </div><span class="fs-xs text-muted">6</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Filter by Color-->
                    <div class="widget">
                        <h3 class="widget-title">Color</h3>
                        <div class="d-flex flex-wrap">
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-blue-gray">
                                <label class="form-option-label rounded-circle" for="color-blue-gray"><span class="form-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-blue-gray">Blue-gray</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-burgundy">
                                <label class="form-option-label rounded-circle" for="color-burgundy"><span class="form-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-burgundy">Burgundy</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-teal">
                                <label class="form-option-label rounded-circle" for="color-teal"><span class="form-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-teal">Teal</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-brown">
                                <label class="form-option-label rounded-circle" for="color-brown"><span class="form-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-brown">Brown</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-coral-red">
                                <label class="form-option-label rounded-circle" for="color-coral-red"><span class="form-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-coral-red">Coral red</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-navy">
                                <label class="form-option-label rounded-circle" for="color-navy"><span class="form-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-navy">Navy</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-charcoal">
                                <label class="form-option-label rounded-circle" for="color-charcoal"><span class="form-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-charcoal">Charcoal</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-sky-blue">
                                <label class="form-option-label rounded-circle" for="color-sky-blue"><span class="form-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-sky-blue">Sky blue</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
                <div class="d-flex flex-wrap">
                    <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                        <label class="text-light opacity-75 text-nowrap fs-sm me-2 d-none d-sm-block" for="sorting">Sort by:</label>
                        <select class="form-select" id="sorting">
                            <option>Popularity</option>
                            <option>Low - Hight Price</option>
                            <option>High - Low Price</option>
                            <option>Average Rating</option>
                            <option>A - Z Order</option>
                            <option>Z - A Order</option>
                        </select><span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">of 287 products</span>
                    </div>
                </div>
                <div class="d-flex pb-3"><a class="nav-link-style nav-link-light me-3" href="#"><i class="ci-arrow-left"></i></a><span class="fs-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ms-3" href="#"><i class="ci-arrow-right"></i></a></div>
                <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2" href="#"><i class="ci-view-grid"></i></a><a class="btn btn-icon nav-link-style nav-link-light" href="shop-list-ls.html"><i class="ci-view-list"></i></a></div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">

                <?php foreach($products as $product){
                    echo product_ui_1($product) ;
                } ?>
                                
            </div>





            <!-- Banner-->
            <!-- <div class="py-sm-2">
                <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-3">
                    <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                        <h4 class="fs-lg fw-light mb-2">Converse All Star</h4>
                        <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                    </div><img class="d-block ms-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
                </div>
            </div> -->
            <!-- Products grid-->
            <div class="row mx-n2">
                <!-- Product-->
                <div class="col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/07.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women's Swimwear</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Two-Piece Bikini in Print</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4" id="xs3" checked>
                                    <label class="form-option-label" for="xs3">XS</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4" id="s3">
                                    <label class="form-option-label" for="s3">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4" id="m3">
                                    <label class="form-option-label" for="m3">M</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                
            </div>
            <hr class="my-3">
            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
                </ul>
                <ul class="pagination">
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                </ul>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
                </ul>
            </nav>
        </section>
    </div>
</div>

<?php require('Files/footer.php') ?>