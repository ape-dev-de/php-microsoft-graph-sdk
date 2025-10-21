<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionUnitsBulkAdditionJob
 */
class SiteProtectionUnitsBulkAdditionJob
{
    /**
     * The list of SharePoint site IDs to add to the SharePoint protection policy.
     * @var string[]
     */
    private array $siteIds = [];

    /**
     * The list of SharePoint site URLs to add to the SharePoint protection policy.
     * @var string[]
     */
    private array $siteWebUrls = [];


    /**
     * @return string[]
     */
    public function getSiteIds(): array
    {
        return $this->siteIds;
    }

    /**
     * @param string[] $siteIds
     */
    public function setSiteIds(array $siteIds): self
    {
        $this->siteIds = $siteIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSiteWebUrls(): array
    {
        return $this->siteWebUrls;
    }

    /**
     * @param string[] $siteWebUrls
     */
    public function setSiteWebUrls(array $siteWebUrls): self
    {
        $this->siteWebUrls = $siteWebUrls;
        return $this;
    }

}
