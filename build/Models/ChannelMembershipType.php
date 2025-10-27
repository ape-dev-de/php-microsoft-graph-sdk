<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelMembershipType - Enum
 */
enum ChannelMembershipType: string
{
    case STANDARD = 'standard';
    case PRIVATE = 'private';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case SHARED = 'shared';
}
