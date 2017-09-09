<?php
$MESS['PAGE_TITLE'] = '���������';

$MESS['TAB_MAIN_TITLE'] = '���������';
$MESS['TAB_SECURITY_TITLE'] = '������������';
$MESS['TAB_SUPPORT_TITLE'] = '���������';

$MESS['TAB_MAIN_DESCRIPTION'] = '�������� ���������';
$MESS['TAB_SECURITY_DESCRIPTION'] = '��������� ������������';
$MESS['TAB_SUPPORT_DESCRIPTION'] = '��������� ������';

$MESS['OPTION_USE_RESTFUL_API'] = '������������ RESTful API';
$MESS['OPTION_USE_RESTFUL_API_SELECT_TITLE_1'] = '���������';
$MESS['OPTION_USE_RESTFUL_API_SELECT_TITLE_2'] = '��������';
$MESS['OPTION_USE_RESTFUL_API_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_RESTFUL_API_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_RESTFUL_API_SELECT_HINT'] = '���� �������� �������, ����� ����� ����������� ������������ RESTful API �� �����.';

$MESS['OPTION_PATH_RESTFUL_API'] = '���� RESTful API';
$MESS['OPTION_PATH_RESTFUL_HINT'] = '���� �� �������� ����� �������� ���������.<br><br>������: <b>/api/</b>';

$MESS['OPTION_USE_VERSIONS'] = '������������ ������';
$MESS['OPTION_USE_VERSIONS_SELECT_TITLE_1'] = '���������';
$MESS['OPTION_USE_VERSIONS_SELECT_TITLE_2'] = '��������';
$MESS['OPTION_USE_VERSIONS_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_VERSIONS_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_VERSIONS_SELECT_HINT'] = '���� �������� �������, ����� ����� ����������� ������ ����������� ��������������� ������.<br><br>��������: /api/<b>v1</b>/ - � ���� ������ ��������� ����� ���������� ����������, ������� ������������� �� ����: [����� ������]/lib/controllers/<b>v1</b>/[�������� �����������].';


$MESS['OPTION_OPERATING_MODE'] = '����� ������';
$MESS['OPTION_OPERATING_MODE_SELECT_TITLE_1'] = '��������-��������������� (�� ���������)';
$MESS['OPTION_OPERATING_MODE_SELECT_TITLE_2'] = '��������';
$MESS['OPTION_OPERATING_MODE_SELECT_TITLE_3'] = '��������-��������������� + ��������';
$MESS['OPTION_OPERATING_MODE_SELECT_ID_1'] = 'OBJECT_ORIENTED';
$MESS['OPTION_OPERATING_MODE_SELECT_ID_2'] = 'FILE';
$MESS['OPTION_OPERATING_MODE_SELECT_ID_3'] = 'OBJECT_ORIENTED_FILE';
$MESS['OPTION_OPERATING_MODE_HINT'] = '��������-��������������� - ������ ����� �������������� ��������������� ������������ (�������� ������) � ������� ������, ������� ������������� � ����� ������ (��. ������������).<br><br>�������� - ������ ����� �������������� ������������, ������� ������������� �� "�����������" ����������� ���� (��. ������������).<br><br>��������-��������������� + �������� - ��� ������� ����� ����������� ����� ����������� � ����� ������, ��� ��������� �� �������, ����� ����� ����������� �� "�����������" ����������� ���� (��. ������������).';


$MESS['OPTION_USE_ONLY_HTTPS_EXCHANGE_TITLE'] = '����� ������ ����� https-��������';
$MESS['OPTION_ONLY_HTTPS_EXCHANGE_HINT'] = '���� �������� �������, ����� ��� �������, ������� �������� �� API-��������� ����� http-�������� - ����� ���������.<br><br>��������: ���� ������ ���� �������� �� ������ HTTPS://'.$_SERVER['SERVER_NAME'].'.<br><br>����������: HTTPS ������������ ���������� ������ ��� �� ��������.';

$MESS['OPTION_USE_AUTH_TOKEN_TITLE'] = '����������� �� ������';
$MESS['OPTION_AUTH_TOKEN_HINT'] = '���� �������� �������, ����� ��� ������� ����� ����������� ������� ������������ � ���� �� ���������� ������.<br><br>��������:<br>1. ������������ ����� ��������� ���������������� ���� #FIELD_NAME_RESTFUL_API_TOKEN#;<br>2. ����� ����� ��� ������� �� ������� ������� ��� ������ ��������� Authorization-Token � ������� (�������� �����<b>:</b>����� ������������).';

$MESS['OPTION_TOKEN_KEYWORD_TITLE'] = '�������� �����';
$MESS['OPTION_TOKEN_KEYWORD_HINT'] = '�������� ����� �������� ����������� � ������ ������������, �.�. {�����}<b>:</b>{����� ������������}.<br><br>������ ������: KEYWORD<b>:</b>d7804258-07dd-4216-84f5-3606168ec4d4.';

$MESS['TOKEN_GENERATE_TITLE'] = '������������� ������';
$MESS['TOKEN_GENERATE_HINT'] = '���� �������� ����������� �� ������, ����� ��� ����� �� ������ ����� ������������� ������ ��� ��� ������������� � ���� ��� �����������.';

$MESS['GENERATE_LINK_TEXT'] = '�������������';

$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_TITLE_1'] = '��������';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_TITLE_2'] = '�������';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_WHITE_LIST_ADDRESS_FILTER_HINT'] = '���� �������� �������, ����� ��� ��������� ��������� ������� ����� ����������� �������� �������.';
$MESS['OPTION_WHITE_LIST_ADDRESS_TITLE'] = '������ ����� �������';
$MESS['OPTION_WHITE_LIST_ADDRESS_HINT'] = '������ ����������� �������, � ������� API-��������� ����� ������������ �������� �������.<br>������ ����� ������ ����� ����� � �������.<br><br>������: 192.168.0.1; 192.168.0.2; 192.168.0.3';

$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER'] = '������������ ������ �� ������ IP-�������';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_TITLE_1'] = '��������';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_TITLE_2'] = '�������';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_BLACK_LIST_ADDRESS_FILTER_HINT'] = '���� �������� �������, ����� ��� ��������� ��������� ������� ����� ����������� �������� �������.';
$MESS['OPTION_BLACK_LIST_ADDRESS_TITLE'] = '������ ������ �������';
$MESS['OPTION_BLACK_LIST_ADDRESS_HINT'] = '������ ����������� �������, � ������� API-��������� �� ����� ������������ �������� �������.<br>������ ����� ������ ����� ����� � �������.<br><br>������: 192.168.0.1; 192.168.0.2; 192.168.0.3';


$MESS['OPTION_USE_LIST_COUNTRY_FILTER'] = '������������ ������ �� ���� ������';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_TITLE_1'] = '��������';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_TITLE_2'] = '�������';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_LIST_COUNTRY_FILTER_HINT'] = '���� �������� �������, ����� ��� ��������� ��������� ������� ����� ����������� ��� ������ ��������� �������.';
$MESS['OPTION_WHITE_LIST_COUNTRY_TITLE'] = '������ ����� �����';
$MESS['OPTION_WHITE_LIST_COUNTRY_HINT'] = '������ ����������� ����� �����, � ������� API-��������� ����� ������������ �������� �������.<br>���� ����� ������ ����� ����� � �������.<br><br>������: RU; KZ; BY';


$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER'] = '�����-�������� �������';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_TITLE_1'] = '���������';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_TITLE_2'] = '���������';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_ACCESS_CONTROL_ALLOW_ORIGIN_FILTER_HINT'] = '���� �������� �������, ����� ��� ��������� ��������� ������� ����� ����������� ����� ��������� �������.';
$MESS['OPTION_WHITE_LIST_DOMAIN_ACCESS_CONTROL_ALLOW_ORIGIN_TITLE'] = '������ �������';
$MESS['OPTION_WHITE_LIST_DOMAIN_ACCESS_CONTROL_ALLOW_ORIGIN_HINT'] = '������ ����������� �������, � ������� API-��������� ����� ������������ �������� �������.<br>������ ����� ������ ����� ����� � �������.<br><br>������: http://site1.com; http://site2.com<br><br>����� ������� ������ �������� (*), � ���� ������ ��������� ����� �������� ���� �������.';



$MESS['SUPPORT_LINK_TITLE'] = '������� � ����������� �� ������';
$MESS['SUPPORT_LINK'] = 'http://artamonov.pro';
$MESS['SUPPORT_LINK_TEXT'] = '�������';
$MESS['SUPPORT_LINK_HINT'] = '��� ����� � ������������� ������';

$MESS['SUPPORT_DOCUMENTATION_LINK_TITLE'] = '������������';
$MESS['SUPPORT_DOCUMENTATION_LINK'] = 'https://github.com/ArtamonovDenis/artamonov.api/wiki';
$MESS['SUPPORT_DOCUMENTATION_LINK_TEXT'] = '�������';
$MESS['SUPPORT_DOCUMENTATION_LINK_HINT'] = '�������� ������ ������ � ��������� ����������';

$MESS['SUPPORT_FEEDBACK_LINK_TITLE'] = '������';
$MESS['SUPPORT_FEEDBACK_LINK'] = 'http://marketplace.1c-bitrix.ru/solutions/artamonov.api/#tab-rating-link';
$MESS['SUPPORT_FEEDBACK_LINK_TEXT'] = '�������';
$MESS['SUPPORT_FEEDBACK_LINK_HINT'] = '�� ��������� ��������� ���� ������. � ��� ��� ������� ����� ���� 1-3 ������, � ��� ��� ��� ������� ��������� � �������� � ��������� ��������.';

$MESS['OPTION_SUPPORT_USE_LOG_TITLE'] = '����������� �������� ��������';
$MESS['OPTION_SUPPORT_USE_LOG_SELECT_TITLE_1'] = '���������';
$MESS['OPTION_SUPPORT_USE_LOG_SELECT_TITLE_2'] = '��������';
$MESS['OPTION_SUPPORT_USE_LOG_SELECT_ID_1'] = 'N';
$MESS['OPTION_SUPPORT_USE_LOG_SELECT_ID_2'] = 'Y';
$MESS['OPTION_SUPPORT_USE_LOG_HINT'] = '����������� ���� �������� �������� � ����';

$MESS['OPTION_SUPPORT_LOG_PATH_TITLE'] = '���� �� ���-�����';
$MESS['OPTION_SUPPORT_LOG_PATH_HINT'] = '���� �� �������� ����� �������� ���-����.<br><br>������: <b>/logs/api.log</b><br><br>����������: ���� � ���������� ������ ���� ������� �������, � ����� ������ ���� ��������� ����� �� ������ � ����.';


$MESS['BTN_OPTIONS_SAVE'] = '���������';
$MESS['BTN_OPTIONS_RESTORE'] = '��������';
$MESS['OPTIONS_SAVED'] = '��������� ���������';
$MESS['OPTIONS_RESTORED'] = '��������� ��������';

$MESS['TOKENS_GENERATED'] = '������������� �������: #COUNT#';