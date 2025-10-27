<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryDecisionFilter - Enum
 */
enum AccessReviewHistoryDecisionFilter: string
{
    case APPROVE = 'approve';
    case DENY = 'deny';
    case NOTREVIEWED = 'notReviewed';
    case DONTKNOW = 'dontKnow';
    case NOTNOTIFIED = 'notNotified';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
