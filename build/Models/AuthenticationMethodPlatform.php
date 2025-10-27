<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodPlatform - Enum
 */
enum AuthenticationMethodPlatform: string
{
    case UNKNOWN = 'unknown';
    case WINDOWS = 'windows';
    case MACOS = 'macOS';
    case IOS = 'iOS';
    case ANDROID = 'android';
    case LINUX = 'linux';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
