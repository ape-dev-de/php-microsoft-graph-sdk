<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryEstimateOperation
 */
class SecurityEdiscoveryEstimateOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of action the operation represents. Possible values are: contentExport,  applyTags, convertToPdf, index, estimateStatistics, addToReviewSet, holdUpdate, unknownFutureValue, purgeData, exportReport, exportResult. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: purgeData, exportReport, exportResult.
     * @var SecurityCaseAction|\stdClass|null
     */
    public SecurityCaseAction|\stdClass|null $action = null;

    /** The date and time the operation was completed. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * The user that created the operation.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The date and time the operation was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The progress of the operation. */
    public ?float $percentProgress = null;

    /** 
     * Contains success and failure-specific result information.
     * @var ResultInfo|\stdClass|null
     */
    public ResultInfo|\stdClass|null $resultInfo = null;

    /** 
     * The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed.
     * @var SecurityCaseOperationStatus|\stdClass|null
     */
    public SecurityCaseOperationStatus|\stdClass|null $status = null;

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
    public SecurityStatisticsOptions|\stdClass|null $statisticsOptions = null;

    /** The estimated count of unindexed items for the collection. */
    public ?float $unindexedItemCount = null;

    /** The estimated size of unindexed items for the collection. */
    public ?float $unindexedItemsSize = null;

    /** 
     * eDiscovery search.
     * @var SecurityEdiscoverySearch|\stdClass|null
     */
    public SecurityEdiscoverySearch|\stdClass|null $search = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['action'])) {
            $this->action = is_string($data['action']) ? SecurityCaseAction::tryFrom($data['action']) : $data['action'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['percentProgress'])) {
            $this->percentProgress = is_numeric($data['percentProgress']) ? (float)$data['percentProgress'] : $data['percentProgress'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = is_array($data['resultInfo']) ? new ResultInfo($data['resultInfo']) : $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? SecurityCaseOperationStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['indexedItemCount'])) {
            $this->indexedItemCount = is_numeric($data['indexedItemCount']) ? (float)$data['indexedItemCount'] : $data['indexedItemCount'];
        }
        if (isset($data['indexedItemsSize'])) {
            $this->indexedItemsSize = is_numeric($data['indexedItemsSize']) ? (float)$data['indexedItemsSize'] : $data['indexedItemsSize'];
        }
        if (isset($data['mailboxCount'])) {
            $this->mailboxCount = is_numeric($data['mailboxCount']) ? (float)$data['mailboxCount'] : $data['mailboxCount'];
        }
        if (isset($data['reportFileMetadata'])) {
            $this->reportFileMetadata = $data['reportFileMetadata'];
        }
        if (isset($data['siteCount'])) {
            $this->siteCount = is_numeric($data['siteCount']) ? (float)$data['siteCount'] : $data['siteCount'];
        }
        if (isset($data['statisticsOptions'])) {
            $this->statisticsOptions = is_string($data['statisticsOptions']) ? SecurityStatisticsOptions::tryFrom($data['statisticsOptions']) : $data['statisticsOptions'];
        }
        if (isset($data['unindexedItemCount'])) {
            $this->unindexedItemCount = is_numeric($data['unindexedItemCount']) ? (float)$data['unindexedItemCount'] : $data['unindexedItemCount'];
        }
        if (isset($data['unindexedItemsSize'])) {
            $this->unindexedItemsSize = is_numeric($data['unindexedItemsSize']) ? (float)$data['unindexedItemsSize'] : $data['unindexedItemsSize'];
        }
        if (isset($data['search'])) {
            $this->search = is_array($data['search']) ? new SecurityEdiscoverySearch($data['search']) : $data['search'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
