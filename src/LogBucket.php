<?php
class LogBucket{
    private static $url = 'http://logbucket.org/log.php';

    /**
     * Logs messages with an arbitrary level.
     * @return string string response from LogBucket or false on failiure
     */
    public static function log($key,$message,$level='debug'){
        $url = self::$url.'?key='.rawurlencode($key).'&message='.  rawurlencode(base64_encode($message)).'&level='.rawurlencode($level);
        $result = @file_get_contents($url);
        return $result;
    }

    /**
     * Logs alert messages
     * Action must be taken immediately. Example: Entire website down,
     * database unavailable, etc. This should rigger the SMS alerts and
     * wake you up.
     */
    public static function alert($key,$message){
        return self::log($key, $message, 'alert');
    }

    /**
     * Logs debug messages
     * Standard debug messages.
     */
    public static function debug($key,$message){
        return self::log($key, $message, 'debug');
    }

    /**
     * Logs critical messages
     * Critical conditions. Example: Application component unavailable,
     * unexpected exception.
     */
    public static function critical($key,$message){
        return self::log($key, $message, 'critical');
    }

    /**
     * Logs emergency messages
     * System is unusable.
     */
    public static function emergency($key,$message){
        return self::log($key, $message, 'emergency');
    }

    /**
     * Logs error messages
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     */
    public static function error($key,$message){
        return self::log($key, $message, 'error');
    }

    /**
     * Logs informational messages
     * Interesting events. Example: User logs in, SQL logs.
     */
    public static function info($key,$message){
        return self::log($key, $message, 'info');
    }

    /**
     * Logs notice messages
     * Normal but significant events.
     */
    public static function notice($key,$message){
        return self::log($key, $message, 'notice');
    }

    /**
     * Logs warning messages
     * Exceptional occurrences that are not errors.
     */
    public static function warning($key,$message){
        return self::log($key, $message, 'warning');
    }
}
