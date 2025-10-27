<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OAuthAppScope - Enum
 */
enum OAuthAppScope: string
{
    case UNKNOWN = 'unknown';
    case READCALENDAR = 'readCalendar';
    case READCONTACT = 'readContact';
    case READMAIL = 'readMail';
    case READALLCHAT = 'readAllChat';
    case READALLFILE = 'readAllFile';
    case READANDWRITEMAIL = 'readAndWriteMail';
    case SENDMAIL = 'sendMail';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
