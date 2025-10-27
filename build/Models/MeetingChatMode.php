<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingChatMode - Enum
 */
enum MeetingChatMode: string
{
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';
    case LIMITED = 'limited';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
