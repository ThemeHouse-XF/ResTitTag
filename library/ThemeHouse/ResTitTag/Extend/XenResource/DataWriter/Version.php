<?php

/**
 *
 * @see XenResource_DataWriter_Version
 */
class ThemeHouse_ResTitTag_Extend_XenResource_DataWriter_Version extends XFCP_ThemeHouse_ResTitTag_Extend_XenResource_DataWriter_Version
{

    /**
     *
     * @see XenResource_DataWriter_Version::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();

        $fields['xf_resource_version']['version_string']['maxLength'] = XenForo_Application::getOptions()->th_resTitTag_maxVersionStringLength;

        return $fields;
    }
}