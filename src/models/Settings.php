<?php


/**
 * Whatsapp Chat plugin for Craft CMS 3.x
 *
 * Whatsapp Chat
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2022 Dotsquares
 */

namespace ds\whatsapp\models;
use ds\whatsapp\Whatsapp;


use Craft;
use craft\base\Model;


/**
 * Whatsapp Model
 * 
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 
 */


class Settings extends Model
{
   // Public Properties
    // =========================================================================
   
    public $enable = false;
    public $Whatsapp = '';
    public $Message = '';
    public $location  = '';
  

    // Returns the validation rules for attributes.

    public function rules()
    {
        return [
            [['Whatsapp'], 'number'],
            [['Whatsapp'], 'required'],

           
        ];
    }
    
    public function getenable()
    {
        return Craft::parseEnv(trim(Whatsapp::getInstance()->getSettings()->enable));
    }
   
    public function getWhatsapp()
    {
        return Craft::parseEnv(trim(Whatsapp::getInstance()->getSettings()->Whatsapp));
    }

    public function getmessage()
    {
        return Craft::parseEnv(trim(Whatsapp::getInstance()->getSettings()->Message));
    }
   
    public function getlocation()
    {
        return Craft::parseEnv(trim(Whatsapp::getInstance()->getSettings()->location));
    }
    

    
}