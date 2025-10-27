<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoutingType - Enum
 */
enum RoutingType: string
{
    case FORWARDED = 'forwarded';
    case LOOKUP = 'lookup';
    case SELFFORK = 'selfFork';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
