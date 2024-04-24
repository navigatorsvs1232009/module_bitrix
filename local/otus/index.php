<?php

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

echo \Bitrix\Main\Config\Option::get("bex.d7dull", "IB_ID");
//https://plus-ks.ru/bitrix/admin/perfmon_table.php?lang=ru&table_name=b_option
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');