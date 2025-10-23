<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryEstimateOperation
 */
class SecurityEdiscoveryEstimateOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of action the operation represents. Possible values are: contentExport,  applyTags, convertToPdf, index, estimateStatistics, addToReviewSet, holdUpdate, unknownFutureValue, purgeData, exportReport, exportResult. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: purgeData, exportReport, exportResult.
     * @var SecurityCaseAction|\stdClass|null
     */
    public mixed $action = null;

    /** The date and time the operation was completed. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * The user that created the operation.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The date and time the operation was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The progress of the operation. */
    public ?float $percentProgress = null;

    /** 
     * Contains success and failure-specific result information.
     * @var ResultInfo|\stdClass|null
     */
    public mixed $resultInfo = null;

    /** 
     * The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed.
     * @var SecurityCaseOperationStatus|\stdClass|null
     */
    public mixed $status = null;

    /** The estimated count of items for the search that matched the content query. */
    public ?float $indexedItemCount = null;

    /** The estimated size of items for the search that matched the content query. */
    public ?float $indexedItemsSize = null;

    /** The number of mailboxes that had search hits. */
    public ?float $mailboxCount = null;

    /** 
     * Contains the properties for report file metadata, including downloadUrl, fileName, and size.
     * @var SecurityReportFileMetadata[]
     */
    public array $reportFileMetadata = [];

    /** The number of mailboxes that had search hits. */
    public ?float $siteCount = null;

    /** 
     * The options to generate statistics. Possible values are: includeRefiners, includeQueryStats, includeUnindexedStats, advancedIndexing, locationsWithoutHits, unknownFutureValue.
     * @var SecurityStatisticsOptions|\stdClass|null
     */
    public mixed $statisticsOptions = null;

    /** The estimated count of unindexed items for the collection. */
    public ?float $unindexedItemCount = null;

    /** The estimated size of unindexed items for the collection. */
    public ?float $unindexedItemsSize = null;

    /** 
     * eDiscovery search.
     * @var SecurityEdiscoverySearch|\stdClass|null
     */
    public mixed $search = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['action'])) {
            $this->action = $data['action'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['percentProgress'])) {
            $this->percentProgress = $data['percentProgress'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['indexedItemCount'])) {
            $this->indexedItemCount = $data['indexedItemCount'];
        }
        if (isset($data['indexedItemsSize'])) {
            $this->indexedItemsSize = $data['indexedItemsSize'];
        }
        if (isset($data['mailboxCount'])) {
            $this->mailboxCount = $data['mailboxCount'];
        }
        if (isset($data['reportFileMetadata'])) {
            $this->reportFileMetadata = $data['reportFileMetadata'];
        }
        if (isset($data['siteCount'])) {
            $this->siteCount = $data['siteCount'];
        }
        if (isset($data['statisticsOptions'])) {
            $this->statisticsOptions = $data['statisticsOptions'];
        }
        if (isset($data['unindexedItemCount'])) {
            $this->unindexedItemCount = $data['unindexedItemCount'];
        }
        if (isset($data['unindexedItemsSize'])) {
            $this->unindexedItemsSize = $data['unindexedItemsSize'];
        }
        if (isset($data['search'])) {
            $this->search = $data['search'];
        }
    }
}
