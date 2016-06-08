<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "0";
$layout_info->layout = "user_layout";
$layout_info->type = "";
$layout_info->path = "./layouts/user_layout/";
$layout_info->title = "PNISolution 레이아웃";
$layout_info->description = "PNISolution용 레이아웃.";
$layout_info->version = "0.3";
$layout_info->date = "20150615";
$layout_info->homepage = "";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "김대용";
$layout_info->author[0]->email_address = "kevin@a2sys.co.kr";
$layout_info->author[0]->homepage = "http://a2sys.co.kr/";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->LAYOUT_TYPE = new stdClass;
$layout_info->extra_var->LAYOUT_TYPE->group = "";
$layout_info->extra_var->LAYOUT_TYPE->title = "레이아웃 유형";
$layout_info->extra_var->LAYOUT_TYPE->type = "select";
$layout_info->extra_var->LAYOUT_TYPE->value = $vars->LAYOUT_TYPE;
$layout_info->extra_var->LAYOUT_TYPE->description = "";
$layout_info->extra_var->LAYOUT_TYPE->options = array();
$layout_info->extra_var->LAYOUT_TYPE->options["MAIN_PAGE"] = new stdClass;
$layout_info->extra_var->LAYOUT_TYPE->options["MAIN_PAGE"]->val = "Main Page(1Column=GNB+Content)";
$layout_info->extra_var->LAYOUT_TYPE->options["SUB_PAGE"] = new stdClass;
$layout_info->extra_var->LAYOUT_TYPE->options["SUB_PAGE"]->val = "Sub Page(2Column=GNB+LNB+Content)";
$layout_info->extra_var->LOGO_IMG = new stdClass;
$layout_info->extra_var->LOGO_IMG->group = "";
$layout_info->extra_var->LOGO_IMG->title = "사이트 로고 이미지";
$layout_info->extra_var->LOGO_IMG->type = "image";
$layout_info->extra_var->LOGO_IMG->value = $vars->LOGO_IMG;
$layout_info->extra_var->LOGO_IMG->description = "";
$layout_info->extra_var->LOGO_TEXT = new stdClass;
$layout_info->extra_var->LOGO_TEXT->group = "";
$layout_info->extra_var->LOGO_TEXT->title = "사이트 로고 문자";
$layout_info->extra_var->LOGO_TEXT->type = "text";
$layout_info->extra_var->LOGO_TEXT->value = $vars->LOGO_TEXT;
$layout_info->extra_var->LOGO_TEXT->description = "";
$layout_info->extra_var->FOOTER = new stdClass;
$layout_info->extra_var->FOOTER->group = "";
$layout_info->extra_var->FOOTER->title = "사이트 풋터 문자";
$layout_info->extra_var->FOOTER->type = "textarea";
$layout_info->extra_var->FOOTER->value = $vars->FOOTER;
$layout_info->extra_var->FOOTER->description = "";
$layout_info->extra_var_count = "4";
$layout_info->menu_count = "1";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "global_menu";
$layout_info->menu->global_menu = new stdClass;
$layout_info->menu->global_menu->name = "global_menu";
$layout_info->menu->global_menu->title = "전역 메뉴";
$layout_info->menu->global_menu->maxdepth = "3";
$layout_info->menu->global_menu->menu_srl = $vars->global_menu;
$layout_info->menu->global_menu->xml_file = "./files/cache/menu/".$vars->global_menu.".xml.php";
$layout_info->menu->global_menu->php_file = "./files/cache/menu/".$vars->global_menu.".php";