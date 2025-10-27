<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionTrigger - Enum
 */
enum SecurityRetentionTrigger: string
{
    case DATELABELED = 'dateLabeled';
    case DATECREATED = 'dateCreated';
    case DATEMODIFIED = 'dateModified';
    case DATEOFEVENT = 'dateOfEvent';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
