<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Online Appointment Scheduler
 * ---------------------------------------------------------------------------- */

class Config
{
    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL = 'https://' . getenv('RAILWAY_PUBLIC_DOMAIN');
    const LANGUAGE = 'english';
    const DEBUG_MODE = true;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST = getenv('DB_HOST');
    const DB_NAME = getenv('DB_NAME');
    const DB_USERNAME = getenv('DB_USERNAME');
    const DB_PASSWORD = getenv('DB_PASSWORD');

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE = false;
    const GOOGLE_CLIENT_ID = getenv('GOOGLE_CLIENT_ID');
    const GOOGLE_CLIENT_SECRET = getenv('GOOGLE_CLIENT_SECRET');
}
