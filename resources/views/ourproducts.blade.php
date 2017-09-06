@extends('layouts/layout')

@section('content')
				<!-- OUR PRODUCT -->
				<div class="our_product">
					<h2 class="tit_h2">OUR PRODUCTS</h2>
					<span style="display:none;">{{ $menuLink }}</span>

					@if($isDetail)

						@if($catId == "ALL")
						<div class="our_product_cnt">
							<ul>
								@foreach ($allProducts as $product)
									<li>
										<div>
											<a href="/detail/{{$menuLink}}/{{$catId}}/{{$product->id}}">
												@php
													$myString = $product->pro_img;
													$myArray = explode('|', $myString);
												@endphp
												
												@foreach ($myArray as $my_Array)
													<img src="/uploads/{{$my_Array}}" alt="">
												@endforeach
												<dl>
													<dt>{{$product->pro_name}}</dt>
													<dd>{!! html_entity_decode($product->pro_dsc) !!}</dd>
												</dl>
											</a>
										</div>
									</li>
								@endforeach
								<!--<li>
									<div>
										<a href="#none">
											<img src="/img/comm/1.jpg" alt="">
											<dl>
												<dt>Turktor</dt>
												<dd>Whatever your cylinder, valve, pump, or power system needs may be, our experienced engineers</dd>
											</dl>
										</a>
									</div>
								</li>-->
								
							</ul>
						</div>
						@else


						<div class="our_product_cnt">
							<ul>
								@foreach ($catProducts as $product)
									<li>
										<div>
											<a href="/detail/{{$menuLink}}/{{$catId}}/{{$product->id}}">
												@php
													$myString = $product->pro_img;
													$myArray = explode('|', $myString);
												@endphp
												
												@foreach ($myArray as $my_Array)
													<img src="/uploads/{{$my_Array}}" alt="">
												@endforeach
												<dl>
													<dt>{{$product->pro_name}}</dt>
													<dd>{!! html_entity_decode($product->pro_dsc) !!}</dd>
												</dl>
											</a>
										</div>
									</li>
								@endforeach
								<!--<li>
									<div>
										<a href="#none">
											<img src="/img/comm/1.jpg" alt="">
											<dl>
												<dt>Turktor</dt>
												<dd>Whatever your cylinder, valve, pump, or power system needs may be, our experienced engineers</dd>
											</dl>
										</a>
									</div>
								</li>-->
								
							</ul>
						</div>
						@endif

					@else

						@php
							$myString = $productDetail->pro_img;
							$myArray = explode('|', $myString);
						@endphp

						<div class="our_product_cnt cboth">
							<div class="detail_img">
								@foreach ($myArray as $my_Array)
									<img src="/uploads/{{$my_Array}}" alt="">
								@endforeach
								<!--<img src="/img/comm/empty.png" alt="">-->
							</div>
							<div class="detail_txt">
								<div class="tar"><a href="#none" class="btn_printpdf">Print PDF</a></div>
								<dl>
									<dt>{{ $productDetail->pro_name }}</dt>
									<dd>{!! html_entity_decode($productDetail->pro_dsc) !!}</dd>
								</dl>
							</div>
						</div>

					@endif

				</div>
				<!-- //OUR PRODUCT -->
@endsection