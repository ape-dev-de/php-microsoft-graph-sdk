<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CoachmarkLocationType - Enum
 */
enum CoachmarkLocationType: string
{
    case UNKNOWN = 'unknown';
    case FROMEMAIL = 'fromEmail';
    case SUBJECT = 'subject';
    case EXTERNALTAG = 'externalTag';
    case DISPLAYNAME = 'displayName';
    case MESSAGEBODY = 'messageBody';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
