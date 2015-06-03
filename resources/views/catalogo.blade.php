@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-12">
		<!-- Categories -->
		<div class="col-lg-12 col-md-12 col-sm-6">
    		<div class="no-padding">
        		<span class="title">CATEGORIES</span>
        	</div>
			<div id="main_menu">
                <div class="list-group panel panel-cat">
                    <a href="#sub1" class="list-group-item" data-toggle="collapse" data-parent="#main_menu">Cras justo odio <i class="fa fa-caret-down pull-right"></i></a>
                    <div class="collapse list-group-sub" id="sub1">
                        <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 <i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu1">
                            <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
                            <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a>
                            <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">Subitem 3 c <i class="fa fa-caret-down"></i></a>
                            <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                                <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 1</a>
                                <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 2</a>
                            </div>
                            <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a>
                        </div>
                        <a href="javascript:;" class="list-group-item">Subitem 2</a>
                        <a href="javascript:;" class="list-group-item">Subitem 3</a>
                    </div>
                    <a href="#" class="list-group-item" >Dapibus ac facilisis in</a>
                    <a href="#sub2" class="list-group-item" data-toggle="collapse" data-parent="#main_menu">Porta ac consectetur ac <i class="fa fa-caret-down pull-right"></i></a>
                    <div class="collapse list-group-sub" id="sub2">
                        <a href="" class="list-group-item">Subitem 1</a>
                        <a href="" class="list-group-item">Subitem 2</a>
                        <a href="" class="list-group-item">Subitem 3</a>
                    </div>
                    <a href="#" class="list-group-item" >Vestibulum at eros</a>
                    <a href="#" class="list-group-item" >Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item" >Cras justo odio</a>
                    <a href="#" class="list-group-item" >Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item" >Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item" >Vestibulum at eros</a>
                    <a href="#" class="list-group-item" >Porta ac consectetur ac</a>
                </div>
            </div>
		</div>
		<!-- End Categories -->

		<!-- Best Seller -->
		<div class="col-lg-12 col-md-12 col-sm-6">
			<div class="no-padding">
        		<span class="title">BEST SELLER</span>
        	</div>
            <div class="hero-feature">
                <div class="thumbnail text-center">
                	<a href="detail.html" class="link-p">
                    	<img src="images/product-9.jpg" alt="">
                	</a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.html">Ohio State College T-Shirt</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                        <p>
                        	<div class="btn-group">
	                        	<a href="#" class="btn btn-default">$ 924.25</a>
	                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        	</div>
                        </p>
                    </div>
                </div>
            </div>
			<div class="hero-feature hidden-sm">
                <div class="thumbnail text-center">
                	<a href="detail.html" class="link-p">
                    	<img src="images/product-8.jpg" alt="">
                	</a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.html">Penn State College T-Shirt</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                        <p>
                        	<div class="btn-group">
	                        	<a href="#" class="btn btn-default">$ 528.96</a>
	                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        	</div>
                        </p>
                    </div>
                </div>
            </div>
		</div>
		<!-- End Best Seller -->

	</div>

	<div class="clearfix visible-sm"></div>

	<!-- Catalogue -->
	<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="col-lg-12 col-sm-12">
    		<span class="title">PRODUCTS CATALOGUE</span>
    	</div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-2.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Age Of Wisdom Tan Graphic Tee</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                        	<a href="#" class="btn btn-default">$ 122.51</a>
                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-3.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Classic Laundry Green Graphic T-Shirt</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                        	<a href="#" class="btn btn-default">$ 628.96</a>
                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-4.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Disc Jockey Print T-Shirt</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                        	<a href="#" class="btn btn-default">$ 394.64</a>
                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-5.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Live Nation 3 Days of Peace and Music Carbon</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                    		<a href="#" class="btn btn-default">$ 428.96</a>
                    		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-6.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Live Nation ACDC Gray T-Shirt</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                    		<a href="#" class="btn btn-default">$ 428.96</a>
                    		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-7.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Live Nation Aerosmith Ivory T-Shirt</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                    		<a href="#" class="btn btn-default">$ 632.15</a>
                    		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-10.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                        	<a href="#" class="btn btn-default">$ 22.22</a>
                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-11.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Adidas Men Flame Black T-shirt</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                    		<a href="#" class="btn btn-default">$ 15.47</a>
                    		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hero-feature text-center">
            <div class="thumbnail">
            	<a href="detail.html" class="link-p">
                	<img src="images/product-12.jpg" alt="">
            	</a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">Adidas Men Red Printed T-shirt</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                    <p>
                    	<div class="btn-group">
                    		<a href="#" class="btn btn-default">$ 20.63</a>
                    		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                    	</div>
                    </p>
                </div>
            </div>
        </div>
		<div class="text-center">
        	<ul class="pagination catalogue-pagination">
				<li class="disabled"><a>First</a></li>
				<li class="disabled"><a>Prev</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">Next</a></li>
				<li><a href="#">Last</a></li>
			</ul>
		</div>
	</div>
	<!-- End Catalogue -->
</div>
@stop