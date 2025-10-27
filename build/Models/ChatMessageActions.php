<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageActions - Enum
 */
enum ChatMessageActions: string
{
    case REACTIONADDED = 'reactionAdded';
    case REACTIONREMOVED = 'reactionRemoved';
    case ACTIONUNDEFINED = 'actionUndefined';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
