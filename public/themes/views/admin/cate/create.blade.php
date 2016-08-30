@extends('layouts.backend')
@section('title','Add Category')
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
				<li><a href="/admin/cate"><img src="{{ theme('backend/images/icons/control/16/list.png') }}"/><span>Danh sách</span></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>
<!-- Main content wrapper -->
<div class="wrapper">
	<!-- Form -->
	<form class="form" id="form" action="{{ route('admin.cate.store') }}" method="post">
		{{ csrf_field() }}
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="{{ theme('backend/images/icons/dark/add.png') }}" class="titleIcon" />
					<h6>Thêm mới Danh mục</h6>
				</div>
				<div class="tab_container">
					<div id='tab1' class="tab_content pd0">
						<div class="formRow">
							@if (count($errors) > 0)
								<div style="color: red;">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
						</div>
						<div class="formRow">
							<label class="formLeft" for="param_cat">Danh mục cha:<span class="req">*</span></label>
							<div class="formRight">
								<select name="sltParent" _autocheck="true" id='param_cat' class="left">
									<option value="">Lựa chọn danh mục</option>
									<!-- kiem tra danh muc co danh muc con hay khong -->
									<?php cate_parent($parent); ?>
								</select>
								<span name="cat_autocheck" class="autocheck"></span>
								<div name="cat_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
					</div><!-- End tab_container-->
					<div class="formRow">
						<label class="formLeft" for="name">Tên:<span class="req">*</span></label>
						<div class="formRight">
							<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" /></span>
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="formSubmit">
						<input type="submit" value="Thêm mới" class="redB" />
						<input type="reset" value="Hủy bỏ" class="basic" />
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>
@endsection