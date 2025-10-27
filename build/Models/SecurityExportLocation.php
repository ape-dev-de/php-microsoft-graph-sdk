<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityExportLocation - Enum
 */
enum SecurityExportLocation: string
{
    case RESPONSIVELOCATIONS = 'responsiveLocations';
    case NONRESPONSIVELOCATIONS = 'nonresponsiveLocations';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
