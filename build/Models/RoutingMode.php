<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoutingMode - Enum
 */
enum RoutingMode: string
{
    case ONETOONE = 'oneToOne';
    case MULTICAST = 'multicast';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
