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
    public const FIELD_DRIVE_INCLUSION_RULES = 'driveInclusionRules';
    public const FIELD_DRIVE_PROTECTION_UNITS = 'driveProtectionUnits';
    public const FIELD_DRIVE_PROTECTION_UNITS_BULK_ADDITION_JOBS = 'driveProtectionUnitsBulkAdditionJobs';

    /**
     * Select specific OneDriveForBusinessProtectionPolicy properties
     * 
     * @param array<string> $select Use OneDriveForBusinessProtectionPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
