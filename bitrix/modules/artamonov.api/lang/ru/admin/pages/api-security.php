<?php
$MESS['API_MODULE_ID'] = 'artamonov.api';
$MESS['TITLE'] = 'Безопасность';
$MESS['TAB_MAIN_TITLE'] = 'Основное';
$MESS['TAB_FILTERS_TITLE'] = 'Фильтры';
$MESS['TAB_AUTHORIZATION_TITLE'] = 'Авторизация';

$MESS['OPTION_USE_ONLY_HTTPS_EXCHANGE_TITLE'] = 'Обмен только через https-протокол';
$MESS['OPTION_ONLY_HTTPS_EXCHANGE_HINT'] = 'Если параметр активен, тогда все запросы, которые приходят на API-интерфейс через http-протокол - будут отклонены.<br><br>Внимание: сайт должен быть доступен по адресу HTTPS://'.$_SERVER['SERVER_NAME'].'.<br><br>Примечание: HTTPS обеспечивает шифрование данных при их передачи.';

$MESS['OPTION_USE_AUTH_BY_LOGIN_PASSWORD'] = 'Авторизация по логину и паролю';
$MESS['OPTION_USE_AUTH_BY_LOGIN_PASSWORD_HINT'] = 'Если параметр активен, тогда при запросе будет проверяться наличие пользователя в базе по указанным логину и паролю.<br><br>Внимание: важно чтобы при запросе со стороны клиента были отправлены заголовки Authorization-Login и Authorization-Password.';

$MESS['OPTION_USE_AUTH_TOKEN_TITLE'] = 'Авторизация по токену';
$MESS['OPTION_AUTH_TOKEN_HINT'] = 'Если параметр активен, тогда при запросе будет проверяться наличие пользователя в базе по указанному токену.<br><br>Внимание:<br>1. пользователю будет добавлено пользовательское поле #FIELD_NAME_RESTFUL_API_TOKEN#;<br>2. важно чтобы при запросе со стороны клиента был отправлен заголовок Authorization-Token с токеном (ключевая фраза<b>:</b>токен пользователя).';
$MESS['OPTION_TOKEN_KEYWORD_TITLE'] = 'Ключевая фраза';
$MESS['OPTION_TOKEN_KEYWORD_HINT'] = 'Ключевая фраза является дополнением к токену пользователя, т.е. {Фраза}<b>:</b>{Токен пользователя}.<br><br>Пример токена: KEYWORD<b>:</b>d7804258-07dd-4216-84f5-3606168ec4d4.';
$MESS['TOKEN_GENERATE_TITLE'] = 'Сгенерировать токены';
$MESS['TOKEN_GENERATE_HINT'] = 'Если включена авторизация по токену, тогда при клике на ссылку будут сгенерированы токены для тех пользователей у кого они отсутствуют.';
$MESS['GENERATE_LINK_TEXT'] = 'Сгенерировать';

$MESS['OPTION_USE_CHECK_USER_GROUP'] = 'Проверять группу';
$MESS['OPTION_USE_CHECK_USER_GROUP_HINT'] = 'Если параметр активен, тогда при запросе будет проверяться принадлежность пользователя к группе.<br><br>Внимание: фильтр работает только при активации Авторизации по логину и паролю и/или Авторизации по токену.';
$MESS['OPTION_GROUP_LIST'] = 'Список групп';

$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER'] = 'Использовать фильтр по белым IP-адресам';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_TITLE_1'] = 'Отключен';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_TITLE_2'] = 'Включен';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_HINT'] = 'Если параметр включён, тогда при обработке входящего запроса будет проверяться источник запроса.';
$MESS['OPTION_WHITE_LIST_ADDRESS_TITLE'] = 'Список белых адресов';
$MESS['OPTION_WHITE_LIST_ADDRESS_HINT'] = 'Список разрешенных адресов, с которых API-интерфейс будет обрабатывать входящие запросы.<br>Адреса нужно писать через точку с запятой.<br><br>Пример: 192.168.0.1; 192.168.0.2; 192.168.0.3';

$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER'] = 'Использовать фильтр по чёрным IP-адресам';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_TITLE_1'] = 'Отключен';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_TITLE_2'] = 'Включен';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_HINT'] = 'Если параметр включён, тогда при обработке входящего запроса будет проверяться источник запроса.';
$MESS['OPTION_BLACK_LIST_ADDRESS_TITLE'] = 'Список чёрных адресов';
$MESS['OPTION_BLACK_LIST_ADDRESS_HINT'] = 'Список запрещенных адресов, с которых API-интерфейс НЕ будет обрабатывать входящие запросы.<br>Адреса нужно писать через точку с запятой.<br><br>Пример: 192.168.0.1; 192.168.0.2; 192.168.0.3';

$MESS['OPTION_USE_LIST_COUNTRY_FILTER'] = 'Использовать фильтр по коду страны';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_TITLE_1'] = 'Отключен';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_TITLE_2'] = 'Включен';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_HINT'] = 'Если параметр включён, тогда при обработке входящего запроса будет проверяться код страны источника запроса.';
$MESS['OPTION_WHITE_LIST_COUNTRY_TITLE'] = 'Список кодов стран';
$MESS['OPTION_WHITE_LIST_COUNTRY_HINT'] = 'Список разрешенных кодов стран, с которых API-интерфейс будет обрабатывать входящие запросы.<br>Коды нужно писать через точку с запятой.<br><br>Пример: RU; KZ; BY';

$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER'] = 'Кросс-доменные запросы';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_TITLE_1'] = 'Отключены';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_TITLE_2'] = 'Разрешены';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_HINT'] = 'Если параметр включён, тогда при обработке входящего запроса будет проверяться домен источника запроса.';
$MESS['OPTION_WHITE_LIST_DOMAIN_ACCESS_CONTROL_ALLOW_ORIGIN_TITLE'] = 'Список доменов';
$MESS['OPTION_WHITE_LIST_DOMAIN_ACCESS_CONTROL_ALLOW_ORIGIN_HINT'] = 'Список разрешенных доменов, с которых API-интерфейс будет обрабатывать входящие запросы.<br>Домены нужно писать через точку с запятой.<br><br>Пример: http://site1.com; http://site2.com<br><br>Можно указать символ Звёздочка (*), в этом случае интерфейс будет доступен всем доменам.';

$MESS['TOKENS_GENERATED'] = 'Сгенерировано токенов: #COUNT#';
$MESS['TOKENS_NOT_GENERATED'] = 'Токены не были сгенерированы';

$MESS['BTN_SAVE'] = 'Сохранить';
$MESS['BTN_RESTORE'] = 'Сбросить';
$MESS['OPTIONS_SAVED'] = 'Настройки сохранены';
$MESS['OPTIONS_RESTORED'] = 'Настройки сброшены';