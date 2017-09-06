@extends('admin/layout')

@section('content')
<div class="cnt_wrap">


			<!-- title_wrap -->
				<div class="tit_wrap cboth">
					<div class="flt">
						<h3 class="tit_h3">PRODUCTS </h3>
					</div>
				</div>
				<!-- //title_wrap -->
			</div>

			<!-- mycontent -->
			<div class="mycnt">

				<!-- table input -->
				<div class="tbl_ipt product">
					<table summary="">
						<caption></caption>
						<colgroup>
							<col style="width:170px;">
							<col>
						</colgroup>
						<tbody>
							<tr style="display: ;">
								<th>
									<div>Main Menu</div>
								</th>
								<td>
									<div>
										<select style="width:100%;display:;" id="menuname">
											@foreach($menulist as $menu)
												<option value="{{$menu->id}}">{{$menu->menuname}}</option>
											@endforeach
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									<div>Category</div>
								</th>
								<td>
									<div>
										<input type="text" placeholder="Enter name" name="" style="width:100%;" class="cateName">
									</div>
								</td>
							</tr>
							<tr>
								<th>
									<div>Status</div>
								</th>
								<td>
									<div><label><input type="checkbox" name="" class="cateStatus"> Enable</label></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- //table input -->

				<!-- button_wrap -->
				<div class="btn_wrap tar mgt10">
					<a href="javascript:void(0)" class="btn_blue btn_insert_subcate">Insert</a>&nbsp;
					<a href="javascript:void(0)" class="btn_blue btn_edit_category" attEditCateID="">Edit</a>&nbsp;
					<!--<a href="#none" class="btn_red" attDelete="">Delete</a>-->
				</div>
				<!-- //button_wrap -->

				<!-- table_list -->
				<div class="tbl_lst1 mgt10">
					<table summary="">
						<caption></caption>
						<colgroup>
						<col style="width:60px;">
						<col style="width:170px;">
						<col>
						<col style="width:70px;">
						<col style="width:80px;">
						</colgroup>
						<thead>
							<tr>
								<th><div>No</div></th>
								<th><div>Menu</div></th>
								<th><div>Category</div></th>
								<th><div>Status</div></th>
								<th><div class="tac">Action</div></th>
							</tr>
						</thead>
						<tbody>
							@php
								$i = 0;
							@endphp
							@foreach($category as $cate)
								@php
									$i++;
								@endphp
								<tr>
									<td><div>{{$i}}</div></td>
									<td><div class="txt_menuname"><span style="display:none;" class="val_menu_id">{{$cate->menu_id}}</span>{{$cate->menuname}}</div></td>
									<td><div class="txt_catename">{{$cate->subcate_name}}</div></td>
									<td><div class="cateStatus">{{$cate->status==1 ? "Enable":"Disable"}}</div></td>
									<td>
										<div class="t_center">
											<!--<a href="#none" title="edit image" class="btn_edit_img"><span class="blind">edit image</span></a>-->
											<a href="#none" title="edit" class="btn_edit btn_show_cate" attCateID="{{$cate->id}}"><span class="blind">Edit</span></a>
											<a href="#none" title="delete" class="btn_delete btn_delete_cate" attDelCateID="{{$cate->id}}"><span class="blind">Delete</span></a>
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