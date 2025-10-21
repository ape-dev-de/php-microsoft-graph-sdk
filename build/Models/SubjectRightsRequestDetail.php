<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestDetail
 */
class SubjectRightsRequestDetail
{
    public function __construct(
        /** Count of items that are excluded from the request. */
        public ?float $excludedItemCount = null,
        /** Count of items per insight. */
        public array $insightCounts = [],
        /** Count of items found. */
        public ?float $itemCount = null,
        /** Count of item that need review. */
        public ?float $itemNeedReview = null,
        /** Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams. */
        public array $productItemCounts = [],
        /** Count of items signed off by the administrator. */
        public ?float $signedOffItemCount = null,
        /** Total item size in bytes. */
        public ?float $totalItemSize = null
    ) {}
}
