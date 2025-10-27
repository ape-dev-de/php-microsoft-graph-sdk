<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardState - Enum
 */
enum TimeCardState: string
{
    case CLOCKEDIN = 'clockedIn';
    case ONBREAK = 'onBreak';
    case CLOCKEDOUT = 'clockedOut';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
