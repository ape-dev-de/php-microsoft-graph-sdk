<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInFrequencyInterval - Enum
 */
enum SignInFrequencyInterval: string
{
    case TIMEBASED = 'timeBased';
    case EVERYTIME = 'everyTime';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
