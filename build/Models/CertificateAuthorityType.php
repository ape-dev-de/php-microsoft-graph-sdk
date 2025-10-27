<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateAuthorityType - Enum
 */
enum CertificateAuthorityType: string
{
    case ROOT = 'root';
    case INTERMEDIATE = 'intermediate';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
