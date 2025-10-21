<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OneDriveForBusinessProtectionPolicy
 */
class OneDriveForBusinessProtectionPolicy
{
    public function __construct(
        /** Contains the details of the Onedrive for Business protection rule. */
        public array $driveInclusionRules = [],
        /** Contains the protection units associated with a  OneDrive for Business protection policy. */
        public array $driveProtectionUnits = [],
        /** @var string[]  */
        public array $driveProtectionUnitsBulkAdditionJobs = []
    ) {}
}
