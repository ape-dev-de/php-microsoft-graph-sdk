<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryEstimateOperation
 */
class SecurityEdiscoveryEstimateOperation
{
    /**
     * The estimated count of items for the search that matched the content query.
     */
    private ?float $indexedItemCount;

    /**
     * The estimated size of items for the search that matched the content query.
     */
    private ?float $indexedItemsSize;

    /**
     * The number of mailboxes that had search hits.
     */
    private ?float $mailboxCount;

    /**
     * Contains the properties for report file metadata, including downloadUrl, fileName, and size.
     */
    private array $reportFileMetadata = [];

    /**
     * The number of mailboxes that had search hits.
     */
    private ?float $siteCount;

    /**
     * The options to generate statistics. Possible values are: includeRefiners, includeQueryStats, includeUnindexedStats, advancedIndexing, locationsWithoutHits, unknownFutureValue.
     */
    private ?string $statisticsOptions;

    /**
     * The estimated count of unindexed items for the collection.
     */
    private ?float $unindexedItemCount;

    /**
     * The estimated size of unindexed items for the collection.
     */
    private ?float $unindexedItemsSize;

    /**
     * eDiscovery search.
     */
    private ?string $search;

    public function getIndexedItemCount(): ?float
    {
        return $this->indexedItemCount;
    }

    public function setIndexedItemCount(?float $indexedItemCount): self
    {
        $this->indexedItemCount = $indexedItemCount;
        return $this;
    }

    public function getIndexedItemsSize(): ?float
    {
        return $this->indexedItemsSize;
    }

    public function setIndexedItemsSize(?float $indexedItemsSize): self
    {
        $this->indexedItemsSize = $indexedItemsSize;
        return $this;
    }

    public function getMailboxCount(): ?float
    {
        return $this->mailboxCount;
    }

    public function setMailboxCount(?float $mailboxCount): self
    {
        $this->mailboxCount = $mailboxCount;
        return $this;
    }

    public function getReportFileMetadata(): array
    {
        return $this->reportFileMetadata;
    }

    public function setReportFileMetadata(array $reportFileMetadata): self
    {
        $this->reportFileMetadata = $reportFileMetadata;
        return $this;
    }

    public function getSiteCount(): ?float
    {
        return $this->siteCount;
    }

    public function setSiteCount(?float $siteCount): self
    {
        $this->siteCount = $siteCount;
        return $this;
    }

    public function getStatisticsOptions(): ?string
    {
        return $this->statisticsOptions;
    }

    public function setStatisticsOptions(?string $statisticsOptions): self
    {
        $this->statisticsOptions = $statisticsOptions;
        return $this;
    }

    public function getUnindexedItemCount(): ?float
    {
        return $this->unindexedItemCount;
    }

    public function setUnindexedItemCount(?float $unindexedItemCount): self
    {
        $this->unindexedItemCount = $unindexedItemCount;
        return $this;
    }

    public function getUnindexedItemsSize(): ?float
    {
        return $this->unindexedItemsSize;
    }

    public function setUnindexedItemsSize(?float $unindexedItemsSize): self
    {
        $this->unindexedItemsSize = $unindexedItemsSize;
        return $this;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(?string $search): self
    {
        $this->search = $search;
        return $this;
    }

}
