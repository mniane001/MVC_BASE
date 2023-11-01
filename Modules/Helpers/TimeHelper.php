<?php 


class TimeHelper {
    /**
     * Convert 24-hour time format to 12-hour AM/PM format.
     *
     * @param string $time Time in 24-hour format (e.g., "23:15")
     * @return string Time in 12-hour AM/PM format (e.g., "11:15 PM")
     */
    public static function to12HourFormat($time) {
        return date("g:i A", strtotime($time));
    }
}