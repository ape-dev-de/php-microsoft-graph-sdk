<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntityType - Enum
 */
enum EntityType: string
{
    case EVENT = 'event';
    case MESSAGE = 'message';
    case DRIVEITEM = 'driveItem';
    case EXTERNALITEM = 'externalItem';
    case SITE = 'site';
    case LIST = 'list';
    case LISTITEM = 'listItem';
    case DRIVE = 'drive';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case CHATMESSAGE = 'chatMessage';
    case PERSON = 'person';
    case ACRONYM = 'acronym';
    case BOOKMARK = 'bookmark';
}
