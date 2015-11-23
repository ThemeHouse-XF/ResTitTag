<?php

class ThemeHouse_ResTitTag_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/resource-title-and-tag-lines.2815/';

    /**
     *
     * @see ThemeHouse_Install::_getPrerequisites()
     */
    protected function _getPrerequisites()
    {
        return array(
            'XenResource' => '1010000'
        );
    }

    protected function _getFieldChangesOnInstall()
    {
        return array(
            'xf_resource' => array(
                'title' => '`title` text NOT NULL',
                'tag_line' => '`tag_line` text NOT NULL'
            ),
            'xf_resource_update' => array(
                'title' => '`title` text NOT NULL'
            ),
            'xf_resource_version' => array(
                'version_string' => '`version_string` text NOT NULL'
            )
        );
    }

    protected function _getFieldChangesOnUninstall()
    {
        return array(
            'xf_resource' => array(
                'title' => '`title` VARCHAR(100) NOT NULL',
                'tag_line' => '`tag_line` VARCHAR(100) NOT NULL'
            ),
            'xf_resource_update' => array(
                'title' => '`title` VARCHAR(100) NOT NULL'
            ),
            'xf_resource_version' => array(
                'version_string' => '`version_string` VARCHAR(50) NOT NULL'
            )
        );
    }
}