<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestDetail resources
 *
 * Available select fields:
 * - excludedItemCount
 * - insightCounts
 * - itemCount
 * - itemNeedReview
 * - productItemCounts
 * - signedOffItemCount
 * - totalItemSize
 */
class SubjectRightsRequestDetailQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUDED_ITEM_COUNT = 'excludedItemCount';
    public const FIELD_INSIGHT_COUNTS = 'insightCounts';
    public const FIELD_ITEM_COUNT = 'itemCount';
    public const FIELD_ITEM_NEED_REVIEW = 'itemNeedReview';
    public const FIELD_PRODUCT_ITEM_COUNTS = 'productItemCounts';
    public const FIELD_SIGNED_OFF_ITEM_COUNT = 'signedOffItemCount';
    public const FIELD_TOTAL_ITEM_SIZE = 'totalItemSize';

    /**
     * Select specific SubjectRightsRequestDetail properties
     * 
     * @param array<string> $select Use SubjectRightsRequestDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
