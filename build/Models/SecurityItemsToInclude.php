<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityItemsToInclude - Enum
 */
enum SecurityItemsToInclude: string
{
    case SEARCHHITS = 'searchHits';
    case PARTIALLYINDEXED = 'partiallyIndexed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
