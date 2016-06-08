<?php if(!defined("__XE__"))exit;?><meta name="viewport" content="width=device-width; initial-scale=1.0">
<!--#Meta:layouts/pni_layout/user_layout.css--><?php $__tmp=array('layouts/pni_layout/user_layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/pni_layout/ui_object_layout.css--><?php $__tmp=array('layouts/pni_layout/ui_object_layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/pni_layout/ui_object_color_font_mouseoverEffect.css--><?php $__tmp=array('layouts/pni_layout/ui_object_color_font_mouseoverEffect.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/pni_layout/user_layout.js--><?php $__tmp=array('layouts/pni_layout/user_layout.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!-- user_layout -->
<div class="user_layout">
	<!-- header -->
	
	<div class="header">
		<!-- aux -->
		<div class="aux">
				<div class="logo_box">
					<a href="<?php echo geturl('') ?>" id="siteTitle" class="logoBox">
						<?php if(!Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){ ?><img src="/xe/layouts/pni_layout/img/pni_logo.svg" alt="PNILogo"><?php } ?>
						<?php if(Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){;
echo Context::getSiteTitle();
} ?>
						<?php if($__Context->layout_info->LOGO_IMG){ ?><img src="<?php echo $__Context->layout_info->LOGO_IMG ?>" alt="<?php echo $__Context->layout_info->LOGO_TEXT ?>"><?php } ?>
						<?php if(!$__Context->layout_info->LOGO_IMG && $__Context->layout_info->LOGO_TEXT){;
echo $__Context->layout_info->LOGO_TEXT;
} ?>
					</a>
				</div>
				<!-- gnb  -->
				<div class="gnb">
					<ul class="gnbMenu">
						<?php if($__Context->global_menu->list&&count($__Context->global_menu->list))foreach($__Context->global_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
							<a class="mainMenuLink" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
							<?php if($__Context->val1['list']){ ?><ul class="subMenu">
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
									<a class="subMenuLink" href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
								</li><?php } ?>
							</ul><?php } ?>
						</li><?php } ?>
					</ul>
				</div>
				<!-- // gnb -->
				<!-- side -->
				<div class="side">
					<img widget="login_info" skin="default"/>
				</div>
				<!-- // side -->
				<!-- search_box -->
				<!-- <div class="search_box">
						<form action="<?php echo getUrl() ?>" method="get" class="search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
							<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="act" value="IS" />
							<input id="q" type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" />
							<input id="searchBtn" type="image" alt="search" src="/xe/layouts/pni_layout/img/search_icon.jpg" value="<?php echo $__Context->lang->cmd_search ?>" />
						</form>
				</div> -->
				<!-- // search_box -->
		</div>
		<!-- // aux -->
	</div>
	<!-- // header -->
	<!-- nav_space -->
    <div class="nav_space"></div>
    <!-- // nav_space -->
	<!-- body main sub-->
	<div<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?> class="body main"<?php };
if($__Context->layout_info->LAYOUT_TYPE=='SUB_PAGE'){ ?> class="body sub"<?php } ?>>
		<!-- content -->
		<div class="content" id="content">
			<?php echo $__Context->content ?>
		</div>
		<!-- // content-->
	</div>
	<!-- // body main sub-->
	<!-- footer -->
	<footer class="footer">
		<div class="footer_logo"></div>
		<?php if(!$__Context->layout_info->FOOTER){ ?><p>Powered by <a href="http://xpressengine.com/">XE</a>.</p><?php } ?>
		<?php if($__Context->layout_info->FOOTER){ ?><p><?php echo $__Context->layout_info->FOOTER ?></p><?php } ?>
	</footer>
	<!-- // footer -->
</div>
<!-- // user_layout -->
