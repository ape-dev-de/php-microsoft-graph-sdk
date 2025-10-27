<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsClientPlatform - Enum
 */
enum CallRecordsClientPlatform: string
{
    case UNKNOWN = 'unknown';
    case WINDOWS = 'windows';
    case MACOS = 'macOS';
    case IOS = 'iOS';
    case ANDROID = 'android';
    case WEB = 'web';
    case IPPHONE = 'ipPhone';
    case ROOMSYSTEM = 'roomSystem';
    case SURFACEHUB = 'surfaceHub';
    case HOLOLENS = 'holoLens';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
