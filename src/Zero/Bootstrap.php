<?php
    // +----------------------------------------------------------------------
    // | z-framework
    // | is program start bootstrap
    // +----------------------------------------------------------------------
    // | Copyright (c) 2016~2018 http://zframework.fastrun.cn All rights reserved.
    // +----------------------------------------------------------------------
    // | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
    // +----------------------------------------------------------------------
    // | Author: 张吉凯 <919342864@qq.com>
    // +----------------------------------------------------------------------
    // | Github: CrazyCodes <https://github.com/CrazyCodes>
    // +----------------------------------------------------------------------
    
    namespace Zero;
    
    class Bootstrap
    {
        protected static $dirPath;
        
        public static function run(ZeroInterface $zero, $dirPath)
        {
            self::$dirPath = $dirPath;
            self::requireConfig();
    
            // todo include config files
            $zero->load();
            
           
        }
        
        public static function requireConfig()
        {
            require_once self::$dirPath . "/../config/route.php";
        }
    }