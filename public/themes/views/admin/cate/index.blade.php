@extends('layouts.backend')
@section('title','Category')
@section('content')
	    <!-- Main content -->
		<!-- Common -->
<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Danh mục</h5>
			<span>Quản lý thể loại</span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="/admin/cate/create"><img src="{{ url('public/themes/assets/backend/images/icons/control/16/add.png') }}" /><span>Thêm mới</span></a></li>
				
				{{--<li><a href="/admin/cate.html">--}}
					{{--<img src="{{ url('public/themes/assets/backend/images/icons/control/16/list.png') }}" />--}}
					{{--<span>Danh sách</span>--}}
				{{--</a></li>--}}
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>
<!-- Message -->
<!-- Main content wrapper -->
<div class="wrapper">

	<!-- Static table -->
	<div class="widget" id='main_content'>
		<div class="formRow">
			@if (Session::has('success'))
				<div style="color: #2fdab8">
					<strong>
						<i class="fa fa-check-circle fa-lg fa-fw"></i> Thành Công!.
					</strong>
					{{ Session::get('success') }}
				</div>
			@endif
		</div>
		<div class="title">
		    <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách Danh mục</h6>
			{{--<div class="num f12">Tổng số: <b>18</b></div>--}}
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
			<thead>
				<tr>
				    <td style="width:21px;"><img src="{{ url('public/themes/assets/backend/images/icons/tableArrows.png') }}" /></td>
					<td>Tên</td>
					<td>Danh Mục Cha</td>
					<td style="width:150px;">Hành động</td>
				</tr>
			</thead>
			
			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="4">
					     {{--<div class="list_action itemActions">--}}
								{{--<a href="#submit" id="submit" class="button blueB" url="#">--}}
									{{--<span style='color:white;'>Xóa hết</span>--}}
								{{--</a>--}}
						 {{--</div>--}}
							{{----}}
					     {{--<div class='pagination'>--}}
			               {{--&nbsp;<strong>1</strong>&nbsp;<a href="admin/cat/index/10">2</a>&nbsp;<a href="admin/cat/index/10">Trang kế tiếp</a>&nbsp;	--}}
			             {{--</div>--}}
					</td>
				</tr>
			</tfoot>
			
			<tbody>
				@foreach($cate as $item)
					<tr class='row_18'>
						<td><input type="checkbox" name="id[]" value="18" /></td>
						<td>{{$item->name}}</td>
						<td>
							@if ($item["parent_id"] == 0)
								{!! "Chưa có" !!}
							@else
								<?php
								$parent = DB::table('cates')->where('id',$item->parent_id)->first();
								if ($parent!=null) {
									echo $parent->name;
								}
								?>
							@endif
						</td>
						<td class="option">
							<a href="/admin/cate/{{ $item->id }}/edit" title="Chỉnh sửa" class="tipS ">
								<img src="{{ url('public/themes/assets/backend/images/icons/color/edit.png') }}" />
							</a>

							<a href="/admin/cate/{{ $item->id }}/delete" title="Xóa" class="tipS verify_action">
								<img src="{{ url('public/themes/assets/backend/images/icons/color/delete.png') }}" />
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