<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseAuthenticationMethod - Enum
 */
enum BaseAuthenticationMethod: string
{
    case PASSWORD = 'password';
    case VOICE = 'voice';
    case HARDWAREOATH = 'hardwareOath';
    case SOFTWAREOATH = 'softwareOath';
    case SMS = 'sms';
    case FIDO2 = 'fido2';
    case WINDOWSHELLOFORBUSINESS = 'windowsHelloForBusiness';
    case MICROSOFTAUTHENTICATOR = 'microsoftAuthenticator';
    case TEMPORARYACCESSPASS = 'temporaryAccessPass';
    case EMAIL = 'email';
    case X509CERTIFICATE = 'x509Certificate';
    case FEDERATION = 'federation';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
