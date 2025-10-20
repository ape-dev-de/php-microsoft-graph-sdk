<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcGalleryImage resources
 *
 * Available select fields:
 * - displayName
 * - endDate
 * - expirationDate
 * - offerName
 * - publisherName
 * - sizeInGB
 * - skuName
 * - startDate
 * - status
 */
class CloudPcGalleryImageQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_END_DATE = 'endDate';
    public const FIELD_EXPIRATION_DATE = 'expirationDate';
    public const FIELD_OFFER_NAME = 'offerName';
    public const FIELD_PUBLISHER_NAME = 'publisherName';
    public const FIELD_SIZE_IN_GB = 'sizeInGB';
    public const FIELD_SKU_NAME = 'skuName';
    public const FIELD_START_DATE = 'startDate';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific CloudPcGalleryImage properties
     * 
     * @param array<string> $select Use CloudPcGalleryImageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
