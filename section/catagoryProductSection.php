<div class="product_page_bg">
        <div class="container">
            <div class="product_sidebar">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-12">
                        <!--sidebar widget start-->
                        <aside class="sidebar_widget">
                            <div class="widget_list widget_categories">
                                <h3>Filter By</h3>
                                <ul>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)">Offers</a>
                                        <ul class="widget_dropdown_categories">
                                            <li><a href="#">Offer Code FOURTH (38)</a></li>
                      
                                            <li><a href="#">Clearance/Closeout (102)</a></li>
                                            <li><a href="#">Last Act (42)</a></li>
                                        </ul>
                                    </li>

                                    <li class=""><a href="">Size</a>
                                        <ul class="">
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">XS</a></li>
                                        </ul>
                                    </li>

                                    <div class="product_variant color cat_color">
                                        <h4>color</h4>
                                        <ul>
                                            <li class="color1"><a href="#"></a></li>
                                            <li class="color2"><a href="#"></a></li>
                                            <li class="color3"><a href="#"></a></li>
                                            <li class="color4"><a href="#"></a></li>
                                        </ul>
                            </div>
                            <div class="product_variant color cat_color">
                                        <h4>Color Family</h4><br>
                                        <div class="custom-control custom-checkbox">
                                     <div class="checkbox">
                                          <label><input type="checkbox" value=""> Multicolor</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input type="checkbox" value=""> Navy Blue</label>
                                        </div>
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> Red</label>
                                        </div>
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> Black</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> Blue</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> Maroon</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> Pink</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> White</label>
                                        </div> 

                                    </div>
                            </div>


                                    <li><a href="#">Brand</a>
                                        <br>
                                    <div class="custom-control custom-checkbox">
                                     <div class="checkbox">
                                          <label><input type="checkbox" value=""> HERMES</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input type="checkbox" value=""> PRADA</label>
                                        </div>
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> CHANEL</label>
                                        </div>
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> RALPH LAUREN.</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> BURBERRY</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> HOUSE OF VERSACE</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> FENDI</label>
                                        </div> 
                                        <div class="checkbox disabled">
                                          <label><input type="checkbox"> ARMANI</label>
                                        </div> 

                                    </div>
                                    </li>
                                    
                                </ul>
                            </div>


                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="#">
                                    <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount">

                                </form>
                            </div>
                            <div class="widget_list widget_categories" style="font-weight: 600">
                                <ul>
                                    <li><a href="#">Customers' Top Rated </a></li>
                                    <li><a href="#">Discount Range </a></li>
                                    
                                </ul>
                            </div>
                        </aside>
                        <!--sidebar widget end-->
                    </div>
                    <div class="col-lg-9 col-md-12 col-12">
                        <div class="item-200">
                            <span style="color:red">220</span> items in <span style="text-decoration: bold;color:red;font-size:.5em">Leggings &amp; Pants</span>
                            <div style="font-size:.5em;margin-top: .5em;">Sort by 
                                <select class="ml-5" id="sortBy" title="sortBy">
                                                    <option value="ORIGINAL" selected="selected">Featured Items</option>
                                                    <option value="PRICE_LOW_TO_HIGH">Price: Low to High</option>
                                                    <option value="PRICE_HIGH_TO_LOW">Price: High to Low</option>
                                                    <option value="TOP_RATED">Customers' Top Rated</option>
                                                    <option value="BEST_SELLERS">Best Sellers</option>
                                                    <option value="NEW_ITEMS">New Arrivals</option>
                                </select>
                            </div> 

                            <div class="grid-list float-right">
                                <a href=""><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                  <a href=""><i class="fa fa-list" aria-hidden="true"></i>
</a>
                            </div>  
                        </div>
                        
                       <div class="row no-gutters shop_wrapper">
                       <?php
                                for($i=0;$i<12;$i++){
                       ?>
                       <div class="col-lg-4 col-md-4 col-12 ">
                                <?php include("section/productBlock.php");?>
                        </div> 
<?php } ?>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>