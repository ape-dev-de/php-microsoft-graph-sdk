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
     * @var string[]
     */
    private array $siteIds = [];

    /**
     * The list of SharePoint site URLs that are added to the corresponding SharePoint restore session in a bulk operation.
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
