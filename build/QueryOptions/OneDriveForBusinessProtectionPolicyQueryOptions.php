<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OneDriveForBusinessProtectionPolicy resources
 *
 * Available select fields:
 * - driveInclusionRules
 * - driveProtectionUnits
 * - driveProtectionUnitsBulkAdditionJobs
 */
class OneDriveForBusinessProtectionPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OneDriveForBusinessProtectionPolicy
     */
    public const FIELD_DRIVE_INCLUSION_RULES = 'driveInclusionRules';
    public const FIELD_DRIVE_PROTECTION_UNITS = 'driveProtectionUnits';
    public const FIELD_DRIVE_PROTECTION_UNITS_BULK_ADDITION_JOBS = 'driveProtectionUnitsBulkAdditionJobs';

    /**
     * Select specific OneDriveForBusinessProtectionPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
