<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['base_url']	= '';

if (($config['base_url'] == '')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $root = $protocol . $_SERVER['HTTP_HOST'];
    $root .= dirname($_SERVER['SCRIPT_NAME']);
    $config['base_url'] = $root;
}

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['index_page'] = '';

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of 'AUTO' works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by CodeIgniter.
| For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/urls.html
*/

$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']	= 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the 'hooks' feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = FALSE;


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'MY_';

/*
|--------------------------------------------------------------------------
| Composer auto-loading
|--------------------------------------------------------------------------
|
| Enabling this setting will tell CodeIgniter to look for a Composer
| package auto-loader script in application/vendor/autoload.php.
|
|	$config['composer_autoload'] = TRUE;
|
| Or if you have your vendor/ directory located somewhere else, you
| can opt to set a specific path as well:
|
|	$config['composer_autoload'] = '/path/to/vendor/autoload.php';
|
| For more information about Composer, please visit https://getcomposer.org/
|
| Note: This will NOT disable or override the CodeIgniter-specific
|	autoloading (application/config/autoload.php)
*/
$config['composer_autoload'] = FALSE;

/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify with a regular expression which characters are permitted
| within your URLs.  When someone tries to submit a URL with disallowed
| characters they will get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| By default CodeIgniter enables access to the $_GET array.  If for some
| reason you would like to disable it, set 'allow_get_array' to FALSE.
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
*/
$config['allow_get_array']	= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']	= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 1;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/logs/ folder. Use a full server path with trailing slash.
|
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| system/cache/ folder.  Use a full server path with trailing slash.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Session class you
| MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = 'YJ9FljXV4axG7QTzEzbRaUBFwi0FzIls';

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| 'sess_driver'
|
|	The storage driver to use: files, database, redis, memcached
|
| 'sess_cookie_name'
|
|	The session cookie name, must contain only [0-9a-z_-] characters
|
| 'sess_expiration'
|
|	The number of SECONDS you want the session to last.
|	Setting to 0 (zero) means expire when the browser is closed.
|
| 'sess_save_path'
|
|	The location to save sessions to, driver dependent.
|
|	For the 'files' driver, it's a path to a writable directory.
|	WARNING: Only absolute paths are supported!
|
|	For the 'database' driver, it's a table name.
|	Please read up the manual for the format with other session drivers.
|
|	IMPORTANT: You are REQUIRED to set a valid save path!
|
| 'sess_match_ip'
|
|	Whether to match the user's IP address when reading the session data.
|
|	WARNING: If you're using the database driver, don't forget to update
|	         your session table's PRIMARY KEY when changing this setting.
|
| 'sess_time_to_update'
|
|	How many seconds between CI regenerating the session ID.
|
| 'sess_regenerate_destroy'
|
|	Whether to destroy session data associated with the old session ID
|	when auto-regenerating the session ID. When set to FALSE, the data
|	will be later deleted by the garbage collector.
|
| Other session cookie settings are shared with the rest of the application,
| except for 'cookie_prefix' and 'cookie_httponly', which are ignored here.
|
*/
$config['sess_cookie_name']	= 'jorani_session';
$config['sess_driver'] = 'database';
$config['sess_save_path'] = 'ci_sessions';
$config['sess_regenerate_destroy'] = FALSE;
$config['sess_expiration']	= 7200;
$config['sess_use_database']	= FALSE;
$config['sess_table_name']	= 'ci_sessions';
$config['sess_match_ip']	= FALSE;
$config['sess_time_to_update']	= 300;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix' = Set a prefix if you need to avoid collisions
| 'cookie_domain' = Set to .your-domain.com for site-wide cookies
| 'cookie_path'   =  Typically will be a forward slash
| 'cookie_secure' =  Cookies will only be set if a secure HTTPS connection exists.
|
*/
$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Determines whether the XSS filter is always active when GET, POST or
| COOKIE data is encountered
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
| Enables a CSRF cookie token to be set. When set to TRUE, token will be
| checked on a submitted form. If you are accepting user data, it is strongly
| recommended CSRF protection be enabled.
|
| 'csrf_token_name' = The token name
| 'csrf_cookie_name' = The cookie name
| 'csrf_expire' = The number in seconds the token should expire.
*/
if (isset($_SERVER["REQUEST_URI"]))
{
    if(stripos($_SERVER["REQUEST_URI"],'/api/') === FALSE)
    {
        $config['csrf_protection'] = TRUE;
    }
    else
    {
        $config['csrf_protection'] = FALSE;
    }
}
else
{
    $config['csrf_protection'] = TRUE;
}
$config['csrf_token_name'] = 'csrf_test_jorani';
$config['csrf_cookie_name'] = 'csrf_cookie_jorani';
$config['csrf_expire'] = 7200;

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Enables Gzip output compression for faster page loads.  When enabled,
| the output class will test whether your server supports Gzip.
| Even if it does, however, not all browsers support compression
| so enable only if you are reasonably sure your visitors can handle it.
|
| VERY IMPORTANT:  If you are getting a blank page when compression is enabled it
| means you are prematurely outputting something to your browser. It could
| even be a line of whitespace at the end of one of your scripts.  For
| compression to work, nothing can be sent before the output buffer is called
| by the output class.  Do not 'echo' any values with compression enabled.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are 'local' or 'gmt'.  This pref tells the system whether to use
| your server's local time as the master 'now' reference, or convert it to
| GMT.  See the 'date helper' page of the user guide for information
| regarding date handling.
|
*/
$config['time_reference'] = 'local';

/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = FALSE;

/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy IP
| addresses from which CodeIgniter should trust the HTTP_X_FORWARDED_FOR
| header in order to properly identify the visitor's IP address.
| Comma-delimited, e.g. '10.0.1.200,10.0.1.201'
|
*/
$config['proxy_ips'] = '';

/*
|--------------------------------------------------------------------------
| Jorani application settings
|--------------------------------------------------------------------------
|
|
|
|
|
|
*/

//____________________________________________________________________________
//default email from
$config['from_mail'] = 'do.not@reply.me';
$config['from_name'] = 'Jorani';
$config['subject_prefix'] = '[Jorani] ';

//____________________________________________________________________________
//User management
$config['disable_capitalization'] = FALSE;    //Set this value to TRUE if you want to disable the capitalization of lastname
$config['password_length'] = 8;                    //Password minimal length
$config['default_role_id'] = 2;                       //Default role id (e.g. 2 for user)
//Login pattern (automatically created from firstname and lastname)
$config['login_pattern'] = 'jdoe';            //(default) First letter of firstname and lastname (up to field limit)
//$config['login_pattern'] = 'john.doe';    //Firstname plus dot plus lastname (up to field limit)
//$config['login_pattern'] = 'john_doe';    //Firstname plus underscore plus lastname (up to field limit)
//$config['login_pattern'] = '#email';       //Copy another field of the form (use an existing field name with the pound sign)

//____________________________________________________________________________
//Set this value to TRUE if you want to create leaves at status requested instead of planned
$config['leave_status_requested'] = FALSE;
$config['default_leave_type'] = FALSE;      //Set this value with the default leave type identifier (integer).

//Create a leave request / Allow overwrite of the duration
$config['disable_edit_leave_duration'] = FALSE;             //Switch to read-only (the duration of leave is computed)
$config['disable_edit_telework_duration'] = FALSE;             //Switch to read-only (the duration of telework is computed)

//____________________________________________________________________________
//Set this value to TRUE if you want to create extras at status requested instead of planned
$config['extra_status_requested'] = FALSE;

//____________________________________________________________________________
//Set this value to TRUE if you want to allow employees to edit or delete rejected leave requests, 2 use cases :
// - Cancel an accepted leave request : the manager reject it, then the employee can delete it.
// - Modify a leave request containing a mistake : the manager reject it, then the employee can edit it.
$config['delete_rejected_requests'] = FALSE;
$config['edit_rejected_requests'] = FALSE;

//____________________________________________________________________________
//Set this value to TRUE if you want to allow manager to create leave requests in behalf of their collaborators
$config['requests_by_manager'] = FALSE;

//Set this value to true if you want to force the manager to comment rejections
$config['mandatory_comment_on_reject'] = FALSE;

//Set this value to true if you want to forbid the employee to submit a leave request with a negative amount 
$config['disallow_requests_without_credit'] = TRUE;
//Set this value to true if you want to forbid the employee to submit a telework request with a negative amount
$config['disallow_telework_requests_without_credit'] = FALSE;

//____________________________________________________________________________
//List of available languages. If you limit this list to one language, the list of available languages will be hidden from the login form
//Beware that regional variant is case sensitivie (e.g. "en-GB" and not "en-gb")
$config['languages'] = 'en,en-GB,fr,es,nl,de,it,ru,cs,uk,km,fa,vi,tr,zh,el,pt,ar,hu,ca,ro,sk';

//If you want to use another font for a specific language, put the font into assets/fonts folder and map as in this example
//Extra fonts are coming from Google noto font project: https://www.google.com/get/noto/
$config['fonts'] =
    Array (
        'km' => Array (
            'name' => 'Noto Sans Khmer',
            'asset' => 'NotoSansKhmer-Regular.ttf',
        ),
        'fa' => Array (
            'name' => 'Noto Naskh Arabic',
            'asset' => 'NotoNaskhArabic-Regular.ttf',
        ),
    );

//____________________________________________________________________________
// Hide/Disable features
$config['disable_overtime'] = FALSE; //Set this value to TRUE if you want to hide the menu entries related to overtime
$config['hide_global_cals_to_users'] = FALSE; //Set this value to TRUE if you want to hide global calendars (global/tabular) to users
$config['disable_telework'] = FALSE; //Set this value to TRUE if you want to hide the menu entries related to telework
$config['disable_campaign_telework'] = FALSE; //Set this value to TRUE if you want to hide the menu entries related to campaign telework
$config['disable_time_organisation'] = FALSE; //Set this value to TRUE if you want to hide the menu entries related to working time organisation
$config['hide_time_orgnisation_in_cals'] = FALSE; //Set this value to TRUE if you want to hide time organisation in global calendars (global/tabular)
$config['disable_department_calendar'] = FALSE; //Set this value to TRUE in order to disable the menu entry 'departement'
$config['disable_workmates_calendar'] = FALSE; //Set this value to TRUE in order to disable the menu entry 'my workmates'

//____________________________________________________________________________
//Google analytics tracking code (if empty, the Javascript tracking code will be desactivated).
//An option allows you to send the identifier of the connected user (a special configuration must be set in GA first).
//See https://developers.google.com/analytics/devguides/collection/analyticsjs/user-id
$config['ga_code'] = '';
$config['ga_send_userid'] = FALSE;

//____________________________________________________________________________
//E-mail settings of the application are stored into email.php file

//____________________________________________________________________________
//LDAP configuration
$config['ldap_enabled'] = FALSE;
$config['ldap_host'] = '127.0.0.1';
$config['ldap_port'] = 389;
$config['ldap_basedn'] = 'uid=%s,ou=people,dc=company,dc=com';  //Change the pattern, but let %s that symbolizes the user identifier
//If you switch on <<ldap_search_enabled>>, <<ldap_basedn>> may look like "OU=Users,DC=COMPANY,DC=COM"
$config['ldap_basedn_db'] = FALSE;      //If TRUE, ldap path is taken from user table

//Use a LDAP search filter as a connection alternative
//Note that you need to switch <<ldap_enabled>> to TRUE and fill <<ldap_host>>,
//<<ldap_port>>, and <<ldap_basedn>>
$config['ldap_search_enabled'] = FALSE;
$config['ldap_search_user'] = '';
$config['ldap_search_password'] = '';
$config['ldap_search_pattern'] = 'cn=%s';   //Change the pattern, but let %s that symbolizes the user identifier

//____________________________________________________________________________
//Oauth2 configuration
$config['oauth2_enabled'] = FALSE;
$config['oauth2_provider'] = 'google';   //Supported providers: google
$config['oauth2_client_id'] = '';
$config['oauth2_client_secret'] = '';

//____________________________________________________________________________
//SAML configuration
$config['saml_enabled'] = FALSE;
//Please configure SAML settings into config/saml.php

//____________________________________________________________________________
//Enable public ICS feeds (global calendar, contract, personal information)
$config['ics_enabled'] = TRUE;
$config['default_timezone'] = 'Europe/Paris';
$config['legacy_feeds'] = FALSE;    //Maintain the unsecure URLs for ICS feeds

//____________________________________________________________________________
//Enable public access for tabular and global calendar
//As the user won't choose the language of the web ui, please set <<language>>
$config['public_calendar'] = FALSE;

//____________________________________________________________________________
//Force spreadsheet export format. We strongly recommend XLSX format over Open Document Format.
//Please note that ods doesn't support all formatting/style options and is considered as experimental
$config['spreadsheet_format'] = 'xlsx';   //Supported formats: xlsx, ods

//____________________________________________________________________________
//Set this value to TRUE if you want to enable history of change (beware that it will impact the performance)
$config['enable_history'] = FALSE;
//Set this value to TRUE if you want to enable history of change for teleworks (beware that it will impact the performance)
$config['enable_teleworks_history'] = TRUE;

//____________________________________________________________________________
//Set this value to TRUE if you want to enable Application Performance Management features
$config['enable_apm_rum'] = FALSE;
//Display navigation timing to user. You need a browser supporting WebTiming API
$config['enable_apm_display'] = FALSE;
