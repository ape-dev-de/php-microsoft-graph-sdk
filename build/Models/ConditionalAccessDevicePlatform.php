<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessDevicePlatform - Enum
 */
enum ConditionalAccessDevicePlatform: string
{
    case ANDROID = 'android';
    case IOS = 'iOS';
    case WINDOWS = 'windows';
    case WINDOWSPHONE = 'windowsPhone';
    case MACOS = 'macOS';
    case ALL = 'all';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case LINUX = 'linux';
}
