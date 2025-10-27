<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsOperatingSystemRestartCategory - Enum
 * Operating System restart category.
 */
enum UserExperienceAnalyticsOperatingSystemRestartCategory: string
{
    case UNKNOWN = 'unknown';
    case RESTARTWITHUPDATE = 'restartWithUpdate';
    case RESTARTWITHOUTUPDATE = 'restartWithoutUpdate';
    case BLUESCREEN = 'blueScreen';
    case SHUTDOWNWITHUPDATE = 'shutdownWithUpdate';
    case SHUTDOWNWITHOUTUPDATE = 'shutdownWithoutUpdate';
    case LONGPOWERBUTTONPRESS = 'longPowerButtonPress';
    case BOOTERROR = 'bootError';
    case UPDATE = 'update';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
