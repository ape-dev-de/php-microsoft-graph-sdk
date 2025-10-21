<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryEstimateOperation
 */
class SecurityEdiscoveryEstimateOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The type of action the operation represents. Possible values are: contentExport,  applyTags, convertToPdf, index, estimateStatistics, addToReviewSet, holdUpdate, unknownFutureValue, purgeData, exportReport, exportResult. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: purgeData, exportReport, exportResult. */
        public ?SecurityCaseAction $action = null,
        /** The date and time the operation was completed. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The user that created the operation. */
        public ?IdentitySet $createdBy = null,
        /** The date and time the operation was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The progress of the operation. */
        public ?float $percentProgress = null,
        /** Contains success and failure-specific result information. */
        public ?ResultInfo $resultInfo = null,
        /** The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed. */
        public ?SecurityCaseOperationStatus $status = null,
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
        public ?SecurityStatisticsOptions $statisticsOptions = null,
        /** The estimated count of unindexed items for the collection. */
        public ?float $unindexedItemCount = null,
        /** The estimated size of unindexed items for the collection. */
        public ?float $unindexedItemsSize = null,
        /** eDiscovery search. */
        public ?SecurityEdiscoverySearch $search = null
    ) {}
}
