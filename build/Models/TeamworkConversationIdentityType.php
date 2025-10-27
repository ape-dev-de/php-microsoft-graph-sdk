<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkConversationIdentityType - Enum
 */
enum TeamworkConversationIdentityType: string
{
    case TEAM = 'team';
    case CHANNEL = 'channel';
    case CHAT = 'chat';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
