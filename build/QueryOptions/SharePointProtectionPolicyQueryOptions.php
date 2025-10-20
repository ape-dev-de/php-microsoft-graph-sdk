<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointProtectionPolicy resources
 *
 * Available select fields:
 * - siteInclusionRules
 * - siteProtectionUnits
 * - siteProtectionUnitsBulkAdditionJobs
 */
class SharePointProtectionPolicyQueryOptions extends QueryOptions
{
    public const FIELD_SITE_INCLUSION_RULES = 'siteInclusionRules';
    public const FIELD_SITE_PROTECTION_UNITS = 'siteProtectionUnits';
    public const FIELD_SITE_PROTECTION_UNITS_BULK_ADDITION_JOBS = 'siteProtectionUnitsBulkAdditionJobs';

    /**
     * Select specific SharePointProtectionPolicy properties
     * 
     * @param array<string> $select Use SharePointProtectionPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
