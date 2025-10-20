<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LicenseDetails resources
 *
 * Available select fields:
 * - servicePlans
 * - skuId
 * - skuPartNumber
 */
class LicenseDetailsQueryOptions extends QueryOptions
{
    public const FIELD_SERVICE_PLANS = 'servicePlans';
    public const FIELD_SKU_ID = 'skuId';
    public const FIELD_SKU_PART_NUMBER = 'skuPartNumber';

    /**
     * Select specific LicenseDetails properties
     * 
     * @param array<string> $select Use LicenseDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
