<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingAssignedTo - Enum
 */
enum TrainingAssignedTo: string
{
    case NONE = 'none';
    case ALLUSERS = 'allUsers';
    case CLICKEDPAYLOAD = 'clickedPayload';
    case COMPROMISED = 'compromised';
    case REPORTEDPHISH = 'reportedPhish';
    case READBUTNOTCLICKED = 'readButNotClicked';
    case DIDNOTHING = 'didNothing';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
