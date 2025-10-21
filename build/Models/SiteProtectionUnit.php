<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionUnit
 */
class SiteProtectionUnit
{
    /**
     * Unique identifier of the SharePoint site.
     */
    private ?string $siteId;

    /**
     * Name of the SharePoint site.
     */
    private ?string $siteName;

    /**
     * The web URL of the SharePoint site.
     */
    private ?string $siteWebUrl;


    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    public function setSiteName(?string $siteName): self
    {
        $this->siteName = $siteName;
        return $this;
    }

    public function getSiteWebUrl(): ?string
    {
        return $this->siteWebUrl;
    }

    public function setSiteWebUrl(?string $siteWebUrl): self
    {
        $this->siteWebUrl = $siteWebUrl;
        return $this;
    }

}
