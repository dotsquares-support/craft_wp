<?php


/**
 *  Whatsapp Chat plugin for Craft CMS 3.x
 *
 *  Whatsapp Chat
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2022 Dotsquares
 */

namespace ds\whatsapp\assetbundles;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;


class WhatsappAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    public function init()
    {
        $this->sourcePath = "@ds/whatsapp/resources/dist";

        $this->css = [
            'css/Whatsapp.css',
        ];

        parent::init();
    }
}