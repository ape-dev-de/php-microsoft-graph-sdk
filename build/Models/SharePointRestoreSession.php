<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointRestoreSession
 */
class SharePointRestoreSession
{
    /**
     * A collection of restore points and destination details that can be used to restore SharePoint sites.
     */
    private array $siteRestoreArtifacts = [];

    /**
     * A collection of SharePoint site URLs and destination details that can be used to restore SharePoint sites.
     * @var string[]
     */
    private array $siteRestoreArtifactsBulkAdditionRequests = [];


    public function getSiteRestoreArtifacts(): array
    {
        return $this->siteRestoreArtifacts;
    }

    public function setSiteRestoreArtifacts(array $siteRestoreArtifacts): self
    {
        $this->siteRestoreArtifacts = $siteRestoreArtifacts;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSiteRestoreArtifactsBulkAdditionRequests(): array
    {
        return $this->siteRestoreArtifactsBulkAdditionRequests;
    }

    /**
     * @param string[] $siteRestoreArtifactsBulkAdditionRequests
     */
    public function setSiteRestoreArtifactsBulkAdditionRequests(array $siteRestoreArtifactsBulkAdditionRequests): self
    {
        $this->siteRestoreArtifactsBulkAdditionRequests = $siteRestoreArtifactsBulkAdditionRequests;
        return $this;
    }

}
