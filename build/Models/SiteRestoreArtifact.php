<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifact
 */
class SiteRestoreArtifact
{
    /**
     * The new site identifier if the value of the destinationType property is new, and the existing site ID if the value is inPlace.
     */
    private ?string $restoredSiteId;

    /**
     * The name of the restored site.
     */
    private ?string $restoredSiteName;

    /**
     * The web URL of the restored site.
     */
    private ?string $restoredSiteWebUrl;

    public function getRestoredSiteId(): ?string
    {
        return $this->restoredSiteId;
    }

    public function setRestoredSiteId(?string $restoredSiteId): self
    {
        $this->restoredSiteId = $restoredSiteId;
        return $this;
    }

    public function getRestoredSiteName(): ?string
    {
        return $this->restoredSiteName;
    }

    public function setRestoredSiteName(?string $restoredSiteName): self
    {
        $this->restoredSiteName = $restoredSiteName;
        return $this;
    }

    public function getRestoredSiteWebUrl(): ?string
    {
        return $this->restoredSiteWebUrl;
    }

    public function setRestoredSiteWebUrl(?string $restoredSiteWebUrl): self
    {
        $this->restoredSiteWebUrl = $restoredSiteWebUrl;
        return $this;
    }

}
