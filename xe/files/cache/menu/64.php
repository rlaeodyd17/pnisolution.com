<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[400] = array("en"=>"회사 소개","ko"=>"회사 소개","jp"=>"회사 소개","zh-CN"=>"회사 소개","zh-TW"=>"회사 소개","fr"=>"회사 소개","de"=>"회사 소개","ru"=>"회사 소개","es"=>"회사 소개","tr"=>"회사 소개","vi"=>"회사 소개","mn"=>"회사 소개",); $_menu_names[184] = array("en"=>"CEO 인사말","ko"=>"CEO 인사말","jp"=>"CEO 인사말","zh-CN"=>"CEO 인사말","zh-TW"=>"CEO 인사말","fr"=>"CEO 인사말","de"=>"CEO 인사말","ru"=>"CEO 인사말","es"=>"CEO 인사말","tr"=>"CEO 인사말","vi"=>"CEO 인사말","mn"=>"CEO 인사말",); $_menu_names[186] = array("en"=>"회사 개요","ko"=>"회사 개요","jp"=>"회사 개요","zh-CN"=>"회사 개요","zh-TW"=>"회사 개요","fr"=>"회사 개요","de"=>"회사 개요","ru"=>"회사 개요","es"=>"회사 개요","tr"=>"회사 개요","vi"=>"회사 개요","mn"=>"회사 개요",); $_menu_names[192] = array("en"=>"사업장 소개","ko"=>"사업장 소개","jp"=>"사업장 소개","zh-CN"=>"사업장 소개","zh-TW"=>"사업장 소개","fr"=>"사업장 소개","de"=>"사업장 소개","ru"=>"사업장 소개","es"=>"사업장 소개","tr"=>"사업장 소개","vi"=>"사업장 소개","mn"=>"사업장 소개",); $_menu_names[365] = array("en"=>"자료실","ko"=>"자료실","jp"=>"자료실","zh-CN"=>"자료실","zh-TW"=>"자료실","fr"=>"자료실","de"=>"자료실","ru"=>"자료실","es"=>"자료실","tr"=>"자료실","vi"=>"자료실","mn"=>"자료실",); $_menu_names[363] = array("en"=>"공지사항","ko"=>"공지사항","jp"=>"공지사항","zh-CN"=>"공지사항","zh-TW"=>"공지사항","fr"=>"공지사항","de"=>"공지사항","ru"=>"공지사항","es"=>"공지사항","tr"=>"공지사항","vi"=>"공지사항","mn"=>"공지사항",); $_menu_names[412] = array("en"=>"EMC Tool Distribution","ko"=>"EMC Tool Distribution","jp"=>"EMC Tool Distribution","zh-CN"=>"EMC Tool Distribution","zh-TW"=>"EMC Tool Distribution","fr"=>"EMC Tool Distribution","de"=>"EMC Tool Distribution","ru"=>"EMC Tool Distribution","es"=>"EMC Tool Distribution","tr"=>"EMC Tool Distribution","vi"=>"EMC Tool Distribution","mn"=>"EMC Tool Distribution",); $_menu_names[416] = array("en"=>"PDNExpert","ko"=>"PDNExpert","jp"=>"PDNExpert","zh-CN"=>"PDNExpert","zh-TW"=>"PDNExpert","fr"=>"PDNExpert","de"=>"PDNExpert","ru"=>"PDNExpert","es"=>"PDNExpert","tr"=>"PDNExpert","vi"=>"PDNExpert","mn"=>"PDNExpert",); $_menu_names[411] = array("en"=>"EMIStream","ko"=>"EMIStream","jp"=>"EMIStream","zh-CN"=>"EMIStream","zh-TW"=>"EMIStream","fr"=>"EMIStream","de"=>"EMIStream","ru"=>"EMIStream","es"=>"EMIStream","tr"=>"EMIStream","vi"=>"EMIStream","mn"=>"EMIStream",); $_menu_names[424] = array("en"=>"PIStream","ko"=>"PIStream","jp"=>"PIStream","zh-CN"=>"PIStream","zh-TW"=>"PIStream","fr"=>"PIStream","de"=>"PIStream","ru"=>"PIStream","es"=>"PIStream","tr"=>"PIStream","vi"=>"PIStream","mn"=>"PIStream",); $_menu_names[427] = array("en"=>"EMC Visualizing System","ko"=>"EMC Visualizing System","jp"=>"EMC Visualizing System","zh-CN"=>"EMC Visualizing System","zh-TW"=>"EMC Visualizing System","fr"=>"EMC Visualizing System","de"=>"EMC Visualizing System","ru"=>"EMC Visualizing System","es"=>"EMC Visualizing System","tr"=>"EMC Visualizing System","vi"=>"EMC Visualizing System","mn"=>"EMC Visualizing System",); $_menu_names[407] = array("en"=>"PCB Design","ko"=>"PCB Design","jp"=>"PCB Design","zh-CN"=>"PCB Design","zh-TW"=>"PCB Design","fr"=>"PCB Design","de"=>"PCB Design","ru"=>"PCB Design","es"=>"PCB Design","tr"=>"PCB Design","vi"=>"PCB Design","mn"=>"PCB Design",); $_menu_names[208] = array("en"=>"PCB Artwork","ko"=>"PCB Artwork","jp"=>"PCB Artwork","zh-CN"=>"PCB Artwork","zh-TW"=>"PCB Artwork","fr"=>"PCB Artwork","de"=>"PCB Artwork","ru"=>"PCB Artwork","es"=>"PCB Artwork","tr"=>"PCB Artwork","vi"=>"PCB Artwork","mn"=>"PCB Artwork",); $_menu_names[942] = array("en"=>"PCB 제작 및 실장","ko"=>"PCB 제작 및 실장","jp"=>"PCB 제작 및 실장","zh-CN"=>"PCB 제작 및 실장","zh-TW"=>"PCB 제작 및 실장","fr"=>"PCB 제작 및 실장","de"=>"PCB 제작 및 실장","ru"=>"PCB 제작 및 실장","es"=>"PCB 제작 및 실장","tr"=>"PCB 제작 및 실장","vi"=>"PCB 제작 및 실장","mn"=>"PCB 제작 및 실장",); $_menu_names[1217] = array("en"=>"Simulation","ko"=>"Simulation","jp"=>"Simulation","zh-CN"=>"Simulation","zh-TW"=>"Simulation","fr"=>"Simulation","de"=>"Simulation","ru"=>"Simulation","es"=>"Simulation","tr"=>"Simulation","vi"=>"Simulation","mn"=>"Simulation",); $_menu_names[919] = array("en"=>"SI(Signal Integrity) Simulation","ko"=>"SI(Signal Integrity) Simulation","jp"=>"SI(Signal Integrity) Simulation","zh-CN"=>"SI(Signal Integrity) Simulation","zh-TW"=>"SI(Signal Integrity) Simulation","fr"=>"SI(Signal Integrity) Simulation","de"=>"SI(Signal Integrity) Simulation","ru"=>"SI(Signal Integrity) Simulation","es"=>"SI(Signal Integrity) Simulation","tr"=>"SI(Signal Integrity) Simulation","vi"=>"SI(Signal Integrity) Simulation","mn"=>"SI(Signal Integrity) Simulation",); $_menu_names[922] = array("en"=>"PI(Power Integrity) Simulaton","ko"=>"PI(Power Integrity) Simulaton","jp"=>"PI(Power Integrity) Simulaton","zh-CN"=>"PI(Power Integrity) Simulaton","zh-TW"=>"PI(Power Integrity) Simulaton","fr"=>"PI(Power Integrity) Simulaton","de"=>"PI(Power Integrity) Simulaton","ru"=>"PI(Power Integrity) Simulaton","es"=>"PI(Power Integrity) Simulaton","tr"=>"PI(Power Integrity) Simulaton","vi"=>"PI(Power Integrity) Simulaton","mn"=>"PI(Power Integrity) Simulaton",); $_menu_names[406] = array("en"=>"Consulting","ko"=>"Consulting","jp"=>"Consulting","zh-CN"=>"Consulting","zh-TW"=>"Consulting","fr"=>"Consulting","de"=>"Consulting","ru"=>"Consulting","es"=>"Consulting","tr"=>"Consulting","vi"=>"Consulting","mn"=>"Consulting",); $_menu_names[210] = array("en"=>"Consulting","ko"=>"Consulting","jp"=>"Consulting","zh-CN"=>"Consulting","zh-TW"=>"Consulting","fr"=>"Consulting","de"=>"Consulting","ru"=>"Consulting","es"=>"Consulting","tr"=>"Consulting","vi"=>"Consulting","mn"=>"Consulting",); $_menu_names[1010] = array("en"=>"EMI 저감 PCB 설계 기술","ko"=>"EMI 저감 PCB 설계 기술","jp"=>"EMI 저감 PCB 설계 기술","zh-CN"=>"EMI 저감 PCB 설계 기술","zh-TW"=>"EMI 저감 PCB 설계 기술","fr"=>"EMI 저감 PCB 설계 기술","de"=>"EMI 저감 PCB 설계 기술","ru"=>"EMI 저감 PCB 설계 기술","es"=>"EMI 저감 PCB 설계 기술","tr"=>"EMI 저감 PCB 설계 기술","vi"=>"EMI 저감 PCB 설계 기술","mn"=>"EMI 저감 PCB 설계 기술",); $_menu_names[1013] = array("en"=>"EMC 통합 최적화","ko"=>"EMC 통합 최적화","jp"=>"EMC 통합 최적화","zh-CN"=>"EMC 통합 최적화","zh-TW"=>"EMC 통합 최적화","fr"=>"EMC 통합 최적화","de"=>"EMC 통합 최적화","ru"=>"EMC 통합 최적화","es"=>"EMC 통합 최적화","tr"=>"EMC 통합 최적화","vi"=>"EMC 통합 최적화","mn"=>"EMC 통합 최적화",); $_menu_names[1016] = array("en"=>"회로 설계 환경 개선","ko"=>"회로 설계 환경 개선","jp"=>"회로 설계 환경 개선","zh-CN"=>"회로 설계 환경 개선","zh-TW"=>"회로 설계 환경 개선","fr"=>"회로 설계 환경 개선","de"=>"회로 설계 환경 개선","ru"=>"회로 설계 환경 개선","es"=>"회로 설계 환경 개선","tr"=>"회로 설계 환경 개선","vi"=>"회로 설계 환경 개선","mn"=>"회로 설계 환경 개선",); ; $menu->list = array(400=>array("node_srl"=>"400","parent_srl"=>"0","menu_name_key"=>'회사 소개',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[400][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_XlBV81'):""),"url"=>(true?"page_XlBV81":""),"is_shortcut"=>"Y","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_XlBV81","page_fVHv17","page_CZjp42","board_HmJl99","board_rjlb49","page_XlBV81")&&in_array(Context::get("mid"),array("page_XlBV81","page_fVHv17","page_CZjp42","board_HmJl99","board_rjlb49","page_XlBV81"))?1:0),"expand"=>"N", "list"=>array(184=>array("node_srl"=>"184","parent_srl"=>"400","menu_name_key"=>'CEO 인사말',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[184][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_XlBV81'):""),"url"=>(true?"page_XlBV81":""),"is_shortcut"=>"N","desc"=>'인사말 페이지',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_XlBV81")&&in_array(Context::get("mid"),array("page_XlBV81"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_XlBV81")&&in_array(Context::get("mid"),array("page_XlBV81")) ?$_menu_names[184][$lang_type]:$_menu_names[184][$lang_type]):""),),186=>array("node_srl"=>"186","parent_srl"=>"400","menu_name_key"=>'회사 개요',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[186][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_fVHv17'):""),"url"=>(true?"page_fVHv17":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_fVHv17")&&in_array(Context::get("mid"),array("page_fVHv17"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_fVHv17")&&in_array(Context::get("mid"),array("page_fVHv17")) ?$_menu_names[186][$lang_type]:$_menu_names[186][$lang_type]):""),),192=>array("node_srl"=>"192","parent_srl"=>"400","menu_name_key"=>'사업장 소개',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[192][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_CZjp42'):""),"url"=>(true?"page_CZjp42":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_CZjp42")&&in_array(Context::get("mid"),array("page_CZjp42"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_CZjp42")&&in_array(Context::get("mid"),array("page_CZjp42")) ?$_menu_names[192][$lang_type]:$_menu_names[192][$lang_type]):""),),365=>array("node_srl"=>"365","parent_srl"=>"400","menu_name_key"=>'자료실',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[365][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','board_HmJl99'):""),"url"=>(true?"board_HmJl99":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("board_HmJl99")&&in_array(Context::get("mid"),array("board_HmJl99"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("board_HmJl99")&&in_array(Context::get("mid"),array("board_HmJl99")) ?$_menu_names[365][$lang_type]:$_menu_names[365][$lang_type]):""),),363=>array("node_srl"=>"363","parent_srl"=>"400","menu_name_key"=>'공지사항',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[363][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','board_rjlb49'):""),"url"=>(true?"board_rjlb49":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("board_rjlb49")&&in_array(Context::get("mid"),array("board_rjlb49"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("board_rjlb49")&&in_array(Context::get("mid"),array("board_rjlb49")) ?$_menu_names[363][$lang_type]:$_menu_names[363][$lang_type]):""),),),  "link"=>(true? ( array("page_XlBV81","page_fVHv17","page_CZjp42","board_HmJl99","board_rjlb49","page_XlBV81")&&in_array(Context::get("mid"),array("page_XlBV81","page_fVHv17","page_CZjp42","board_HmJl99","board_rjlb49","page_XlBV81")) ?$_menu_names[400][$lang_type]:$_menu_names[400][$lang_type]):""),),412=>array("node_srl"=>"412","parent_srl"=>"0","menu_name_key"=>'EMC Tool Distribution',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[412][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_DTgE62'):""),"url"=>(true?"page_DTgE62":""),"is_shortcut"=>"Y","desc"=>'shortcut',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_DTgE62","page_TSbn54","page_cQwo23","page_BTyG56","page_DTgE62")&&in_array(Context::get("mid"),array("page_DTgE62","page_TSbn54","page_cQwo23","page_BTyG56","page_DTgE62"))?1:0),"expand"=>"N", "list"=>array(416=>array("node_srl"=>"416","parent_srl"=>"412","menu_name_key"=>'PDNExpert',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[416][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_DTgE62'):""),"url"=>(true?"page_DTgE62":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_DTgE62")&&in_array(Context::get("mid"),array("page_DTgE62"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_DTgE62")&&in_array(Context::get("mid"),array("page_DTgE62")) ?$_menu_names[416][$lang_type]:$_menu_names[416][$lang_type]):""),),411=>array("node_srl"=>"411","parent_srl"=>"412","menu_name_key"=>'EMIStream',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[411][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_TSbn54'):""),"url"=>(true?"page_TSbn54":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_TSbn54")&&in_array(Context::get("mid"),array("page_TSbn54"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_TSbn54")&&in_array(Context::get("mid"),array("page_TSbn54")) ?$_menu_names[411][$lang_type]:$_menu_names[411][$lang_type]):""),),424=>array("node_srl"=>"424","parent_srl"=>"412","menu_name_key"=>'PIStream',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[424][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_cQwo23'):""),"url"=>(true?"page_cQwo23":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_cQwo23")&&in_array(Context::get("mid"),array("page_cQwo23"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_cQwo23")&&in_array(Context::get("mid"),array("page_cQwo23")) ?$_menu_names[424][$lang_type]:$_menu_names[424][$lang_type]):""),),427=>array("node_srl"=>"427","parent_srl"=>"412","menu_name_key"=>'EMC Visualizing System',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[427][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_BTyG56'):""),"url"=>(true?"page_BTyG56":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_BTyG56")&&in_array(Context::get("mid"),array("page_BTyG56"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_BTyG56")&&in_array(Context::get("mid"),array("page_BTyG56")) ?$_menu_names[427][$lang_type]:$_menu_names[427][$lang_type]):""),),),  "link"=>(true? ( array("page_DTgE62","page_TSbn54","page_cQwo23","page_BTyG56","page_DTgE62")&&in_array(Context::get("mid"),array("page_DTgE62","page_TSbn54","page_cQwo23","page_BTyG56","page_DTgE62")) ?$_menu_names[412][$lang_type]:$_menu_names[412][$lang_type]):""),),407=>array("node_srl"=>"407","parent_srl"=>"0","menu_name_key"=>'PCB Design',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[407][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_vmUP02'):""),"url"=>(true?"page_vmUP02":""),"is_shortcut"=>"Y","desc"=>'pcb design shortcut',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_vmUP02","page_oudZ60","page_vmUP02")&&in_array(Context::get("mid"),array("page_vmUP02","page_oudZ60","page_vmUP02"))?1:0),"expand"=>"N", "list"=>array(208=>array("node_srl"=>"208","parent_srl"=>"407","menu_name_key"=>'PCB Artwork',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[208][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_vmUP02'):""),"url"=>(true?"page_vmUP02":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_vmUP02")&&in_array(Context::get("mid"),array("page_vmUP02"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_vmUP02")&&in_array(Context::get("mid"),array("page_vmUP02")) ?$_menu_names[208][$lang_type]:$_menu_names[208][$lang_type]):""),),942=>array("node_srl"=>"942","parent_srl"=>"407","menu_name_key"=>'PCB 제작 및 실장',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[942][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_oudZ60'):""),"url"=>(true?"page_oudZ60":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_oudZ60")&&in_array(Context::get("mid"),array("page_oudZ60"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_oudZ60")&&in_array(Context::get("mid"),array("page_oudZ60")) ?$_menu_names[942][$lang_type]:$_menu_names[942][$lang_type]):""),),),  "link"=>(true? ( array("page_vmUP02","page_oudZ60","page_vmUP02")&&in_array(Context::get("mid"),array("page_vmUP02","page_oudZ60","page_vmUP02")) ?$_menu_names[407][$lang_type]:$_menu_names[407][$lang_type]):""),),1217=>array("node_srl"=>"1217","parent_srl"=>"0","menu_name_key"=>'Simulation',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[1217][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_AiXE45'):""),"url"=>(true?"page_AiXE45":""),"is_shortcut"=>"Y","desc"=>'SI Simulation 바로가기 메뉴',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_AiXE45","page_YWWW84","page_AiXE45")&&in_array(Context::get("mid"),array("page_AiXE45","page_YWWW84","page_AiXE45"))?1:0),"expand"=>"N", "list"=>array(919=>array("node_srl"=>"919","parent_srl"=>"1217","menu_name_key"=>'SI(Signal Integrity) Simulation',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[919][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_AiXE45'):""),"url"=>(true?"page_AiXE45":""),"is_shortcut"=>"N","desc"=>'SI simulation',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_AiXE45")&&in_array(Context::get("mid"),array("page_AiXE45"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_AiXE45")&&in_array(Context::get("mid"),array("page_AiXE45")) ?$_menu_names[919][$lang_type]:$_menu_names[919][$lang_type]):""),),922=>array("node_srl"=>"922","parent_srl"=>"1217","menu_name_key"=>'PI(Power Integrity) Simulaton',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[922][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_YWWW84'):""),"url"=>(true?"page_YWWW84":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_YWWW84")&&in_array(Context::get("mid"),array("page_YWWW84"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_YWWW84")&&in_array(Context::get("mid"),array("page_YWWW84")) ?$_menu_names[922][$lang_type]:$_menu_names[922][$lang_type]):""),),),  "link"=>(true? ( array("page_AiXE45","page_YWWW84","page_AiXE45")&&in_array(Context::get("mid"),array("page_AiXE45","page_YWWW84","page_AiXE45")) ?$_menu_names[1217][$lang_type]:$_menu_names[1217][$lang_type]):""),),406=>array("node_srl"=>"406","parent_srl"=>"0","menu_name_key"=>'Consulting',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[406][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_bjmj54'):""),"url"=>(true?"page_bjmj54":""),"is_shortcut"=>"Y","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_bjmj54","page_hodj59","page_iAAF75","page_aLjn85","page_bjmj54")&&in_array(Context::get("mid"),array("page_bjmj54","page_hodj59","page_iAAF75","page_aLjn85","page_bjmj54"))?1:0),"expand"=>"N", "list"=>array(210=>array("node_srl"=>"210","parent_srl"=>"406","menu_name_key"=>'Consulting',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[210][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_bjmj54'):""),"url"=>(true?"page_bjmj54":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_bjmj54")&&in_array(Context::get("mid"),array("page_bjmj54"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_bjmj54")&&in_array(Context::get("mid"),array("page_bjmj54")) ?$_menu_names[210][$lang_type]:$_menu_names[210][$lang_type]):""),),1010=>array("node_srl"=>"1010","parent_srl"=>"406","menu_name_key"=>'EMI 저감 PCB 설계 기술',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[1010][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_hodj59'):""),"url"=>(true?"page_hodj59":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_hodj59")&&in_array(Context::get("mid"),array("page_hodj59"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_hodj59")&&in_array(Context::get("mid"),array("page_hodj59")) ?$_menu_names[1010][$lang_type]:$_menu_names[1010][$lang_type]):""),),1013=>array("node_srl"=>"1013","parent_srl"=>"406","menu_name_key"=>'EMC 통합 최적화',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[1013][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_iAAF75'):""),"url"=>(true?"page_iAAF75":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_iAAF75")&&in_array(Context::get("mid"),array("page_iAAF75"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_iAAF75")&&in_array(Context::get("mid"),array("page_iAAF75")) ?$_menu_names[1013][$lang_type]:$_menu_names[1013][$lang_type]):""),),1016=>array("node_srl"=>"1016","parent_srl"=>"406","menu_name_key"=>'회로 설계 환경 개선',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[1016][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','page_aLjn85'):""),"url"=>(true?"page_aLjn85":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("page_aLjn85")&&in_array(Context::get("mid"),array("page_aLjn85"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("page_aLjn85")&&in_array(Context::get("mid"),array("page_aLjn85")) ?$_menu_names[1016][$lang_type]:$_menu_names[1016][$lang_type]):""),),),  "link"=>(true? ( array("page_bjmj54","page_hodj59","page_iAAF75","page_aLjn85","page_bjmj54")&&in_array(Context::get("mid"),array("page_bjmj54","page_hodj59","page_iAAF75","page_aLjn85","page_bjmj54")) ?$_menu_names[406][$lang_type]:$_menu_names[406][$lang_type]):""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>