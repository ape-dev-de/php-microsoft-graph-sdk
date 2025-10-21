<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointProtectionPolicy
 */
class SharePointProtectionPolicy
{
    /**
     * The rules associated with the SharePoint Protection policy.
     */
    private array $siteInclusionRules = [];

    /**
     * The protection units (sites) that are protected under the site protection policy.
     */
    private array $siteProtectionUnits = [];

    /**
     * @var string[]
     */
    private array $siteProtectionUnitsBulkAdditionJobs = [];


    public function getSiteInclusionRules(): array
    {
        return $this->siteInclusionRules;
    }

    public function setSiteInclusionRules(array $siteInclusionRules): self
    {
        $this->siteInclusionRules = $siteInclusionRules;
        return $this;
    }

    public function getSiteProtectionUnits(): array
    {
        return $this->siteProtectionUnits;
    }

    public function setSiteProtectionUnits(array $siteProtectionUnits): self
    {
        $this->siteProtectionUnits = $siteProtectionUnits;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSiteProtectionUnitsBulkAdditionJobs(): array
    {
        return $this->siteProtectionUnitsBulkAdditionJobs;
    }

    /**
     * @param string[] $siteProtectionUnitsBulkAdditionJobs
     */
    public function setSiteProtectionUnitsBulkAdditionJobs(array $siteProtectionUnitsBulkAdditionJobs): self
    {
        $this->siteProtectionUnitsBulkAdditionJobs = $siteProtectionUnitsBulkAdditionJobs;
        return $this;
    }

}
