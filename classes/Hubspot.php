<?php defined('SYSPATH') or die('No direct script access.');

class Hubspot
{
    public static function factory($endpoint = 'BaseClient')
    {
        $config = Kohana::$config->load('hubspot');

        if ( ! isset($config['api_key']) OR $config['api_key'] === FALSE )
            throw new Kohana_Exception('You forgot to set your API key in confic/hubspot.php');

        if ( ! include_once realpath(dirname(__FILE__).'/../vendor').'/class.'.strtolower($endpoint).'.php' )
            throw new Kohana_Exception('Invalid endpoint or perhaps you forget to initialize the hubspot submodule?');

        $class = "HubSpot_$endpoint";

        return new $class($config['api_key']);
    }
}