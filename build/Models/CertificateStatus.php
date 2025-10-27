<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateStatus - Enum
 */
enum CertificateStatus: string
{
    case NOTPROVISIONED = 'notProvisioned';
    case PROVISIONED = 'provisioned';
}
