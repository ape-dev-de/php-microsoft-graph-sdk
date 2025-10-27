<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageActionFlag - Enum
 */
enum MessageActionFlag: string
{
    case ANY = 'any';
    case CALL = 'call';
    case DONOTFORWARD = 'doNotForward';
    case FOLLOWUP = 'followUp';
    case FYI = 'fyi';
    case FORWARD = 'forward';
    case NORESPONSENECESSARY = 'noResponseNecessary';
    case READ = 'read';
    case REPLY = 'reply';
    case REPLYTOALL = 'replyToAll';
    case REVIEW = 'review';
}
