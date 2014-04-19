<?php

    namespace Socialite\Service;

    use Guzzle\Plugin\Oauth\OauthPlugin;
    use Guzzle\Service\Client;

    class ServiceFactory
    {
        public static function twitter($oauth = array())
        {
            return new Twitter(new Client(), new OauthPlugin($oauth));
        }
    }