<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedLicense resources
 *
 * Available select fields:
 * - disabledPlans
 * - skuId
 */
class AssignedLicenseQueryOptions extends QueryOptions
{
    public const FIELD_DISABLED_PLANS = 'disabledPlans';
    public const FIELD_SKU_ID = 'skuId';

    /**
     * Select specific AssignedLicense properties
     * 
     * @param array<string> $select Use AssignedLicenseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
