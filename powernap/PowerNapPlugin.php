<?php
namespace Craft;

/**
 * Power Nap plugin
 */
class PowerNapPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Power Nap');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Pixel & Tonic';
    }

    public function getDeveloperUrl()
    {
        return 'http://pixelandtonic.com';
    }
}
