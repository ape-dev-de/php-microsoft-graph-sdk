<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageType - Enum
 */
enum ChatMessageType: string
{
    case MESSAGE = 'message';
    case CHATEVENT = 'chatEvent';
    case TYPING = 'typing';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case SYSTEMEVENTMESSAGE = 'systemEventMessage';
}
