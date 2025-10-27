<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallState - Enum
 */
enum CallState: string
{
    case INCOMING = 'incoming';
    case ESTABLISHING = 'establishing';
    case ESTABLISHED = 'established';
    case HOLD = 'hold';
    case TRANSFERRING = 'transferring';
    case TRANSFERACCEPTED = 'transferAccepted';
    case REDIRECTING = 'redirecting';
    case TERMINATING = 'terminating';
    case TERMINATED = 'terminated';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
