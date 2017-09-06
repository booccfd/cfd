@extends('admin/layout')

@section('content')
<div class="cnt_wrap">


		

			<!-- title_wrap -->
				<div class="tit_wrap cboth">
					<div class="flt">
						<h3 class="tit_h3">MENU </h3>
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
							<col style="width:;">

						</colgroup>
						<tbody>
							<tr>
								<th>
									<div>Menu Name</div>
								</th>
								<td>
									<div><input type="text" placeholder="Enter your menu name" name="" class="menuName" style="width:100%;"></div>
								</td>
							</tr>
							<tr>
								<th>
									<div>Menu Status</div>
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
					<a href="javascript:void(0)" class="btn_blue btn_saveMenu">Insert</a>&nbsp;
					<a href="javascript:void(0)" class="btn_blue btn_edit_Menu" attEdit="">Edit</a>&nbsp;
					<!--<a href="#none" class="btn_red btn_deleteMenu" attDelete="">Delete</a>-->
				</div>
				<!-- //button_wrap -->

				<!-- table_list -->
				<div class="tbl_lst1 mgt10">
					<table summary="">
						<caption></caption>
						<colgroup>
						<col style="width:60px;">
						<col>
						<col style="width:70px;">
						<col style="width:140px;">
						</colgroup>
						<thead>
							<tr>
								<th><div>No</div></th>
								<th><div>Menu Name</div></th>
								<th><div>Status</div></th>
								<th><div class="tac">Action</div></th>
							</tr>
						</thead>
						<tbody>
							@php
								$i = 0;
							@endphp
							@foreach($menulist as $menu)
									@php
										$i++;
									@endphp
									<tr>
										<td><div><span style="display:none;">{{$menu->id}}</span>{{$i}}</div></td>
										<td><div class="menunName">{{$menu->menuname}}</div></td>
										<td><div class="menunStatus">{{$menu->menustatus == 1 ? "Enable" : "Disable"}}</div></td>
										<td>
											<div class="tac">
												<a href="javascript:void(0)" attMenuEdit="{{$menu->id}}" title="edit" class="btn_edit btn_show_text">
													<span class="blind">Edit</span>
												</a>
												<a href="javascript:void(0)" attMenuDelete="{{$menu->id}}" title="delete" class="btn_delete btn_delete_menu">
													<span class="blind">Delete</span>
												</a>
											</div>
										</td>
									</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- //table_list -->

			</div>
			<!-- mycontent -->

@endsection
