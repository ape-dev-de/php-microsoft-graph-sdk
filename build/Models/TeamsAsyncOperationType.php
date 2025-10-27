<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAsyncOperationType - Enum
 */
enum TeamsAsyncOperationType: string
{
    case INVALID = 'invalid';
    case CLONETEAM = 'cloneTeam';
    case ARCHIVETEAM = 'archiveTeam';
    case UNARCHIVETEAM = 'unarchiveTeam';
    case CREATETEAM = 'createTeam';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case TEAMIFYGROUP = 'teamifyGroup';
    case CREATECHANNEL = 'createChannel';
    case ARCHIVECHANNEL = 'archiveChannel';
    case UNARCHIVECHANNEL = 'unarchiveChannel';
}
