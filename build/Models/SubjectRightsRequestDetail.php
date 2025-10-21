<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestDetail
 */
class SubjectRightsRequestDetail
{
    /**
     * Count of items that are excluded from the request.
     */
    private ?float $excludedItemCount;

    /**
     * Count of items per insight.
     */
    private array $insightCounts = [];

    /**
     * Count of items found.
     */
    private ?float $itemCount;

    /**
     * Count of item that need review.
     */
    private ?float $itemNeedReview;

    /**
     * Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
     */
    private array $productItemCounts = [];

    /**
     * Count of items signed off by the administrator.
     */
    private ?float $signedOffItemCount;

    /**
     * Total item size in bytes.
     */
    private ?string $totalItemSize;


    public function getExcludedItemCount(): ?float
    {
        return $this->excludedItemCount;
    }

    public function setExcludedItemCount(?float $excludedItemCount): self
    {
        $this->excludedItemCount = $excludedItemCount;
        return $this;
    }

    public function getInsightCounts(): array
    {
        return $this->insightCounts;
    }

    public function setInsightCounts(array $insightCounts): self
    {
        $this->insightCounts = $insightCounts;
        return $this;
    }

    public function getItemCount(): ?float
    {
        return $this->itemCount;
    }

    public function setItemCount(?float $itemCount): self
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    public function getItemNeedReview(): ?float
    {
        return $this->itemNeedReview;
    }

    public function setItemNeedReview(?float $itemNeedReview): self
    {
        $this->itemNeedReview = $itemNeedReview;
        return $this;
    }

    public function getProductItemCounts(): array
    {
        return $this->productItemCounts;
    }

    public function setProductItemCounts(array $productItemCounts): self
    {
        $this->productItemCounts = $productItemCounts;
        return $this;
    }

    public function getSignedOffItemCount(): ?float
    {
        return $this->signedOffItemCount;
    }

    public function setSignedOffItemCount(?float $signedOffItemCount): self
    {
        $this->signedOffItemCount = $signedOffItemCount;
        return $this;
    }

    public function getTotalItemSize(): ?string
    {
        return $this->totalItemSize;
    }

    public function setTotalItemSize(?string $totalItemSize): self
    {
        $this->totalItemSize = $totalItemSize;
        return $this;
    }

}
