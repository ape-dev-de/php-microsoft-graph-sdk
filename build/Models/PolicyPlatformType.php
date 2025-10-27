<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyPlatformType - Enum
 * Supported platform types for policies.
 */
enum PolicyPlatformType: string
{
    case ANDROID = 'android';
    case ANDROIDFORWORK = 'androidForWork';
    case IOS = 'iOS';
    case MACOS = 'macOS';
    case WINDOWSPHONE81 = 'windowsPhone81';
    case WINDOWS81ANDLATER = 'windows81AndLater';
    case WINDOWS10ANDLATER = 'windows10AndLater';
    case ALL = 'all';
}
