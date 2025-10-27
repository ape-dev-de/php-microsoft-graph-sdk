<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAddToCalendarOptions - Enum
 */
enum EducationAddToCalendarOptions: string
{
    case NONE = 'none';
    case STUDENTSANDPUBLISHER = 'studentsAndPublisher';
    case STUDENTSANDTEAMOWNERS = 'studentsAndTeamOwners';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case STUDENTSONLY = 'studentsOnly';
}
