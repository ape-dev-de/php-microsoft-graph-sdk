<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingSourceType - Enum
 */
enum SettingSourceType: string
{
    case DEVICECONFIGURATION = 'deviceConfiguration';
    case DEVICEINTENT = 'deviceIntent';
}
