<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedbackResourceOutcomeStatus - Enum
 */
enum EducationFeedbackResourceOutcomeStatus: string
{
    case NOTPUBLISHED = 'notPublished';
    case PENDINGPUBLISH = 'pendingPublish';
    case PUBLISHED = 'published';
    case FAILEDPUBLISH = 'failedPublish';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
