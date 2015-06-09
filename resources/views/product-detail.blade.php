@extends('layout.master')

@section('content')
<div class="col-lg-9 col-md-9 col-sm-12">
	<div class="col-lg-12 col-sm-12">
		<span class="title">{{ $product->name }}</span>
	</div>
    <div class="col-lg-12 col-sm-12 hero-feature">

    	<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
            	<!-- Main Image -->
				<div class="product-main-image-container">
					<img src="images/loader.gif" alt="" class="product-loader" style="display: none;">
					<span class="thumbnail product-main-image" style="position: relative; overflow: hidden;">
						<img src="images/detail1.jpg" alt="">
					<img src="images/detail1.jpg" class="zoomImg" style="position: absolute; top: -0.593908629441624px; left: -0.0152284263959391px; opacity: 0; width: 400px; height: 400px; border: none; max-width: none; max-height: none;"></span>
				</div>
				<!-- End Main Image -->

				<!-- Thumbnail Image -->
				<div class="col-xs-3 product-thumb-image">
					<a href="images/detail1.jpg" class="thumbnail">
						<img src="images/detail1.jpg" alt="">
					</a>
				</div>
				<div class="col-xs-3 product-thumb-image">
					<a href="images/detail2.jpg" class="thumbnail">
						<img src="images/detail2.jpg" alt="">
					</a>
				</div>
				<div class="col-xs-3 product-thumb-image">
					<a href="images/detail3.jpg" class="thumbnail">
						<img src="images/detail3.jpg" alt="">
					</a>
				</div>
				<div class="col-xs-3 product-thumb-image">
					<a href="images/detail1.jpg" class="thumbnail">
						<img src="images/detail1.jpg" alt="">
					</a>
				</div>
				<!-- End Thumbnail Image -->
			</div>

			<div class="visible-xs">
				<div class="clearfix"></div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="well product-short-detail">
					<div class="row">
						<div class="the-list">
							<h3 class="col-xs-12">
								<!-- <span class="price-old">$169</span> -->
								$428.96
							</h3>
						</div>
						<div class="the-list">
							<div class="col-xs-4">Availability</div>
							<div class="col-xs-8">
								<!-- <span class="red">OUT OF STOCK</span> -->
								<span class="green">98 items in stock</span>
							</div>
						</div>
						<div class="the-list">
							<div class="col-xs-4">Select</div>
							<div class="col-xs-8">
								<select class="form-control">
									<option value="">Select Option</option>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
								</select>
							</div>
						</div>
						<div class="the-list">
							<div class="col-xs-4">Checkbox</div>
							<div class="col-xs-8">
								<label>
									<input type="checkbox" value="check1"> Check 1
								</label>&nbsp;
								<label>
									<input type="checkbox" value="check2" checked=""> Check 2
								</label>
							</div>
						</div>
						<div class="the-list">
							<div class="col-xs-4">Radio</div>
							<div class="col-xs-8">
								<label>
									<input type="radio" name="radio" value="radio1" checked=""> Radio 1
								</label>&nbsp;
								<label>
									<input type="radio" name="radio" value="radio2"> Radio 2
								</label>
							</div>
						</div>
						<div class="clearfix"></div>
						<hr>
						<div class="col-xs-12 input-qty-detail">
							<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" class="form-control input-qty text-center" value="1" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
							<button class="btn btn-default pull-left"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
						</div>
						<div class="clearfix"></div><br>
						<div class="col-xs-12 add-to-detail">
							<div class="row">
							<div class="col-xs-6 text-center">
								<a href="compare.html"><i class="fa fa-list"></i> Add to Compare</a>
							</div>
							<div class="col-xs-6 text-center">
								<a href="wishlist.html"><i class="fa fa-heart"></i> Add to Wishlist</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div><br clear="all">

			<div class="col-xs-12 product-detail-tab">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
					<li><a href="#detail" data-toggle="tab">Detail</a></li>
					<li><a href="#review" data-toggle="tab">Review</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="desc">
						<div class="well">
							<p>Actually this part of clothes is very unique and original. It is a way of self-expression because nowadays making some logo or phrase has become very popular. Obviously the T-shirts are the part of modern culture and they have a great influence on teens because of their freedom and epatage. We are offering you our unique and original products. </p>
						</div>
					</div>
					<div class="tab-pane" id="detail">
						<div class="well">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td width="40%">Lorem</td>
										<td>Ipsum</td>
									</tr>
									<tr>
										<td>Dolor</td>
										<td>Sit Amet</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane" id="review">
						<div class="well">
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+">
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</a>
								<div class="media-body">
									<h5 class="media-heading"><strong>John Thor</strong></h5>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
								</div>
							</div>
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+">
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</a>
								<div class="media-body">
									<h5 class="media-heading"><strong>Michael</strong></h5>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
								</div>
							</div>
							<hr>
                            <h4>Add your review</h4>
                            <p></p>
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>1 star</option>
                                        <option>2 stars</option>
                                        <option>3 stars</option>
                                        <option>4 stars</option>
                                        <option>5 stars</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Your Review"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Review</button>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
		</div>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-4f0c254f1302adf8"></script>
     -->
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 col-sm-12">
		<span class="title">RELATED PRODUCTS</span>
	</div>
	<div class="col-lg-4 col-sm-4 hero-feature text-center">
        <div class="thumbnail">
        	<a href="detail.html" class="link-p" style="overflow: hidden; position: relative;">
            	<img src="images/product-10.jpg" alt="" style="position: absolute; width: 242px; height: 258px; max-width: none; max-height: none; left: 0px; top: 0px;">
        	</a>
            <div class="caption prod-caption">
                <h4><a href="detail.html">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                <p>
                	</p><div class="btn-group">
                    	<a href="#" class="btn btn-default">$ 22.22</a>
                    	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                	</div>
                <p></p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 hero-feature text-center">
        <div class="thumbnail">
        	<a href="detail.html" class="link-p" style="overflow: hidden; position: relative;">
            	<img src="images/product-11.jpg" alt="" style="position: absolute; width: 248px; height: auto; max-width: none; max-height: none; left: -3px; top: 0px;">
        	</a>
            <div class="caption prod-caption">
                <h4><a href="detail.html">Adidas Men Flame Black T-shirt</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                <p>
                	</p><div class="btn-group">
                		<a href="#" class="btn btn-default">$ 15.47</a>
                		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                	</div>
                <p></p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 hero-feature text-center">
        <div class="thumbnail">
        	<a href="detail.html" class="link-p" style="overflow: hidden; position: relative;">
            	<img src="images/product-12.jpg" alt="" style="position: absolute; width: 251px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
        	</a>
            <div class="caption prod-caption">
                <h4><a href="detail.html">Adidas Men Red Printed T-shirt</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                <p>
                	</p><div class="btn-group">
                		<a href="#" class="btn btn-default">$ 20.63</a>
                		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                	</div>
                <p></p>
            </div>
        </div>
    </div>
</div>
@stop