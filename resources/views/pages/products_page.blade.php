
@extends('pages.layout')


@section('content')
			<div id="main" class="col-md-9">


					<!-- store top filter -->
					<div class="store-filter clearfix">
					    <div class="pull-right">
							
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
                                <li>{{$all_product->links()}}</li>
								
							</ul>
						</div>
					</div>
					<!-- /store top filter -->



					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">


							<!-- Product Single -->

							@foreach($all_product as $v_all_product)

							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										
										<!--<div class="product-label">
											<span>New</span>
											<span class="sale">-20% off</span>
										</div>-->

							<a href="{{URL::to('/view_product_detail/'.$v_all_product->product_id)}}">
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i>View detail</button></a>

										<img src="{{URL::to($v_all_product->product_image)}}" height="200px" width="250px">
									</div>
									<div class="product-body">
										<h4 class="product-price">{{$v_all_product->product_price}}tk per kg</h4> 
										
										
										<h2 class="product-name"><a href="#">{{$v_all_product->product_name}}</a></h2>
										
										<div class="product-btns">
											<a href="{{URL::to('/view_product_detail/'.$v_all_product->product_id)}}">
												<button class="primary-btn add-to-cart">
													<i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- /Product Single -->

						</div><!-- /row -->
						
					</div><!-- /STORE -->
					

					<!-- store bottom filter -->
					<div class="store-filter clearfix">

						<div class="pull-right">
							
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li>{{$all_product->links()}}</li>
							</ul>
						</div>
					</div>
					<!-- /store bottom filter -->
				</div>
@endsection



