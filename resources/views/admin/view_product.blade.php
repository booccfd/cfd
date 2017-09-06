@extends('admin/layout')

@section('content')
<div class="cnt_wrap">


			<!-- title_wrap -->
				<div class="tit_wrap cboth">
					<div class="flt">
						<h3 class="tit_h3">PRODUCTS </h3>
					</div>
					<!-- button_wrap -->
					<div class="frt btn_wrap tar">
						<a href="javascript:void(0)" class="btn_blue btn_form_wrap">Show Add</a>&nbsp;
					</div>
					<!-- //button_wrap -->
				</div>
				<!-- //title_wrap -->
			</div>

			<!-- mycontent -->
			<div class="mycnt">

				<!-- form wrap -->
				<div class="form_wrap">

					<!-- table input -->
					<div class="tbl_ipt product">
						<table summary="">
							<caption></caption>
							<colgroup>
								<col style="width:140px;">
								<col style="width:210px;">
								<col style="width:130px;">
								<col>
							</colgroup>
							<tbody>
							<form class="form-horizontal" id="kv_upload" enctype="multipart/form-data" method="post" action="{{ url('/admin/view_product/insert') }}" autocomplete="off">
								<input type="hidden" name="_token" value="{{ csrf_token() }}" />
								<input type="hidden" name="key" value="productpost">

								<tr style="display: ;">
									<th>
										<div>Category</div>
									</th>
									<td>
										<div>
											<select style="width:100%;display:;" class="menuid" name="menu_id">
												@foreach($category as $cate)
													<option value="{{$cate->id}}">{{$cate->subcate_name}}</option>
												@endforeach
											</select>
										</div>
									</td>
									<th rowspan="4">
										<div>Description</div>
									</th>
									<td rowspan="4">
										<div class="ckeditor_wrap">
											<textarea class="ckeditor" style="height:273px;" name="pro_dsc">
												Write your description
											</textarea>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<div>Product Name</div>
									</th>
									<td>
										<div>
											<input type="text" placeholder="Enter name" name="pro_name" style="width:100%;" class="pro_title">
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<div>Image</div>
									</th>
									<td>
										<div class="upload_wrap">
											<div class="img_wrap">
												<a href="#none" class="btn_browImg">Photo/Video</a>
													<input type="file" name="images[]" id="file" multiple="multiple" class="browImg" style="display:none;"/>
													<button type="submit">Submit</button>
												<div class="image_list">
													<ul>
														<!--<li>
															<a href="#none" class="btn_remove_Img">x</a>
															<img src="" alt="" class="getImg">
														</li>-->
													</ul>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<div>Status</div>
									</th>
									<td>
										<div><label><input type="checkbox" name="pro_status" class="postStatus" value="disable"> Enable</label></div>
									</td>
								</tr>

								</form>
							</tbody>
						</table>
					</div>
					<!-- //table input -->

					<!-- button_wrap -->
					<div class="btn_wrap tar mgt10">
						<a href="javascript:void(0)" class="btn_blue btn_insert_product">Insert</a>&nbsp;
						<a href="javascript:void(0)" class="btn_blue">Edit</a>&nbsp;
						<!--<a href="#none" class="btn_red" attDelete="">Delete</a>-->
					</div>
					<!-- //button_wrap -->

				</div>

				<!-- table_list -->
				<div class="tbl_lst1 multi mgt10">
					<table summary="">
						<caption></caption>
						<colgroup>
						<col style="width:60px;">
						<col style="width:150px;">
						<col style="width:170px;">
						<col>
						<col style="width:100px;">
						<col style="width:100px;">
						<col style="width:140px;">
						</colgroup>
						<thead>
							<tr>
								<th><div>No</div></th>
								<th><div>Category</div></th>
								<th><div>Product Name</div></th>
								<th><div>Description</div></th>
								<th><div>Status</div></th>
								<th><div class="tar">Price</div></th>
								<th><div class="tac">Action</div></th>
							</tr>
						</thead>
						<tbody>
							@php
								$i = 0;
							@endphp
							@foreach($productpost as $propost)
								@php
									$i++;
								@endphp
								<tr>
									<td><div>{{$i}}</div></td>
									<td><div>{{$propost->subcate_name}}</div></td>
									<td><div>{{$propost->pro_name}}</div></td>
									<td><div>{!! html_entity_decode($propost->pro_dsc) !!}</div></td>
									<td><div>{{$propost->pro_status==1 ? "Enable":"Disable"}}</div></td>
									<td><div class="tar">13 $</div></td>
									<td>
										<div class="t_center">
											<a href="#none" title="edit image" class="btn_edit_img"><span class="blind">edit image</span></a>
											<a href="#none" title="edit" class="btn_edit"><span class="blind">Edit</span></a>
											<a href="#none" title="delete" class="btn_delete btn_delete_product" attProID="{{$propost->id}}"><span class="blind">Delete</span></a>
										</div>
									</td>
								</tr>
							@endforeach
							<!--<tr>
								<td><div>1</div></td>
								<td><div>Skin Care & Customer</div></td>
								<td><div>2</div></td>
								<td><div>10 %</div></td>
								<td><div class="tar">13 $</div></td>
								<td>
									<div class="t_center">
										<a href="#none" title="edit image" class="btn_edit_img"><span class="blind">edit image</span></a>
										<a href="#none" title="edit" class="btn_edit"><span class="blind">Edit</span></a>
										<a href="#none" title="delete" class="btn_delete"><span class="blind">Delete</span></a>
									</div>
								</td>
							</tr>-->
						</tbody>
					</table>
				</div>
				<!-- //table_list -->

			</div>
			<!-- //mycontent -->
</div>
@endsection


@push('script')

<script>


</script>

@endpush