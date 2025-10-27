<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingMessageType - Enum
 */
enum MeetingMessageType: string
{
    case NONE = 'none';
    case MEETINGREQUEST = 'meetingRequest';
    case MEETINGCANCELLED = 'meetingCancelled';
    case MEETINGACCEPTED = 'meetingAccepted';
    case MEETINGTENATIVELYACCEPTED = 'meetingTenativelyAccepted';
    case MEETINGDECLINED = 'meetingDeclined';
}
