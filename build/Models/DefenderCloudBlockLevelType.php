<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefenderCloudBlockLevelType - Enum
 * Possible values of Cloud Block Level
 */
enum DefenderCloudBlockLevelType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case HIGH = 'high';
    case HIGHPLUS = 'highPlus';
    case ZEROTOLERANCE = 'zeroTolerance';
}
