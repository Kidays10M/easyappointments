<?php

class Config
{
    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------
    public static ?string $BASE_URL = null; // Declare as nullable
    public static string $LANGUAGE = 'english';
    public static bool $DEBUG_MODE = true;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------
    public static ?string $DB_HOST = null;
    public static ?string $DB_NAME = null;
    public static ?string $DB_USERNAME = null;
    public static ?string $DB_PASSWORD = null;

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------
    public static bool $GOOGLE_SYNC_FEATURE = false;
    public static ?string $GOOGLE_CLIENT_ID = null;
    public static ?string $GOOGLE_CLIENT_SECRET = null;

    /**
     * Initializes the configuration by loading values from the environment.
     * This method should be called once when your application starts.
     */
    public static function init(): void
    {
        // Now we can use function calls because this is executed at runtime
        self::$BASE_URL = 'https://' . getenv('RAILWAY_PUBLIC_DOMAIN');

        self::$DB_HOST = getenv('DB_HOST') ?: null;
        self::$DB_NAME = getenv('DB_NAME') ?: null;
        self::$DB_USERNAME = getenv('DB_USERNAME') ?: null;
        self::$DB_PASSWORD = getenv('DB_PASSWORD') ?: null;
        
        self::$GOOGLE_CLIENT_ID = getenv('GOOGLE_CLIENT_ID') ?: '';
        self::$GOOGLE_CLIENT_SECRET = getenv('GOOGLE_CLIENT_SECRET') ?: '';
    }
}

// ------------------------------------------------------------------------
// END OF CONFIGURATION
// ------------------------------------------------------------------------