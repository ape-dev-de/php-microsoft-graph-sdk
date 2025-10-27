<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FirewallPreSharedKeyEncodingMethodType - Enum
 * Possible values for firewallPreSharedKeyEncodingMethod
 */
enum FirewallPreSharedKeyEncodingMethodType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case NONE = 'none';
    case UTF8 = 'utF8';
}
