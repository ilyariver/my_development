<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
global $USER;
if (!$USER->IsAuthorized())
	LocalRedirect('/');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width">
    <title>История заказов</title>
	<meta name="next-head-count" content="3" />
	<link
      rel="preload"
      href="/fonts/Inter-Light.woff2"
      as="font"
      type="font/woff2"
    />
	<link
      rel="preload"
      href="/fonts/Inter-Regular.woff2"
      as="font"
      type="font/woff2"
    />
    <link
      rel="preload"
      href="/fonts/Inter-Medium.woff2"
      as="font"
      type="font/woff2"
    />
    <link
      rel="preload"
      href="/fonts/Inter-Bold.woff2"
      as="font"
      type="font/woff2"
    />
    <link
      rel="preload"
      href="/fonts/Inter-SemiBold.woff2"
      as="font"
      type="font/woff2"
    />
    <link
      rel="preload"
      href="/fonts/Inter-ExtraBold.woff2"
      as="font"
      type="font/woff2"
    />
	<link rel="apple-touch-icon" sizes="180x180" href="/local/ico/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/local/ico/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/local/ico/favicon-16x16.png" />
	<link rel="manifest" href="/site.webmanifest" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
	<link
      rel="preload"
      href="/_next/static/css/144240d72b2624c5.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/144240d72b2624c5.css"
      data-n-g=""
    />
    <link
      rel="preload"
      href="/_next/static/css/4485d67b99fa53ce.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/4485d67b99fa53ce.css"
      data-n-p=""
    />
    <link
      rel="preload"
      href="/_next/static/css/ebef3daf56b9a807.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/ebef3daf56b9a807.css"
      data-n-p=""
    />
    <link
      rel="preload"
      href="/_next/static/css/e5c7920970cfd529.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/e5c7920970cfd529.css"
      data-n-p=""
    />
	<link
      rel="preload"
      href="/_next/static/css/cdc642579afc58b2.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/cdc642579afc58b2.css"
      data-n-p=""
    />
	<link
      rel="preload"
      href="/_next/static/css/83629b1f88dda66c.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/83629b1f88dda66c.css"
      data-n-p=""
    />
	<link
      rel="preload"
      href="/_next/static/css/da094a6450e93283.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/da094a6450e93283.css"
      data-n-p=""
    />
	<link
      rel="preload"
      href="/_next/static/css/485938602943440f.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/485938602943440f.css"
      data-n-p=""
    />
	<link
      rel="preload"
      href="/_next/static/css/baac40172780072d.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/baac40172780072d.css"
      data-n-p=""
    />
	<link
      rel="preload"
      href="/_next/static/css/c8f32ba12171460b.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/c8f32ba12171460b.css"
      data-n-p=""
    />
	<link
      rel="preload"
      href="/_next/static/css/70dee109e01c8db2.css"
      as="style"
    />
    <link
      rel="stylesheet"
      href="/_next/static/css/70dee109e01c8db2.css"
      data-n-p=""
    />
    <link rel="stylesheet" href="/styles.css">
</head>
<body data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">
<div id="__next"><div class="Header_fixed_cart__QPYC9">


</div><header class="Header_header___PGLF "><div class="container Header_container__q1hpX"><div class="Header_logo__GAD9C"><a href="/"><img src="/_next/static/media/logo.d85cc0ef.svg" alt="логотип FitBox" width="131" height="33"></a></div><button class="Header_burger__bxwCo" aria-label="Открыть меню"> </button><div class="Header_header_content__e73bh "><div class="Header_header_right__ZVkXs"><div class="Header_left_menu__1L4D1"><div class="Header_phone_number__E9PBS"><a class="Header_phone_link__xRIbi" href="tel:+79009999999"><img alt="Телефон" class="Header_phone_icon__A1Z2I" src="/_next/static/media/icon-call.d24bf9d5.svg" width="17" height="17"><div class="Header_phone_text__iETxy">8 900 999 99 99</div></a></div><div class="Header_geo__D5UeT"><div class="Header_geo_cities__kf3gt"><button class="Header_city__SUyA_"><span></span></button></div></div>



</div></div><nav><ul class="Header_navigator_list__l7bw0"><li class="Header_navigator_item__Zu4cm"><a target="" href="/#section-menu">Рационы меню</a></li><li class="Header_navigator_item__Zu4cm"><a target="" href="/#faq">Доставка и оплата</a></li><li class="Header_navigator_item__Zu4cm"><a target="_blank" href="https://micromarket.fitbox.su/">Обеды в офис</a></li></ul></nav></div></div></header><div class="modals_modal__oLA0S "><div class="modals_modal__wrap__PJ2XG"><div class="modals_modal__content__1IRfB "><button class="modals_modal__btn__3amZl"></button></div></div></div><section class="profile-wrap-component_section__tjDuE"><div class="container"><div class="profile-wrap-component_content___xmR7"><div class="profile-wrap-component_left_panel__okuiS"><div class="profile-wrap-component_top__2WfWn"><input type="file" class="profile-wrap-component_avatar___lhpH"><ul class="profile-wrap-component_menu_list__dG5VH"><li class="profile-wrap-component_menu_item__RNwDY profile-wrap-component_active__Q4OWz"><a href="/profile">Профиль</a></li><li class="profile-wrap-component_menu_item__RNwDY "><a href="/profile/orders">Заказы</a></li><li class="profile-wrap-component_menu_item__RNwDY "><a href="/profile/bonuses">Бонусы</a></li><li class="profile-wrap-component_menu_item__RNwDY "><a href="/profile/invite">Пригласить друга</a></li></ul></div>

<a class="profile-wrap-component_log_out__ZDJMU" href="/?logout=yes&<?=bitrix_sessid_get()?>">Выйти</a></div>

<?
$i = 0;
$arSelect = Array("ID", "DATE_CREATE", "PROPERTY_ORDER_CONTAINS");
$arFilter = Array("IBLOCK_ID"=>6, "ACTIVE"=>"Y", "CREATED_BY" => $USER->GetID());
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->Fetch())
{
 $part_time = explode(' ', $ob['DATE_CREATE'])[0];
 $program_chunks = explode(';', trim($ob['PROPERTY_ORDER_CONTAINS_VALUE']));
 $program = trim(str_replace('Программа:', '', $program_chunks[0]));
 $day = str_replace('Количество дней:', '', $program_chunks[1]);
 if(substr($day, -2) == '++')
	$day = substr($day,0,-2);

 $day = intval($day);
 
 if(!$arPrices[$program])
 {
	$select = Array("PROPERTY_PRICES");
	$filter = Array("IBLOCK_ID"=>3, "PROPERTY_PROGRAM_TITLE"=>$program);
	$r = CIBlockElement::GetList(Array(), $filter, false, false, $select);
	while($o = $r->Fetch()){
		if(!$o['PROPERTY_PRICES_VALUE']) continue;
		$arPrices[$program][] = intval($o['PROPERTY_PRICES_VALUE']);
	}
 }
 
 switch ($day) {
    case 1:
        $sum =  $arPrices[$program][0];
        break;
    case 5:
        $sum =  $arPrices[$program][1];
        break;
    case 6:
        $sum =  $arPrices[$program][2];
        break;
	case 7:
        $sum =  $arPrices[$program][3];
        break;
	case 14:
        $sum =  $arPrices[$program][4];
        break;
	case 28:
        $sum =  $arPrices[$program][5];
        break;	
 }
 
 if($part_time == date("d.m.Y"))
	$staus = 'ACTUALED';
 
 else
	$staus = 'NOT_ACTUALED'; 
	 
	 
	 
 $arOrders[$staus][$i]['ID'] = $ob['ID'];
 $arOrders[$staus][$i]['DAY'] = $day;
 $arOrders[$staus][$i]['DATE_TIME'] = $part_time;
 $arOrders[$staus][$i]['PROGRAM'] = $program;
 if(substr($program_chunks[1], -2) == '++')
	$arOrders[$staus][$i]['DELIVERY'] = 'Y';
 $arOrders[$staus][$i]['SUM'] = $sum;
 
 $i++;
}
?>
<div class="profile-wrap-component_right_content__tfEjk" style="padding:20px;">
	<h1 class="profile-wrap-component_title__BwcXj">Заказы</h1>
	<div class="profile-wrap-component_wrap__WGecX">
		<div class="order-block">
				<?if($arOrders):?>
					<div class="switch-btns">
					  <div class="switch-btns__group">
						<button class="switch-btns__btn js-switch active" data-order="current">Текущие</button>
						<button class="switch-btns__btn js-switch" data-order="old">Прошлые</button>
					  </div>
					</div>

					<div class="order-block__content">
					  <ul class="list-header">
						<li class="list-header__item list-header__item--hidden">№ Заказа</li>
						<li class="list-header__item">Дата и время</li>
						<li class="list-header__item">Рацион</li>
						<li class="list-header__item">Статус</li>
						<li class="list-header__item">Сумма</li>
					  </ul>
					  
					  <ul class="order-list active js-order-list-current">
						<?foreach($arOrders['ACTUALED'] as $order):?>
							<li class="order-list__item">
							  <div class="order-list__col order-list__col--flex">
								<span class="order-list__order-text">Заказ: №</span>
								<span class="order-list__number"><?=$order['ID']?></span>
							  </div>
							  <div class="order-list__options">
								<div class="order-list__col"><?=$order['DATE_TIME']?></div>
								<div class="order-list__col"><?=$order['PROGRAM']?> <?//Количество дней: <?=$order['DAY']?></div>
								<div class="order-list__col <?echo ($order['DELIVERY']) ? "order-list__col--done" : "order-list__col--error"; ?>">Доставлено</div>
								<div class="order-list__col"><?=$order['SUM']?> ₽</div>
							  </div>
							</li>	
						<?endforeach;?>
					  </ul>	
					  
					  <ul class="order-list js-order-list-old">
						<?foreach($arOrders['NOT_ACTUALED'] as $order):?>
							<li class="order-list__item">
							  <div class="order-list__col order-list__col--flex">
								<span class="order-list__order-text">Заказ: №</span>
								<span class="order-list__number"><?=$order['ID']?></span>
							  </div>
							  <div class="order-list__options">
								<div class="order-list__col"><?=$order['DATE_TIME']?></div>
								<div class="order-list__col"><?=$order['PROGRAM']?> <?//Количество дней: <?=$order['DAY']?></div>
								<div class="order-list__col <?echo ($order['DELIVERY']) ? "order-list__col--done" : "order-list__col--error"; ?>">Доставлено</div>
								<div class="order-list__col"><?=$order['SUM']?> ₽</div>
							  </div>
							</li>
						<?endforeach;?>
					  </ul>

					</div>
				<?else:?>
					сейчас нет активных заказов
				<?endif;?>
			</div>
	</div>
</div>













	
















</div></div></section><footer class="Footer_footer__4akbQ"><div class="container"><div class="Footer_min_container__LIW_c"><div class="Footer_logo__RHVCz"><div class="Footer_logo_left__LZcyf"><div><img src="/_next/static/media/logo-footer.6b32255e.svg" alt="Логотип"></div><small class="Footer_copyrights__WCIq8">2016-2023 © Все права защищены</small></div><a class="Footer_tel_link___1xkM" href="tel:+78005501295">8 (800) 550-12-95</a></div><div class="Footer_navigation_wrap__SM525"><ul class="Footer_list__Bl9HB"><li class="Footer_item__1Rla5"><a href="/about">о нас</a></li><li class="Footer_item__1Rla5"><a href="/contacts">контакты</a></li><li class="Footer_item__1Rla5"><a href="/delivery">доставка</a></li><li class="Footer_item__1Rla5"><a href="/payment">оплата</a></li></ul><div class="Footer_connection__BUzjw"><div class="socials-links_links__SBZSq"><div class="socials-links_links__item__FM6z2" title="VK"><a target="_blank" href="https://vk.com/fitboxsu"><img src="/_next/static/media/icon-vk.54850a65.svg" alt="VK"></a></div><div class="socials-links_links__item__FM6z2" title="Instagram"><a target="_blank" href="https://www.instagram.com/fitbox.su/"><img src="/_next/static/media/icon-instagram.d5cd53f1.svg" alt="Instagram"></a></div><div class="socials-links_links__item__FM6z2" title="Whatsapp"><a target="_blank" href="https://wa.me/79370077712"><img src="/_next/static/media/icon-watsapp.6e5a447a.svg" alt="Whatsapp"></a></div><div class="socials-links_links__item__FM6z2" title="Telegram"><a target="_blank" href="https://t.me/fitboxsu"><img src="/_next/static/media/icon-telegram.fccd84dc.svg" alt="Telegram"></a></div></div></div></div><div class="Footer_small_text__lvnQb"><div class="Footer_small_text__left__ewzH_"><a target="_blank" rel="noreferrer" href="https://fitbox.su/politics/terms-of-use" class="Footer_public_offer__rPnQV">Публичная оферта</a></div><div class="Footer_small_text__right__ZXT0I"><a target="_blank" rel="noreferrer" href="mailto:fitbox.uln@gmail.com" class="Footer_public_offer__rPnQV Footer_public_offer___right_top__ipt_W">По любым вопросам пишите - fitbox.uln@gmail.com</a><a target="_blank" rel="noreferrer" href="https://fitbox.su/politics/terms-of-use" class="Footer_public_offer__rPnQV">Наш WhatsApp/Telegram/Viber +7 937 007-77-12</a></div></div></div></div></footer></div>
<script src="/lib.js"></script>
<script src="/script.js"></script>
</body>