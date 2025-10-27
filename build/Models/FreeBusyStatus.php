<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FreeBusyStatus - Enum
 */
enum FreeBusyStatus: string
{
    case UNKNOWN = 'unknown';
    case FREE = 'free';
    case TENTATIVE = 'tentative';
    case BUSY = 'busy';
    case OOF = 'oof';
    case WORKINGELSEWHERE = 'workingElsewhere';
}
