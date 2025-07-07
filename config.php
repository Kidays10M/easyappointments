<?php
class Config
{
    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    public static string $BASE_URL = 'https://' . getenv('RAILWAY_PUBLIC_DOMAIN');
    public static string $LANGUAGE = 'english';
    public static bool $DEBUG_MODE = true;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    public static string $DB_HOST = getenv('DB_HOST');
    public static string $DB_NAME = getenv('DB_NAME');
    public static string $DB_USERNAME = getenv('DB_USERNAME');
    public static string $DB_PASSWORD = getenv('DB_PASSWORD');

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    public static bool $GOOGLE_SYNC_FEATURE = false;
    public static string $GOOGLE_CLIENT_ID = getenv('GOOGLE_CLIENT_ID') ?: '';
    public static string $GOOGLE_CLIENT_SECRET = getenv('GOOGLE_CLIENT_SECRET') ?: '';
}
// ------------------------------------------------------------------------
// END OF CONFIGURATION
// ------------------------------------------------------------------------