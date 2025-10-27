<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingRequestType - Enum
 */
enum MeetingRequestType: string
{
    case NONE = 'none';
    case NEWMEETINGREQUEST = 'newMeetingRequest';
    case FULLUPDATE = 'fullUpdate';
    case INFORMATIONALUPDATE = 'informationalUpdate';
    case SILENTUPDATE = 'silentUpdate';
    case OUTDATED = 'outdated';
    case PRINCIPALWANTSCOPY = 'principalWantsCopy';
}
