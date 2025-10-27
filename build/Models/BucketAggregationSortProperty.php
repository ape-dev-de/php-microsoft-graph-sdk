<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BucketAggregationSortProperty - Enum
 */
enum BucketAggregationSortProperty: string
{
    case COUNT = 'count';
    case KEYASSTRING = 'keyAsString';
    case KEYASNUMBER = 'keyAsNumber';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
