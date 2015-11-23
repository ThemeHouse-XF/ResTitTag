<?php

class ThemeHouse_ResTitTag_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_ResTitTag' => array(
                'datawriter' => array(
                    'XenResource_DataWriter_Resource',
                    'XenResource_DataWriter_Update',
                    'XenResource_DataWriter_Version'
                ), 
            ), 
        );
    }

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_ResTitTag_Listener_LoadClass', $class, $extend, 'datawriter');
    }
}