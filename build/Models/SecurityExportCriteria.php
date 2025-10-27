<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityExportCriteria - Enum
 */
enum SecurityExportCriteria: string
{
    case SEARCHHITS = 'searchHits';
    case PARTIALLYINDEXED = 'partiallyIndexed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
