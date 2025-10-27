<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestDetail
 */
class SubjectRightsRequestDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Count of items that are excluded from the request. */
    public ?float $excludedItemCount = null;

    /** 
     * Count of items per insight.
     * @var KeyValuePair[]
     */
    public array $insightCounts = [];

    /** Count of items found. */
    public ?float $itemCount = null;

    /** Count of item that need review. */
    public ?float $itemNeedReview = null;

    /** 
     * Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
     * @var KeyValuePair[]
     */
    public array $productItemCounts = [];

    /** Count of items signed off by the administrator. */
    public ?float $signedOffItemCount = null;

    /** Total item size in bytes. */
    public ?float $totalItemSize = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['excludedItemCount'])) {
            $this->excludedItemCount = $data['excludedItemCount'];
        }
        if (isset($data['insightCounts'])) {
            $this->insightCounts = $data['insightCounts'];
        }
        if (isset($data['itemCount'])) {
            $this->itemCount = $data['itemCount'];
        }
        if (isset($data['itemNeedReview'])) {
            $this->itemNeedReview = $data['itemNeedReview'];
        }
        if (isset($data['productItemCounts'])) {
            $this->productItemCounts = $data['productItemCounts'];
        }
        if (isset($data['signedOffItemCount'])) {
            $this->signedOffItemCount = $data['signedOffItemCount'];
        }
        if (isset($data['totalItemSize'])) {
            $this->totalItemSize = $data['totalItemSize'];
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
