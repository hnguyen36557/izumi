@extends('layouts.backend')
@section('title','Edit Product')
@section('content')

		<!-- Main content -->

<script type="text/javascript">
	(function($)
	{
		$(document).ready(function()
		{
			var main = $('#form');

			// Tabs
			main.contentTabs();
		});
	})(jQuery);
</script>

<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Danh Mục</h5>
			<span>Quản lý danh mục</span>
		</div>

		<div class="horControlB menu_action">
			<ul>
				<li><a href="/admin/product">
						<img src="{{ theme('backend/images/icons/control/16/list.png') }}" alt="">
						<span>Danh sách</span>
					</a></li>

			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>
<!-- Message -->
<!-- Main content wrapper -->
<div class="wrapper">

	<!-- Form -->
	<form class="form" id="form" action="{{ route('admin.product.update', $id) }}" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="{{ theme('backend/images/icons/dark/add.png') }}" class="titleIcon" />
					<h6>Thêm mới Sản phẩm</h6>
				</div>

				<ul class="tabs">
					<li><a href="#tab1">Thông tin chung</a></li>
					<li><a href="#tab2">SEO Onpage</a></li>
					<li><a href="#tab3">Bài viết</a></li>

				</ul>

				<div class="tab_container">
					<div id='tab1' class="tab_content pd0">
						<div class="formRow">
							<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" value="{{ old('name', isset($product) ? $product->name : null) }}"/></span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
							<div class="formRight">
								<div class="left"><input type="file"  id="image" name="images"  ></div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- Price -->
						<div class="formRow">
							<label class="formLeft" for="param_price">
								Giá :
								<span class="req">*</span>
							</label>
							<div class="formRight">
								<span class="oneTwo">
									<input name="price"  style='width:100px' id="param_price" class="format_number" _autocheck="true" type="text" value="{{ old('price', isset($product) ? $product->price : null) }}"/>
									<img class='tipS' title='Giá bán sử dụng để giao dịch' style='margin-bottom:-8px'  src='{{ theme('backend/crown/images/icons/notifications/information.png') }}'/>
								</span>
								<span name="price_autocheck" class="autocheck"></span>
								<div name="price_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Price -->
						<div class="formRow">
							<label class="formLeft" for="param_discount">
								Giảm giá (VNĐ)
								<span></span>:
							</label>
							<div class="formRight">
								<span>
									<input name="discount"  style='width:100px' id="param_discount" class="format_number"  type="text" value="{{ old('discount', isset($product) ? $product->discount : null) }}"/>
									<img class='tipS' title='Số tiền giảm giá' style='margin-bottom:-8px'  src='{{ theme('backend/crown/images/icons/notifications/information.png') }}'/>
								</span>
								<span name="discount_autocheck" class="autocheck"></span>
								<div name="discount_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<div class="formRow">
							<label class="formLeft" for="param_cat">Thể loại:<span class="req">*</span></label>
							<div class="formRight">
								<select name="sltParent" _autocheck="true" id='param_cat' class="left">
									<option value="">Lựa chọn danh mục</option>
									<?php cate_parent($parent,0,"--",$product["cate_id"]) ?>

								</select>
								<span name="cat_autocheck" class="autocheck"></span>
								<div name="cat_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- warranty -->
					</div>

					<div id='tab2' class="tab_content pd0" >

						<div class="formRow">
							<label class="formLeft" for="param_site_title">Title:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="site_title" id="param_site_title" _autocheck="true" rows="4" cols="">{{ old('site_title', isset($product) ? $product->title : null) }}</textarea></span>
								<span name="site_title_autocheck" class="autocheck"></span>
								<div name="site_title_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_meta_desc">Meta description:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="meta_desc" id="param_meta_desc" _autocheck="true" rows="4" cols="">{{ old('meta_desc', isset($product) ? $product->meta_desc : null) }}</textarea></span>
								<span name="meta_desc_autocheck" class="autocheck"></span>
								<div name="meta_desc_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_meta_key">Meta keywords:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="meta_key" id="param_meta_key" _autocheck="true" rows="4" cols="">{{ old('meta_key', isset($product) ? $product->meta_key : null) }}</textarea></span>
								<span name="meta_key_autocheck" class="autocheck"></span>
								<div name="meta_key_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>

					<div id='tab3' class="tab_content pd0">
						<div class="formRow">
							<label class="formLeft">Nội dung:</label>
							<div class="formRight">
								<textarea name="content" id="param_content" class="editor">{{ old('content', isset($product) ? $product->content : null) }}</textarea>
								<div name="content_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>


				</div><!-- End tab_container-->

				<div class="formSubmit">
					<input type="submit" value="Chỉnh sửa" class="redB" />
					<input type="reset" value="Hủy bỏ" class="basic" />
				</div>
				<div class="clear"></div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>
@endsection