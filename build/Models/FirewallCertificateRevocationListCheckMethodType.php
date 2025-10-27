<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FirewallCertificateRevocationListCheckMethodType - Enum
 * Possible values for firewallCertificateRevocationListCheckMethod
 */
enum FirewallCertificateRevocationListCheckMethodType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case NONE = 'none';
    case ATTEMPT = 'attempt';
    case REQUIRE = 'require';
}
