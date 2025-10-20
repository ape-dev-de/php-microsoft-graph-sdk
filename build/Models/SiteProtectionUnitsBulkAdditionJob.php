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
     */
    private ?string $siteIds;

    /**
     * The list of SharePoint site URLs to add to the SharePoint protection policy.
     */
    private ?string $siteWebUrls;

    public function getSiteIds(): ?string
    {
        return $this->siteIds;
    }

    public function setSiteIds(?string $siteIds): self
    {
        $this->siteIds = $siteIds;
        return $this;
    }

    public function getSiteWebUrls(): ?string
    {
        return $this->siteWebUrls;
    }

    public function setSiteWebUrls(?string $siteWebUrls): self
    {
        $this->siteWebUrls = $siteWebUrls;
        return $this;
    }

}
