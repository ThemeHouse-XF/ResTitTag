<?php

/**
 *
 * @see XenResource_DataWriter_Resource
 */
class ThemeHouse_ResTitTag_Extend_XenResource_DataWriter_Resource extends XFCP_ThemeHouse_ResTitTag_Extend_XenResource_DataWriter_Resource
{

    /**
     *
     * @see XenResource_DataWriter_Resource::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        
        $xenOptions = XenForo_Application::getOptions();
        
        if (!$xenOptions->th_resTitTag_titleRequired || !$xenOptions->th_resTitTag_maxTitleLength) {
            unset($fields['xf_resource']['title']['required']);
            unset($fields['xf_resource']['title']['requiredError']);
            $fields['xf_resource']['title']['default'] = '';
        }
        
        $fields['xf_resource']['title']['maxLength'] = $xenOptions->th_resTitTag_maxTitleLength;
        
        $fields['xf_resource']['tag_line']['maxLength'] = XenForo_Application::getOptions()->th_resTitTag_maxTagLineLength;
        
        return $fields;
    }

    protected function _preSave()
    {
        parent::_preSave();
        
        $xenOptions = XenForo_Application::getOptions();
        
        if (!$xenOptions->th_resTitTag_maxTitleLength) {
            $this->set('title', '');
        }
    }
}