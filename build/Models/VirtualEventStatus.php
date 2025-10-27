<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventStatus - Enum
 */
enum VirtualEventStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case CANCELED = 'canceled';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
