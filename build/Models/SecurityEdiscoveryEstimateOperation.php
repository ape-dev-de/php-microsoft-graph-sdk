<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryEstimateOperation
 */
class SecurityEdiscoveryEstimateOperation
{
    public function __construct(
        /** The estimated count of items for the search that matched the content query. */
        public ?float $indexedItemCount = null,
        /** The estimated size of items for the search that matched the content query. */
        public ?float $indexedItemsSize = null,
        /** The number of mailboxes that had search hits. */
        public ?float $mailboxCount = null,
        /** Contains the properties for report file metadata, including downloadUrl, fileName, and size. */
        public array $reportFileMetadata = [],
        /** The number of mailboxes that had search hits. */
        public ?float $siteCount = null,
        /** The options to generate statistics. Possible values are: includeRefiners, includeQueryStats, includeUnindexedStats, advancedIndexing, locationsWithoutHits, unknownFutureValue. */
        public ?string $statisticsOptions = null,
        /** The estimated count of unindexed items for the collection. */
        public ?float $unindexedItemCount = null,
        /** The estimated size of unindexed items for the collection. */
        public ?float $unindexedItemsSize = null,
        /** eDiscovery search. */
        public ?string $search = null
    ) {}
}
