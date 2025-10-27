<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingSettingType - Enum
 */
enum TrainingSettingType: string
{
    case MICROSOFTCUSTOM = 'microsoftCustom';
    case MICROSOFTMANAGED = 'microsoftManaged';
    case NOTRAINING = 'noTraining';
    case CUSTOM = 'custom';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
