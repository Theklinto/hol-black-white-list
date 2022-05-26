<?php
class Hol_bwlist_logger
{
    public function Log($description, $value = null, $date = null, $logName = null, $logLocation = null)
    {
        $timestamp = "";

        if (empty($date)) {
            $date = date("d-m-Y");
            $timestamp = date("H:i:s");
        }

        if (empty($logName)) {
            $logName = $date;
        }

        if (empty($logLocation)) {
            $logLocation = WP_PLUGIN_DIR . '/hol-black-white-list/logs/';
        }

        $file = $logLocation . $logName . '.txt';
        $spacing = "\n\n";

        if (empty($value)) {
            $spacing = "\n";
        }

        file_put_contents(
            $file,
            "[$date $timestamp] $description\n" .
            print_r($value, true) . $spacing,
            FILE_APPEND
        );
        return;
    }
}
