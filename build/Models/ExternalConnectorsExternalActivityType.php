<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalActivityType - Enum
 */
enum ExternalConnectorsExternalActivityType: string
{
    case VIEWED = 'viewed';
    case MODIFIED = 'modified';
    case CREATED = 'created';
    case COMMENTED = 'commented';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
