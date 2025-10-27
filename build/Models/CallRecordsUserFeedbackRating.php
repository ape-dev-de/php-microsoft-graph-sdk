<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsUserFeedbackRating - Enum
 */
enum CallRecordsUserFeedbackRating: string
{
    case NOTRATED = 'notRated';
    case BAD = 'bad';
    case POOR = 'poor';
    case FAIR = 'fair';
    case GOOD = 'good';
    case EXCELLENT = 'excellent';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
