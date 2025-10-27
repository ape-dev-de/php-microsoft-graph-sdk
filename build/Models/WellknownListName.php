<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WellknownListName - Enum
 */
enum WellknownListName: string
{
    case NONE = 'none';
    case DEFAULTLIST = 'defaultList';
    case FLAGGEDEMAILS = 'flaggedEmails';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
