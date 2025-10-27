<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryStatus - Enum
 */
enum AccessReviewHistoryStatus: string
{
    case DONE = 'done';
    case INPROGRESS = 'inprogress';
    case ERROR = 'error';
    case REQUESTED = 'requested';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
