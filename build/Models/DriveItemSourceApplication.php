<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemSourceApplication - Enum
 */
enum DriveItemSourceApplication: string
{
    case TEAMS = 'teams';
    case YAMMER = 'yammer';
    case SHAREPOINT = 'sharePoint';
    case ONEDRIVE = 'oneDrive';
    case STREAM = 'stream';
    case POWERPOINT = 'powerPoint';
    case OFFICE = 'office';
    case LOKI = 'loki';
    case LOOP = 'loop';
    case OTHER = 'other';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
