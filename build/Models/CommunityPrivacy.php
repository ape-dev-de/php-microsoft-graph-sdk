<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunityPrivacy - Enum
 * Types of communityPrivacy.
 */
enum CommunityPrivacy: string
{
    case PUBLIC = 'public';
    case PRIVATE = 'private';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
