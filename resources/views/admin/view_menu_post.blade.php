@extends('admin/layout')

@section('content')
<div class="cnt_wrap">

			<!-- title_wrap -->
				<div class="tit_wrap cboth">
					<div class="flt">
						<h3 class="tit_h3">MENU CONTENT </h3>
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
					<div class="tbl_ipt mgt10">
						<table summary="">
							<caption></caption>
							<colgroup>
								<col style="width:120px;">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th>
										<div>Menu</div>
									</th>
									<td>
										<div style="padding-right:0;padding-left:5px;">
											<select id="menuname" style="width:100%;">
												@foreach($menulist as $menu)
													<option value="{{$menu->id}}">{{$menu->menuname}}</option>
												@endforeach
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<div>Description</div>
									</th>
									<td>
										<div class="ckeditor_wrap">
											<textarea class="ckeditor">
												Write your description
											</textarea>
											<!--<input name="image" type="file" id="upload" class="hidden" onchange="" style="display:none;">-->
										</div>
									</td>
								</tr>
								<tr style="display:none;">
									<th>
										<div>Status</div>
									</th>
									<td>
										<div><label><input type="checkbox" name="" class="contentStatus"> Enable</label></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- //table input -->

					<!-- button_wrap -->
					<div class="btn_wrap tar mgt10">
						<a href="javascript:void(0)" class="btn_blue btn_insertMenuPost">Insert</a>&nbsp;
						<a href="javascript:void(0)" class="btn_blue btn_update_contentpost" attEditContentPost="">Edit</a>&nbsp;
						<!--<a href="#none" class="btn_red" attDelete="">Delete</a>-->
					</div>
					<!-- //button_wrap -->

				</div>
				<!-- //form wrap -->

				<!-- table_list -->
				<div class="tbl_lst1 multi mgt10">
					<table summary="">
						<caption></caption>
						<colgroup>
						<col style="width:60px;">
						<col style="width:170px;">
						<col>
						<col style="width:140px;">
						</colgroup>
						<thead>
							<tr>
								<th><div>No</div></th>
								<th><div>Menu</div></th>
								<th><div>Description</div></th>
								<th><div class="tac">Action</div></th>
							</tr>
						</thead>
						<tbody>
							@php
								$i = 0;
							@endphp
							@foreach($menupost as $menupost)
									@php
										$i++;
									@endphp
								<tr>
									<td><div><span style="display:none;">{{$menupost->id}}</span>{{$i}}</div></td>
									<td><div class="txt_menuname"><span style="display:none;" class="val_menu_id">{{$menupost->menu_id}}</span>{{$menupost->menuname}}</div></td>
									<td><div class="txt_dsc">{!! html_entity_decode($menupost->dsc) !!}</div></td>
									<td>
										<div class="tac">
											<a href="javascript:void(0)" title="edit" attMenuPostEdit="{{$menupost->id}}" class="btn_edit btn_edit_menupost">
												<span class="blind">Edit</span>
											</a>
											<a href="javascript:void(0)" title="delete" attMenuPostDelete="{{$menupost->id}}" class="btn_delete btn_delete_menupost">
												<span class="blind">Delete</span>
											</a>
										</div>
									</td>
								</tr>
							@endforeach
							<!--<tr>
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
							</tr>-->
						</tbody>
					</table>
				</div>
				<!-- //table_list -->

			</div>
			<!-- //mycontent -->


</div>
@endsection