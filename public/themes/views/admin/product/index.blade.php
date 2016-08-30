@extends('layouts.backend')
@section('title','Product')
@section('content')
		<!-- Main content -->
<script type="text/javascript">
	(function($)
	{
		$(document).ready(function()
		{
			var main = $('#main_product');

			// Tips
			main.find('.tipN').tipsy({gravity:'n', fade:false, html:true});
			main.find('.tipS').tipsy({gravity:'s', fade:false, html:true});
			main.find('.tipW').tipsy({gravity:'w', fade:false, html:true});
			main.find('.tipE').tipsy({gravity:'e', fade:false, html:true});

			// Tooltip
			main.find('[_tooltip]').nstUI({
				method:	'tooltip'
			});
		});
	})(jQuery);
</script>
<!-- Common view -->
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
			<h5>Sản phẩm</h5>
			<span>Quản lý sản phẩm</span>
		</div>

		<div class="horControlB menu_action">
			<ul>
				<li><a href="/admin/product/create"><img src="{{ url('public/themes/assets/backend/images/icons/control/16/add.png') }}" /><span>Thêm mới</span></a></li>
			</ul>
		</div>

		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>
<!-- Message -->
<!-- Main content wrapper -->
<div class="wrapper" id="main_product">
	<div class="widget">

		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách sản phẩm</h6>
			<div class="num f12">Số lượng: <b>0</b></div>
		</div>

		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			<thead>
			<tr>
				<td style="width:21px;"><img src="{{ url('public/themes/assets/backend/images/icons/tableArrows.png') }}" /></td>
				<td style="width:60px;">STT</td>
				<td>Tên</td>
				<td>Danh mục</td>
				<td>Giá</td>
				<td style="width:75px;">Ngày/giờ tạo</td>
				<td style="width:120px;">Hành động</td>
			</tr>
			</thead>

			<tfoot class="auto_check_pages">
			<tr>
				<td colspan="7">
					<div class="list_action itemActions">
						<a href="#submit" id="submit" class="button blueB" url="admin/product/del_all.html">
							<span style='color:white;'>Xóa hết</span>
						</a>
					</div>
					<div class='pagination'></div>
				</td>
			</tr>
			</tfoot>

			<tbody class="list_item">
			<?php $stt =0 ?>
				@foreach($product as $item)
					<?php $stt = $stt+1 ?>
					<tr class='row_9'>
						<td><input type="checkbox" name="id[]" value="9" /></td>
						<td class="textC">{{ $stt }}</td>
						<td>
							<div class="image_thumb">
								<img src="{{ asset('public/uploads/images/'.$item["image"]) }}" height="50">
								<div class="clear"></div>
							</div>

							<a href="product/view/9.html" class="tipS" title="" target="_blank">
								<b>{{ $item["name"] }}</b>
							</a>

							{{--<div class="f11" >Đã bán: 0 | Xem: 20</div>--}}
						</td>
						<td>
							<?php $cate = DB::table('cates')->where('id',$item["cate_id"])->first(); ?>
							@if(!empty($cate->name))
								{!! $cate->name !!}
							@endif
						</td>
						<td class="textR">{{ $item["price"]  }} VNĐ
							{{--<p style='text-decoration:line-through'>{{ $item["discount"] }} VNĐ</p>--}}
						</td>
						<td class="textC">
<!--							--><?php
//							echo \Carbon\Carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans();//thư viện carbon tạo ra thời gian hiện tại
//							?>
							{{ $item["created_at"] }}
						</td>
						<td class="option textC">
							{{--<a href="" title="Gán là nhạc tiêu biểu" class="tipE">--}}
								{{--<img src="{{url('public/themes/assets/backend/images/icons/color/star.png') }}" />--}}
							{{--</a>--}}
							{{--<a  href="product/view/9.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">--}}
								{{--<img src="{{url('public/themes/assets/backend/images/icons/color/view.png') }}" />--}}
							{{--</a>--}}
							<a href="/admin/product/{{ $item['id'] }}/edit" title="Chỉnh sửa" class="tipS">
								<img src="{{url('public/themes/assets/backend/images/icons/color/edit.png') }}" />
							</a>

							<a href="/admin/product/{{ $item['id'] }}/delete" title="Xóa" class="tipS verify_action" >
								<img src="{{url('public/themes/assets/backend/images/icons/color/delete.png') }}" />
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>
	</div>

</div>
<div class="clear mt30"></div>
@endsection