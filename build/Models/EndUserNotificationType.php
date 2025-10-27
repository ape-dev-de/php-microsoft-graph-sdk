<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotificationType - Enum
 */
enum EndUserNotificationType: string
{
    case UNKNOWN = 'unknown';
    case POSITIVEREINFORCEMENT = 'positiveReinforcement';
    case NOTRAINING = 'noTraining';
    case TRAININGASSIGNMENT = 'trainingAssignment';
    case TRAININGREMINDER = 'trainingReminder';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
