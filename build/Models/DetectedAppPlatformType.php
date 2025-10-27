<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DetectedAppPlatformType - Enum
 * Indicates the operating system / platform of the discovered application.  Some possible values are Windows, iOS, macOS. The default value is unknown (0).
 */
enum DetectedAppPlatformType: string
{
    case UNKNOWN = 'unknown';
    case WINDOWS = 'windows';
    case WINDOWSMOBILE = 'windowsMobile';
    case WINDOWSHOLOGRAPHIC = 'windowsHolographic';
    case IOS = 'ios';
    case MACOS = 'macOS';
    case CHROMEOS = 'chromeOS';
    case ANDROIDOSP = 'androidOSP';
    case ANDROIDDEVICEADMINISTRATOR = 'androidDeviceAdministrator';
    case ANDROIDWORKPROFILE = 'androidWorkProfile';
    case ANDROIDDEDICATEDANDFULLYMANAGED = 'androidDedicatedAndFullyManaged';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
