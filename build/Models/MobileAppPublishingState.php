<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppPublishingState - Enum
 * Indicates the publishing state of an app.
 */
enum MobileAppPublishingState: string
{
    case NOTPUBLISHED = 'notPublished';
    case PROCESSING = 'processing';
    case PUBLISHED = 'published';
}
