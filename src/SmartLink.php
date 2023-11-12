<?php

namespace SmartLink;

class SmartLink
{
    protected static $packageName;
    protected static $desktopURL;

    public static function setPackageName($packageName)
    {
        self::$packageName = $packageName;
    }

    public static function setDesktopURL($desktopURL)
    {
        self::$desktopURL = $desktopURL;
    }

    public static function generateSmartLink($payload)
    {
        $deepLink = 'smartlink://open?package=' . self::$packageName . '&payload=' . urlencode(json_encode($payload));

        if (self::isMobile()) {
            return $deepLink;
        } else {
            return self::$desktopURL;
        }
    }

    protected static function isMobile()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        return (strpos($agent, 'android') !== false || strpos($agent, 'iphone') !== false || strpos($agent, 'ipad') !== false);
    }
}
