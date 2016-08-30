<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Đăng Nhập</title>

<meta name="robots" content="noindex, nofollow" />

<link rel="shortcut icon" href="{{ theme('backend/images/icon.png') }}" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="{{ theme('backend/crown/css/main.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ theme('backend/css/css.css') }}" media="screen" />


<script type="text/javascript">
	var admin_url 	= '';
	var base_url 	= '';
	var public_url 	= '';
</script>

<script type="text/javascript" src="{{ theme('backend/js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/js/jquery/jquery-ui.min.js') }}"></script>

<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/spinner/jquery.mousewheel.js') }}"></script>

<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/forms/uniform.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/forms/jquery.tagsinput.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/forms/autogrowtextarea.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/forms/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/forms/jquery.inputlimiter.min.js') }}"></script>

<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/tables/datatable.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/tables/tablesort.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/tables/resizable.min.js') }}"></script>

<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.tipsy.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.collapsible.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.progress.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.timeentry.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.jgrowl.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.breadcrumbs.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/crown/js/plugins/ui/jquery.sourcerer.js') }}"></script>

<script type="text/javascript" src="{{ theme('backend/crown/js/custom.js') }}"></script>


<script type="text/javascript" src="{{ theme('backend/js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/js/jquery/chosen/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/js/jquery/scrollTo/jquery.scrollTo.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/js/jquery/number/jquery.number.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/js/jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js') }}"></script>
<script type="text/javascript" src="{{ theme('backend/js/jquery/zclip/jquery.zclip.js') }}"></script>

<script type="text/javascript" src="{{ theme('backend/js/jquery/colorbox/jquery.colorbox.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{  theme('backend/js/jquery/colorbox/colorbox.css') }}" media="screen" />

<script type="text/javascript" src="{{ theme('backend/js/custom_admin.js') }}"></script>
</head>

<body class="nobg loginPage" style="min-height:100%;">

	<!-- Main content wrapper -->
	<div class="loginWrapper" style="top:45%;">
	
	    <div class="widget" id="admin_login" style="height:auto; margin:auto;">
	        <div class="title"><img src="{{ theme('backend/images/icons/dark/laptop.png') }}" alt="" class="titleIcon" />
	        	<h6>Đăng nhập</h6>
	        </div>
	        
	        <form class="form" id="form" action="" method="post">
	           <fieldset>
	                <div class="formRow">
	                    <label for="param_username">Tên đăng nhập:</label>
	                    <div class="loginInput"><input type="text" name="username" id="param_username" /></div>
	                    <div class="clear"></div>
	                </div>
	                
	                <div class="formRow">
	                    <label for="param_password">Mật khẩu:</label>
	                    <div class="loginInput"><input type="password" name="password" id="param_password" /></div>
	                    <div class="clear"></div>
	                </div>
	                
	                <div class="loginControl">
	                    <input type='hidden' name="submit" value='1'/>
	                    <input type="submit"  value="Đăng nhập" class="dredB logMeIn" />
	                    <div class="clear"></div>
	                </div>
	            </fieldset>
	        </form>
	    </div>
	    
	</div>    
	
	<!-- Footer line -->
	<div id="footer">
				<div class="wrapper">Bản quyền © 2012-2016 hocphp.info</div>
	</div>

</body>
</html>