<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateCRLValidationConfigurationState - Enum
 */
enum X509CertificateCRLValidationConfigurationState: string
{
    case DISABLED = 'disabled';
    case ENABLED = 'enabled';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
