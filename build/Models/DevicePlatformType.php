<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DevicePlatformType - Enum
 * Supported platform types.
 */
enum DevicePlatformType: string
{
    case ANDROID = 'android';
    case ANDROIDFORWORK = 'androidForWork';
    case IOS = 'iOS';
    case MACOS = 'macOS';
    case WINDOWSPHONE81 = 'windowsPhone81';
    case WINDOWS81ANDLATER = 'windows81AndLater';
    case WINDOWS10ANDLATER = 'windows10AndLater';
    case ANDROIDWORKPROFILE = 'androidWorkProfile';
    case UNKNOWN = 'unknown';
    case ANDROIDAOSP = 'androidAOSP';
    case ANDROIDMOBILEAPPLICATIONMANAGEMENT = 'androidMobileApplicationManagement';
    case IOSMOBILEAPPLICATIONMANAGEMENT = 'iOSMobileApplicationManagement';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
