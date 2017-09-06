	
	function showRequest(formData, jqForm, options) { 
        console.log("showRequest", formData, jqForm, options)
    } 
    function showResponse(response, statusText, xhr, $form)  { 
        console.log("showResponse", response, statusText, xhr, $form)
   }


// JavaScript Document
$(document).ready(function(){


	
	$('.form_wrap').hide();
	$( "body" ).on( "click", ".btn_form_wrap", function() {
		$('.form_wrap').toggle();
		$(this).toggleClass('on');
	});




	$( "body" ).on( "click", ".btn_saveMenu", function() {
		//var menuId 		= $('input.menuId').val();
		var menuName 	= $('input.menuName').val();
		var menuStatus	='';

		if($('.menuStatus').is(':checked')){
			$(".check_").attr ( "checked" ,"checked" );
			menuStatus=1;
		}else{
			$(".check_").removeAttr('checked');
			menuStatus=0;
		}

		var $dataSet = [menuName, menuStatus]; 

		$.ajax({

		    url		: '/admin/view_menu/insert',
		    type	: 'GET',
		    data 	: {'key': 'menu', 
		    		   'data' : $dataSet},
		    success	: function(data){
		    	alert(data);
		    	window.location = "/admin/menu";
		        console.log("Result:", data);
		    }
		});
	});


	$( "body" ).on( "click", ".btn_show_text", function() {
		var menuName 	= $(this).parents('tr').find('.menunName').text();
		var menuStatus	= $(this).parents('tr').find('.menunStatus').text();

		var attMenuEdit = $(this).attr('attMenuEdit');
		var idEdit		= $('.btn_edit_Menu').attr('attEdit',attMenuEdit);
		var txtmenuName = $('.menuName').val(menuName);
		if(menuStatus=='Enable'){
			$('.menuStatus').attr("checked", "checked");
			menuStatus=1;
		}else{
			$('.menuStatus').removeAttr("checked", "");
			menuStatus=0;
		}

	});

	$( "body" ).on( "click", ".btn_edit_Menu", function() {
		var menuId 		= $(this).attr('attEdit');
		var menuName 	= $('input.menuName').val();
		var menuStatus	='';
		
		if($('.menuStatus').is(':checked')){
			$(".check_").attr ( "checked" ,"checked" );
			menuStatus=1;
		}else{
			$(".check_").removeAttr('checked');
			menuStatus=0;
		}

		var $dataSet = [menuId, menuName, menuStatus];

		$.ajax({
		    url		: '/admin/view_menu/update',
		    type	: 'GET',
		    data 	: {
		    			'key'	: 'menu',
		    		   	'data' 	: $dataSet},
		    success	: function(data){
		    	//console.log("Result:", data);
		    	alert(data);
		    	window.location = "/admin/menu";
		    }
		});
	});


	function alertConfirm(Title, SMS, attMenuDelete){
		var Title	= $('.alert_tit').text(Title);
		var Title	= $('.comfirm_text').text(SMS);
		var attrButtonIDStore	= $('.btn_confirm').attr('attrIdStore',attMenuDelete);
		$('.alert_confirm').css({"display":"block"});
	}
	//alertConfirm(1, 2, 3, 4);

	$( "body" ).on( "click", ".btn_cancel_confirm", function() {
		$(this).parents('.alert_confirm').css({"display":"none"});
	});

	$( "body" ).on( "click", ".btn_delete_menu", function() {
		var attMenuDelete = $(this).attr('attMenuDelete');
		var attrButtonName = $('.btn_confirm').addClass('btn_deleteMenu_confirm');
		alertConfirm('Confirm Delete','Do you want to delete this menu?', attMenuDelete);

	});

	$( "body" ).on( "click", ".btn_deleteMenu_confirm", function() {

		var attMenuDelete = $(this).attr('attrIdStore');
		var $dataSet = [attMenuDelete];
		$.ajax({
		    url		: '/admin/view_menu/delete',
		    type	: 'GET',
		    data 	: {
		    			'key'	: 'menu',
		    		   	'data' 	: $dataSet},
		    success	: function(data){
		    	//console.log("Result:", data);
		    	window.location = "/admin/menu";
		    }
		});
		
		$(this).removeClass('btn_deleteMenu_confirm');
	});





	// Area(Add_slide) when click to browse img
	$('body').delegate('.btn_browImg','click',function(e){
		$(this).next('.browImg').click();
	});

/* ------------------------------------------------------upload images ------------------------------ */
	// Preview Image when we selected image
	var uploadimg=[];
	$('body').delegate('.browImg','change',function(){
		var url	=	$(this).val();
			url	=	url.split(",");
		var $this	=	$(this);
		var files	= this.files;
		$.each(files,function(i,file){
			var reader	=	new FileReader();
			reader.readAsDataURL(file);
			uploadimg.push(file);
			reader.onload	=	function(e){
				var storeImg	=	'<li  imagename="'+files[i].name+'">'+
										 '<a href="#none" class="btn_remove_Img">x</a>'+
										 '<img src="'+e.target.result+'" alt="" class="getImg">'+
									'</li>';
				$('.image_list ul').append(storeImg);
			};
		});
		console.log(uploadimg);
	});

	/* remove image on preview */
	$('body').delegate('.btn_remove_Img','click',function(){

		var liInd = $(this).parent('li').index();
		$(this).parents('li').remove();
		alert(liInd);
		$.each(uploadimg,function(i){
			if(i===liInd){ // 1 = number 1 json id
				uploadimg.splice(i,1);
			}
		});
		console.log(uploadimg);
	});





	// move image from file to folder directory
	uploadingImg	=	function(path,img){


	}
	// move image from file to folder directory


	
/* ------------------------------------------------------//upload images ------------------------------ */
	
	$('.postStatus').on('click', function () {
		if ($(this).is(":checked"))
		{	
		  $(this).val("enable");
		}else{
			$(this).val("disable");
		}
	});

	/* ---------------inser product to database ------------------*/
	$('body').delegate('.btn_insert_product','click',function(){ //Test

		var options = { 
        beforeSubmit:  showRequest,
        success:       showResponse,
	    };
	    
	    jQuery('#kv_upload').ajaxForm(options).submit();        


		// // set directory for image
		// uploadingImg('uploads', uploadimg);

		// // fields
		// var menuId       = $('.menuid').find(":selected").val();
		// var content      = (tinyMCE.activeEditor.getContent());
		// var productTitle = $('.pro_title').val(); 

		// var poststatus	='';
		// if($('.postStatus').is(':checked')){
		// 	$(".check_").attr ( "checked" ,"checked" );
		// 	poststatus=1;
		// }else{
		// 	$(".check_").removeAttr('checked');
		// 	poststatus=0;
		// }
		// //alert(poststatus);

		// // read image name
		// var allimg='empty.png';
		// $.each(uploadimg, function(key, value) {
		// 	allimg='';
		//  	allimg+=uploadimg[key]['name']+"|";
		// });
		// //console.log(allimg); 


		// // post to server
		// var $dataSet = [productTitle,allimg,content,poststatus,menuId]; 
		// $.ajax({
		// 	url		: '/admin/view_product/insert',
		//     type	: 'GET',
		//     data 	: {'key' : 'productpost', 
		//     		   'data': $dataSet},
		//     success	: function(data){
		//     	alert(data);
		//     	window.location = "/admin/product";
		//     }
		// });

	});
	/* -----------------------//inser product to database--------------- */


	// delect products and confirmation
	$('body').delegate('.btn_delete_product','click',function(){
		var id = $(this).attr("attProID");
		var attrButtonName = $('.btn_confirm').addClass('btn_deleteProduct_confirm');
		alertConfirm('Confirm Delete','Do you want to delete this this product?', id);
	});

	$( "body" ).on( "click", ".btn_deleteProduct_confirm", function() {

		var deleteID = $(this).attr('attrIdStore');
		var $dataSet = [deleteID];
		$.ajax({
		    url		: '/admin/view_procate/delete',
		    type	: 'GET',
		    data 	: {
		    			'key'	: 'productpost',
		    		   	'data' 	: $dataSet},
		    success	: function(data){
		    	//console.log("Result:", data);
		    	//alert(data);
		    	window.location = "/admin/product";
		    }
		});
		
		$(this).removeClass('btn_deleteProduct_confirm');
	});







	// Preview Image when we select image already

	$('body').delegate('.btn_insertMenuPost','click',function(){
		var content = (tinyMCE.activeEditor.getContent());
		var menuname = $('#menuname').find(":selected").val();
		//console.log(tinyMCE.activeEditor.getContent());
		//alert(menuname);
		//console.log(content);

		var contenttatus	='';

		if($('.contentStatus').is(':checked')){
			$(".check_").attr ( "checked" ,"checked" );
			contenttatus=1;
		}else{
			$(".check_").removeAttr('checked');
			contenttatus=0;
		}

		//alert(contenttatus);
		var $dataSet = [content, contenttatus, menuname]; 

		$.ajax({

		    url		: '/admin/view_menu_post/insert',
		    type	: 'GET',
		    data 	: {'key': 'contentpost', 
		    		   'data' : $dataSet},
		    success	: function(data){
		    	window.location = "/admin/menupost";
		        alert(data);
		    }
		});
	});



	$('body').delegate('.btn_edit_menupost','click',function(){
		$('.form_wrap').show();
		var attEdit_menuPost= $(this).attr("attMenuPostEdit");
		var attUpdateContentPost=$('.btn_update_contentpost').attr('attEditContentPost',attEdit_menuPost);
		var txt_menuname	= $(this).parents('tr').find('.txt_menuname').text();
		var val_menuId		= $(this).parents('tr').find('.val_menu_id').text();
		var txt_dsc			= $(this).parents('tr').find('.txt_dsc').text();
		$('#menuname option').each(function() {
			if($(this).val() == val_menuId) {
				$(this).attr('select','selected');
				$(this).siblings('option').attr('select','');
				$(this).prop("selected", true);
			}
		});
		tinyMCE.activeEditor.setContent(txt_dsc);
	});

	$('body').delegate('.btn_update_contentpost','click',function(){
		var  id= $(this).attr("attEditContentPost");
		var content = (tinyMCE.activeEditor.getContent());
		var menuId = $('#menuname').find(":selected").val();

		var $dataSet = [id,content,menuId];

		$.ajax({
		    url		: '/admin/view_menu_post/update',
		    type	: 'GET',
		    data 	: {
		    			'key'	: 'contentpost',
		    		   	'data' 	: $dataSet},
		    success	: function(data){
		    	//console.log("Result:", data);
		    	alert(data);
		    	window.location = "/admin/menupost";
		    }
		});
		
	});

	$('body').delegate('.btn_delete_menupost','click',function(){
			var deleteID = $(this).attr("attMenuPostDelete");
			var attrButtonName = $('.btn_confirm').addClass('btn_deleteContentPost_confirm');
			alertConfirm('Confirm Delete','Do you want to delete this content?', deleteID);
	});

	$( "body" ).on( "click", ".btn_deleteContentPost_confirm", function() {

		var attMenuDelete = $(this).attr('attrIdStore');
		var $dataSet = [attMenuDelete];
		$.ajax({
		    url		: '/admin/view_menu/delete',
		    type	: 'GET',
		    data 	: {
		    			'key'	: 'contentpost',
		    		   	'data' 	: $dataSet},
		    success	: function(data){
		    	//console.log("Result:", data);
		    	//alert(data);
		    	window.location = "/admin/menupost";
		    }
		});
		
		$(this).removeClass('btn_deleteContentPost_confirm');
	});




	/* products category */

	$('body').delegate('.btn_insert_subcate','click',function(){
		var menuid  	= $('#menuname').find(":selected").val();
		var cateName 	= $('input.cateName').val();
		var cateStatus	='';

		if($('.cateStatus').is(':checked')){
			$(".check_").attr ( "checked" ,"checked" );
			cateStatus=1;
		}else{
			$(".check_").removeAttr('checked');
			cateStatus=0;
		}

		//alert(menuid);

		var $dataSet = [cateName, cateStatus, menuid]; 

		$.ajax({

		    url		: '/admin/view_procate/insert',
		    type	: 'GET',
		    data 	: {'key': 'procate', 
		    		   'data' : $dataSet},
		    success	: function(data){
		    	window.location = "/admin/procate";
		    	alert(data);
		        console.log("Result:", data);
		    }
		});
	});

	$('body').delegate('.btn_show_cate','click',function(){
		var attCateID= $(this).attr("attCateID");
		var attEditCateID= $('.btn_edit_category').attr("attEditCateID",attCateID);
		var txt_catename	= $(this).parents('tr').find('.txt_catename').text();
		var cateName = $('.cateName').val(txt_catename);

		var val_menuId		= $(this).parents('tr').find('.val_menu_id').text();
		$('#menuname option').each(function() {
			if($(this).val() == val_menuId) {
				$(this).attr('select','selected');
				$(this).siblings('option').attr('select','');
				$(this).prop("selected", true);
			}
		});

		var cateStatus	= $(this).parents('tr').find('.cateStatus').text();
		if(cateStatus=='Enable'){
			$('.cateStatus').attr("checked", "checked");
			cateStatus=1;
		}else{
			$('.cateStatus').removeAttr("checked", "");
			cateStatus=0;
		}
		//alert(val_menuId);
	});

	$('body').delegate('.btn_edit_category','click',function(){
		var id = $(this).attr("attEditCateID");
		var menuid  	= $('#menuname').find(":selected").val();
		var cateName 	= $('input.cateName').val();
		var cateStatus	='';

		if($('.cateStatus').is(':checked')){
			$(".check_").attr ( "checked" ,"checked" );
			cateStatus=1;
		}else{
			$(".check_").removeAttr('checked');
			cateStatus=0;
		}

		var $dataSet = [id, cateName, cateStatus, menuid];

		$.ajax({

		    url		: '/admin/view_procate/update',
		    type	: 'GET',
		    data 	: {'key': 'procate', 
		    		   'data' : $dataSet},
		    success	: function(data){
		    	alert(data);
		    	window.location = "/admin/procate"
		        //console.log("Result:", data);
		    }
		});

	});


	$('body').delegate('.btn_delete_cate','click',function(){
			var deleteID = $(this).attr("attDelCateID");
			var attrButtonName = $('.btn_confirm').addClass('btn_deleteCategory_confirm');
			alertConfirm('Confirm Delete','Do you want to delete this category?', deleteID);
	});

	$( "body" ).on( "click", ".btn_deleteCategory_confirm", function() {

		var deleteID = $(this).attr('attrIdStore');
		var $dataSet = [deleteID];
		$.ajax({
		    url		: '/admin/view_procate/delete',
		    type	: 'GET',
		    data 	: {
		    			'key'	: 'procate',
		    		   	'data' 	: $dataSet},
		    success	: function(data){
		    	//console.log("Result:", data);
		    	//alert(data);
		    	window.location = "/admin/procate";
		    }
		});
		
		$(this).removeClass('btn_deleteCategory_confirm');
	});


});
