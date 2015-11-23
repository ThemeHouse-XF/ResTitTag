<?php

/**
 *
 * @see XenResource_DataWriter_Update
 */
class ThemeHouse_ResTitTag_Extend_XenResource_DataWriter_Update extends XFCP_ThemeHouse_ResTitTag_Extend_XenResource_DataWriter_Update
{

    /**
     *
     * @see XenResource_DataWriter_Update::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        
        $xenOptions = XenForo_Application::getOptions();
        
        if (!$xenOptions->th_resTitTag_titleRequired || !$xenOptions->th_resTitTag_maxTitleLength) {
            unset($fields['xf_resource_update']['title']['required']);
            unset($fields['xf_resource_update']['title']['requiredError']);
            $fields['xf_resource_update']['title']['default'] = '';
        }
        
        $fields['xf_resource_update']['title']['maxLength'] = $xenOptions->th_resTitTag_maxTitleLength;
        
        return $fields;
    }
}