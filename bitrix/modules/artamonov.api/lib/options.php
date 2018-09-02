<?php


namespace Artamonov\Api;


use Bitrix\Main\Config\Option;
use CUserTypeEntity;
use CUser;

class Options
{
    const MODULE_ID = 'artamonov.api';
    const FORM_NAME = 'options';
    const OPTION_CODE_PREFIX = 'OPTION_';
    const USER_FIELD_CODE_API_TOKEN = 'UF_RESTFUL_API_TOKEN';

    private $options;

    public function save($data)
    {
        $this->extractOptions($data);
        if ($ar = $this->getOptions()) {
            foreach ($ar as $code => $value) {
                switch ($code) {
                    case 'WHITE_LIST_ADDRESS':
                        $value = str_replace([' ', 'http://', 'https://'], '', $value);
                        break;
                    case 'BLACK_LIST_ADDRESS':
                        $value = str_replace([' ', 'http://', 'https://'], '', $value);
                        break;
                    default:
                        $value = trim($value);
                }
                Option::set($this->getModuleId(), $code, $value, $this->getSiteId());
            }
            return true;
        }
    }

    public function restore($data)
    {
        $this->extractOptions($data);
        if ($ar = $this->getOptions()) {

            foreach ($ar as $code => $value) {
                Option::delete($this->getModuleId(), ['name' => $code]);
            }
            return true;
        }
    }

    private function extractOptions($ar)
    {
        $arResult = [];
        if ($ar['form'] == 'api-security') {
            // Checkbox
            if (!isset($ar['OPTION_ONLY_HTTPS_EXCHANGE'])) {
                $ar['OPTION_ONLY_HTTPS_EXCHANGE'] = 'N';
            }
            if (!isset($ar['OPTION_USE_AUTH_TOKEN'])) {
                $ar['OPTION_USE_AUTH_TOKEN'] = 'N';
            }
            if (!isset($ar['OPTION_USE_AUTH_BY_LOGIN_PASSWORD'])) {
                $ar['OPTION_USE_AUTH_BY_LOGIN_PASSWORD'] = 'N';
            }
            if (!isset($ar['OPTION_USE_CHECK_USER_GROUP'])) {
                $ar['OPTION_USE_CHECK_USER_GROUP'] = 'N';
            }
            // Array
            $ar['OPTION_GROUP_LIST'] = (isset($ar['OPTION_GROUP_LIST'])) ? implode('|', $ar['OPTION_GROUP_LIST']) : '';
        }
        if (isset($ar['OPTION_OWN_CONTROLLERS_PATH'])) {
            $ar['OPTION_OWN_CONTROLLERS_PATH'] = trim($ar['OPTION_OWN_CONTROLLERS_PATH'], '/');
        }
        // Update User field for token
        $this->userFieldToken($ar['OPTION_USE_AUTH_TOKEN']);
        foreach ($ar as $k => $v) {
            if (preg_match('/^' . self::OPTION_CODE_PREFIX . '/', strtoupper($k))) {
                $arResult[str_replace(self::OPTION_CODE_PREFIX, '', $k)] = $v;
            }
        }
        $this->options = $arResult;
    }

    public function getValue($option)
    {
        return Option::get($this->getModuleId(), $option, '', $this->getSiteId());
    }

    public function getModuleId()
    {
        return self::MODULE_ID;
    }

    public function getFormName()
    {
        return self::FORM_NAME;
    }

    private function getOptions()
    {
        return $this->options;
    }

    private function getSiteId()
    {
        return '';
    }

    public function getUserFieldCodeApiToken()
    {
        return self::USER_FIELD_CODE_API_TOKEN;
    }

    public function userFieldToken($flag)
    {
        if ($flag == 'Y') {
            $obUserField = new CUserTypeEntity;
            $obUserField->Add([
                'ENTITY_ID' => 'USER',
                'FIELD_NAME' => self::USER_FIELD_CODE_API_TOKEN,
                'USER_TYPE_ID' => 'string',
                'SORT' => 100,
                'MULTIPLE' => 'N',
                'MANDATORY' => 'N',
                'SHOW_FILTER' => 'I',
                'SHOW_IN_LIST' => 'Y',
                'EDIT_IN_LIST' => 'Y',
                'IS_SEARCHABLE' => 'N',
                'SETTINGS' => [
                    'SIZE' => 40,
                    'ROWS' => 1,
                    'REGEXP' => '',
                    'MIN_LENGTH' => 0,
                    'MAX_LENGTH' => 0,
                    'DEFAULT_VALUE' => ''
                ]
            ]);
        }
    }

    public function generateTokens()
    {
        $user = new CUser();
        $counter = 0;
        if ($users = CUser::GetList($by = 'ID', $order = 'DESC', [self::USER_FIELD_CODE_API_TOKEN => false, 'ACTIVE' => 'Y'], ['FIELDS' => ['ID', 'LOGIN']])) {
            while ($ar = $users->fetch()) {
                // Set token for users
                $token = md5($ar['ID'] . '-' . $ar['LOGIN'] . '=' . date('Y-m-d H:i:s'));
                $token = str_split($token, 8);
                $token = implode('-', $token);
                $user->update($ar['ID'], [self::USER_FIELD_CODE_API_TOKEN => $token]);
                $counter++;
            }
        }
        return $counter;
    }
}