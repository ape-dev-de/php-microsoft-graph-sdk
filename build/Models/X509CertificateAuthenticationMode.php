<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationMode - Enum
 */
enum X509CertificateAuthenticationMode: string
{
    case X509CERTIFICATESINGLEFACTOR = 'x509CertificateSingleFactor';
    case X509CERTIFICATEMULTIFACTOR = 'x509CertificateMultiFactor';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
