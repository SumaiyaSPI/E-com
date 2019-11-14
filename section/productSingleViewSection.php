<div class="container" id="singleProduct">
    <div class="product_details_wrapper mb-55">
        <!--product details start-->
        <div class="product_details">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div class="row">
                            <div class=" col-md-2 single-zoom-thumb">

                                <ul class="s-tab-zoom" id="gallery_01">
                                    <li v-for="(thumb,idx) in product.images.thumb" @click.prevent="selectImage(idx)">
                                        <a href="#" class="elevatezoom-gallery">
                                            <img v-bind:src="thumb" alt="zo-th-1">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="img-1" class="col-md-10 zoomWrapper single-zoom">
                                <a href="#">
                                    <zoom-on-hover v-bind="product.images" :scale="2"></zoom-on-hover>
                                    <!-- <img id="zoom1" src="assets/img/product/productbig5.jpg" data-zoom-image="assets/img/product/productbig5.jpg" alt="big-1"> -->
                                </a>
                                
                            </div>
                            <div class="product_options mt-5 ml-5">
                                    <span class="btn last-day2" style="width:30%" style=""><i class="fa fa-puzzle-piece"></i> Embroidery &amp; Print</span>
                                    <span class="btn" style="width:15%"><i class="fa fa-play"></i> Video</span>
                                    <span class="btn" style="width:35%"><i class="fa fa-thumb-tack"></i> Article recommendation</span>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h3><a href="#">Nonstick Dishwasher PFOA</a></h3>

                            <div class="product_rating">
                                <p style="font-size:.8em;">prices in VAT <u>plus shipping</u></p>

                            </div>
                            <div class="price_box">
                                <span class="current_price">10,59 EUR <span style="font-weight:400">( <b>inc VAT</b> | ex VAT</span>)</span>
                            </div>
                            <div class="product_desc">
                                <p style="font-weight:200"><i>from 5 items: 9,40<br>from 30 items: 8,21</i></p>
                            </div>
                            <div class="product_variant color">
                                <ul>
                                    <li class="color1">
                                        <a href="#" data-toggle="tooltip" title="Black"></a>
                                    </li>
                                    <li class="color2">
                                        <a href="#" data-toggle="tooltip" title="Gray"></a>
                                    </li>
                                    <li class="color3">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color1">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color2">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color3">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color1">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color2">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color3">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color1">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color2">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color3">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                </ul>
                                <p style="color:grey;font-weight:.5em">Color: BLACK
                                </p>
                            </div>
                            <div class="product_size">
                                <p style="float:right">SizeTable</p><br>
                                <hr style="">
                                <ul id="product_size">
                                    <li class="selected">
                                        <a href="#" data-toggle="tooltip" title="XS">XS</a>
                                    </li>
                                    <li>
                                        <a href="#">S</a>
                                    </li>
                                    <li>
                                        <a href="#">M</a>
                                    </li>
                                    <li>
                                        <a href="#">L</a>
                                    </li>
                                    <li>
                                        <a href="#">XL</a>
                                    </li>
                                    <li>
                                        <a href="#">2XL</a>
                                    </li>
                                </ul>
                                <p style="color:grey;font-weight:.5em">Size: XS
                                </p>

                            </div>
                            <br>
                            <div class="product-availability">
                                <i class="fa fa-wifi"></i> Availability: In Stock
                            </div>
                            <br>

                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input v-model="qty" type="text" value=1>
                                <div id="qty_count" style="display:flex;flex-direction:column;margin-right:1em">
                                    <div @click="increase" class="plus fa fa-plus-circle"></div>
                                    <div @click="decrease" class="minus fa fa-minus-circle"></div>
                                </div>

                                <button class="button add-to-cart" type="submit"><i class="fa fa-shopping-cart pull-left"></i> add to cart</button>


                            </div>



                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!--product details end-->

        <div class="accordion product_accordian">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <span style="float:left">Product Details</span> <i class="fa fa-plus pull-right"></i>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span style="float:left">Price Details</span> <i class="fa fa-plus pull-right"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="product_d_table">
                            <form action="#">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="first_child">Compositions</td>
                                            <td>Polyester</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Properties</td>
                                            <td>Short Dress</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span style="float:left">Shipping &amp; Returns</span> <i class="fa fa-plus pull-right"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>

        <!--product area start-->
        <?php include("section/relatedProducts.php"); ?>
        <!--product area end-->

        <!--product area start-->
        <!--product area end-->
    </div>
</div>