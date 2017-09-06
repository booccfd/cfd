@extends('admin/layout')

@section('content')
<div class="cnt_wrap">


			<!-- title_wrap -->
			<div class="tit_wrap cboth">
				<div class="flt">
					<h3 class="tit_h3">PRODUCTS </h3>
				</div>
				<div class="frt">
					<a href="#none" class="btn_delete"><span>Confirm Ordered</span></a>
				</div>
			</div>
			<!-- //title_wrap -->
				
			<!-- mycontent -->
			<div class="mycnt">
				<!-- table input -->
				<div class="tbl_ipt">
					<table summary="">
						<caption></caption>
						<colgroup>
							<col style="width:120px;">
							<col style="width:200px;">
							<col style="width:100px;">
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
					<a href="#none" class="btn_red btn_deleteMenu" attDelete="">Delete</a>
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
						<col style="width:100px;">
						<col style="width:100px;">
						<col style="width:140px;">
						</colgroup>
						<thead>
							<tr>
								<th><div>No</div></th>
								<th><div>Name Eng</div></th>
								<th><div>Qty</div></th>
								<th><div>Discount</div></th>
								<th><div class="tar">Price</div></th>
								<th><div class="tac">Action</div></th>
							</tr>
						</thead>
						<tbody>
							<tr>
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
							</tr>
							<tr>
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
							</tr>
							<tr>
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
							</tr>
						</tbody>
					</table>
				</div>
				<!-- //table_list -->
			</div>
			<!-- mycontent -->
		</div>
@endsection