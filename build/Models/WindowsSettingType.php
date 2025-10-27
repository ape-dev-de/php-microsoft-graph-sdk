<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsSettingType - Enum
 */
enum WindowsSettingType: string
{
    case ROAMING = 'roaming';
    case BACKUP = 'backup';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
