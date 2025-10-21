<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OneDriveForBusinessProtectionPolicy
 */
class OneDriveForBusinessProtectionPolicy
{
    /**
     * Contains the details of the Onedrive for Business protection rule.
     */
    private array $driveInclusionRules = [];

    /**
     * Contains the protection units associated with a  OneDrive for Business protection policy.
     */
    private array $driveProtectionUnits = [];

    /**
     * @var string[]
     */
    private array $driveProtectionUnitsBulkAdditionJobs = [];


    public function getDriveInclusionRules(): array
    {
        return $this->driveInclusionRules;
    }

    public function setDriveInclusionRules(array $driveInclusionRules): self
    {
        $this->driveInclusionRules = $driveInclusionRules;
        return $this;
    }

    public function getDriveProtectionUnits(): array
    {
        return $this->driveProtectionUnits;
    }

    public function setDriveProtectionUnits(array $driveProtectionUnits): self
    {
        $this->driveProtectionUnits = $driveProtectionUnits;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDriveProtectionUnitsBulkAdditionJobs(): array
    {
        return $this->driveProtectionUnitsBulkAdditionJobs;
    }

    /**
     * @param string[] $driveProtectionUnitsBulkAdditionJobs
     */
    public function setDriveProtectionUnitsBulkAdditionJobs(array $driveProtectionUnitsBulkAdditionJobs): self
    {
        $this->driveProtectionUnitsBulkAdditionJobs = $driveProtectionUnitsBulkAdditionJobs;
        return $this;
    }

}
