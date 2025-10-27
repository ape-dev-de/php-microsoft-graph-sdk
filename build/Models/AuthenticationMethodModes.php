<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodModes - Enum
 */
enum AuthenticationMethodModes: string
{
    case PASSWORD = 'password';
    case VOICE = 'voice';
    case HARDWAREOATH = 'hardwareOath';
    case SOFTWAREOATH = 'softwareOath';
    case SMS = 'sms';
    case FIDO2 = 'fido2';
    case WINDOWSHELLOFORBUSINESS = 'windowsHelloForBusiness';
    case MICROSOFTAUTHENTICATORPUSH = 'microsoftAuthenticatorPush';
    case DEVICEBASEDPUSH = 'deviceBasedPush';
    case TEMPORARYACCESSPASSONETIME = 'temporaryAccessPassOneTime';
    case TEMPORARYACCESSPASSMULTIUSE = 'temporaryAccessPassMultiUse';
    case EMAIL = 'email';
    case X509CERTIFICATESINGLEFACTOR = 'x509CertificateSingleFactor';
    case X509CERTIFICATEMULTIFACTOR = 'x509CertificateMultiFactor';
    case FEDERATEDSINGLEFACTOR = 'federatedSingleFactor';
    case FEDERATEDMULTIFACTOR = 'federatedMultiFactor';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
