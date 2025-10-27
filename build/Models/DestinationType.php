<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DestinationType - Enum
 */
enum DestinationType: string
{
    case NEW = 'new';
    case INPLACE = 'inPlace';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
