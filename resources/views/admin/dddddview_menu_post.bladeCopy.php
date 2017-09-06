@extends('admin/layout')

@section('content')
<div class="cnt_wrap">

			<!-- title_wrap -->
				<div class="tit_wrap cboth">
					<div class="flt">
						<h3 class="tit_h3">MENU CONTENT </h3>
					</div>
				</div>
				<!-- //title_wrap -->
			</div>

			<!-- mycontent -->
			<div class="mycnt">

				<!-- table input -->
				<div class="tbl_ipt">
					<table summary="">
						<caption></caption>
						<colgroup>
							<col style="width:120px;">
							<col>
							<col style="width:130px;">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th>
									<div>Menu</div>
								</th>
								<td>
									<div>
										<select style="width:100%;">
											@foreach($menulist as $menu)
												<option value="{{$menu->id}}">{{$menu->menuname}}</option>
											@endforeach
										</select>
									</div>
								</td>
								<th>
									<div>Description</div>
								</th>
								<td rowspan="4">
									<div class="ckeditor_wrap">
										<textarea class="ckeditor">
											Write your description
										</textarea>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									<div>Title</div>
								</th>
								<td>
									<div>
										<input type="text" placeholder="Enter title" name="" style="width:100%;">
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
											<input type="file" name="allImg" multiple="multiple" class="browImg" style="display:none;"/>
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
									<div><label><input type="checkbox" name="" class="menuStatus"> Enable</label></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- //table input -->

				<!-- button_wrap -->
				<div class="btn_wrap tar mgt10">
					<a href="javascript:void(0)" class="btn_blue">Insert</a>&nbsp;
					<a href="javascript:void(0)" class="btn_blue">Edit</a>&nbsp;
					<a href="#none" class="btn_red" attDelete="">Delete</a>
				</div>
				<!-- //button_wrap -->

				<!-- table_list -->
				<div class="tbl_lst1 mgt10">
					<table summary="">
						<caption></caption>
						<colgroup>
						<col style="width:60px;">
						<col>
						<col>
						<col style="width:130px;">
						<col style="width:70px;">
						<col style="width:140px;">
						</colgroup>
						<thead>
							<tr>
								<th><div>No</div></th>
								<th><div>Banner Title</div></th>
								<th><div>Banner Text</div></th>
								<th><div>Image</div></th>
								<th><div>Status</div></th>
								<th><div class="tac">Action</div></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><div><span style="display:none;">Id real</span>i</div></td>
								<td><div>img title</div></td>
								<td><div>img text</div></td>
								<td><div>image</div></td>
								<td><div>Enable</div></td>
								<td>
									<div class="tac">
										<a href="javascript:void(0)" title="edit" class="btn_edit">
											<span class="blind">Edit</span>
										</a>
										<a href="javascript:void(0)" title="delete" class="btn_delete">
											<span class="blind">Delete</span>
										</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- //table_list -->

			</div>
			<!-- //mycontent -->


</div>
@endsection