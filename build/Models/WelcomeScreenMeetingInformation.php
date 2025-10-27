<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WelcomeScreenMeetingInformation - Enum
 * Possible values for welcome screen meeting information.
 */
enum WelcomeScreenMeetingInformation: string
{
    case USERDEFINED = 'userDefined';
    case SHOWORGANIZERANDTIMEONLY = 'showOrganizerAndTimeOnly';
    case SHOWORGANIZERANDTIMEANDSUBJECT = 'showOrganizerAndTimeAndSubject';
}
