<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsCallType - Enum
 */
enum CallRecordsCallType: string
{
    case UNKNOWN = 'unknown';
    case GROUPCALL = 'groupCall';
    case PEERTOPEER = 'peerToPeer';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
