<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-1317">


            <div class="content_wrap-2">
                <div class="container">
                    <div class="wrapper">
                        <div class="row">
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="#">Home</a>
                                <span class="breadcrumbs_delimiter">

                                </span><a class="breadcrumbs_item" href="#">Shop</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <a class="breadcrumbs_item cat_post" href="#">Racquet Grips</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">HEAD Instinct Junior 25 Prestrung Tennis Racquet</span>
                            </div>
                        </div>    
                    </div>
                </div>        
            </div>

            <div class="wapper2">
                <div class="container">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-6">

                                <span class="onsale" style="    padding: 12px 12px;    background: red;    color: #eee;    font-weight: bold;">Sale!</span>
                                <div class="images">
                                    <p href="images/product-8.jpg" itemprop="image" class="woocommerce-main-image zoom hover_icon hover_icon_view" title="" data-rel="prettyPhoto" rel="magnific">
                                     
                                            <!-- Swiper -->
                                            <div class="swiper-container gallery-top">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide" >
                                                        <img src="<?php echo $url_path ?>/images/product-8-600x600 (2).jpg" alt=""/>    
                                                    </div>
                                                    <div class="swiper-slide" >
                                                        <img src="<?php echo $url_path ?>/images/product-3-300x300.jpg" alt=""/>    
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo $url_path ?>/images/product-8-600x600 (2).jpg" alt=""/>    
                                                    </div>
                                                </div>
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next swiper-button-white"></div>
                                                <div class="swiper-button-prev swiper-button-white"></div>
                                            </div>
                                            <div class="swiper-container gallery-thumbs">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide" >
                                                        <img src="<?php echo $url_path ?>/images/product-8-600x600 (2).jpg" alt=""/>    
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo $url_path ?>/images/product-3-300x300.jpg" alt=""/>    
                                                    </div>
                                                    <div class="swiper-slide" >
                                                        <img src="<?php echo $url_path ?>/images/product-8-600x600 (2).jpg" alt=""/>    
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="summary">
                                    <h1 itemprop="name" class="product_title">HEAD Instinct Junior 25 Prestrung Tennis Racquet</h1>
                                    <div itemprop="aggregateRating" itemscope="" itemtype="#">
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <i style=" color: #d3ced2;" class="fa fa-circle" aria-hidden="true"></i>
                                        <i style=" color: #d3ced2;" class="fa fa-circle" aria-hidden="true"></i>

                                        <div itemprop="offers" itemscope="" itemtype="#">
                                            <p class="price">
                                                <span class=" amount">
                                                    <span>£</span>148.00
                                                </span>
                                                <span class=" amount1">
                                                    <del> <span>£</span>199.00</span></del> <ins>
                                                </ins>
                                            </p>
                                            <meta itemprop="price" content="148">
                                            <meta itemprop="priceCurrency" content="GBP">
                                            <link itemprop="availability" href="#">
                                        </div>
                                        <div class="description">
                                            <p>Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex.</p>
                                        </div>
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="quantity">
                                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                <span class="q_inc"></span>
                                                <span ></span>
                                            </div>
                                            <input type="hidden" name="add-to-cart" value="1078">
                                            <button type="submit" class=" alt">Add to cart</button>
                                        </form>

                                        <span>Categories: <a href="#" rel="tag">Racquet Grips</a>, <a href="#" rel="tag">Racquets</a>, <a href="#" rel="tag">Sales &amp; Deals</a></span></br>
                                        <span>Tags: <a href="#" rel="tag">equipment</a>, <a href="#/" rel="tag">tennis</a></span></br>
                                        <span>Product ID: <span>1078</span></span>

                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>