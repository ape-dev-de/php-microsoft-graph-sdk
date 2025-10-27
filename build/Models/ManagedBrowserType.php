<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedBrowserType - Enum
 * Type of managed browser
 */
enum ManagedBrowserType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case MICROSOFTEDGE = 'microsoftEdge';
}
