<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityStatisticsOptions - Enum
 */
enum SecurityStatisticsOptions: string
{
    case INCLUDEREFINERS = 'includeRefiners';
    case INCLUDEQUERYSTATS = 'includeQueryStats';
    case INCLUDEUNINDEXEDSTATS = 'includeUnindexedStats';
    case ADVANCEDINDEXING = 'advancedIndexing';
    case LOCATIONSWITHOUTHITS = 'locationsWithoutHits';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
