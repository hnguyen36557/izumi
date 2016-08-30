<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>@yield('title')</title>

<meta name="robots" content="noindex, nofollow" />

<link rel="shortcut icon" href="{{ url('public/themes/assets/backend/images/icon.png') }}" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/themes/assets/backend/crown/css/main.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('public/themes/assets/backend/css/css.css') }}" media="screen" />


<script type="text/javascript">
	var admin_url 	= '';
	var base_url 	= '';
	var public_url 	= '';
</script>

<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/jquery-ui.min.js') }}"></script>

<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/spinner/jquery.mousewheel.js') }}"></script>

<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/forms/uniform.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/forms/jquery.tagsinput.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/forms/autogrowtextarea.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/forms/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/forms/jquery.inputlimiter.min.js') }}"></script>

<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/tables/datatable.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/tables/tablesort.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/tables/resizable.min.js') }}"></script>

<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.tipsy.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.collapsible.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.progress.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.timeentry.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.jgrowl.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.breadcrumbs.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/plugins/ui/jquery.sourcerer.js') }}"></script>

<script type="text/javascript" src="{{ url('public/themes/assets/backend/crown/js/custom.js') }}"></script>


<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/chosen/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/scrollTo/jquery.scrollTo.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/number/jquery.number.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/zclip/jquery.zclip.js') }}"></script>

<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/jquery/colorbox/jquery.colorbox.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/themes/assets/backend/js/jquery/colorbox/colorbox.css') }}" media="screen" />

<script type="text/javascript" src="{{ url('public/themes/assets/backend/js/custom_admin.js') }}"></script>
</head>

<body>
	
	<!-- Left side content -->
	<div id="left_content">
		<div id="leftSide" style="padding-top:30px;">
			@include('includes.backend.account-panel')
		</div>
		<div id="rightSide">
			@include('includes.backend.navbar')
			@yield('content')
			@include('includes.backend.footer')
		</div>


	</div>
</body>
</html>