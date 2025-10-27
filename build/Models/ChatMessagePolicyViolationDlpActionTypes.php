<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolationDlpActionTypes - Enum
 */
enum ChatMessagePolicyViolationDlpActionTypes: string
{
    case NONE = 'none';
    case NOTIFYSENDER = 'notifySender';
    case BLOCKACCESS = 'blockAccess';
    case BLOCKACCESSEXTERNAL = 'blockAccessExternal';
}
