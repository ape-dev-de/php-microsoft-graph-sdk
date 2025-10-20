<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifactsBulkAdditionRequest
 */
class SiteRestoreArtifactsBulkAdditionRequest
{
    /**
     * The list of SharePoint site IDs that are added to the corresponding SharePoint restore session in a bulk operation.
     */
    private ?string $siteIds;

    /**
     * The list of SharePoint site URLs that are added to the corresponding SharePoint restore session in a bulk operation.
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
