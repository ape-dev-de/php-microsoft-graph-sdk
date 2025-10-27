<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatType - Enum
 */
enum ChatType: string
{
    case ONEONONE = 'oneOnOne';
    case GROUP = 'group';
    case MEETING = 'meeting';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
