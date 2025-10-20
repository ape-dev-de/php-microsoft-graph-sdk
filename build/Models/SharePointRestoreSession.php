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
     */
    private ?string $siteRestoreArtifactsBulkAdditionRequests;

    public function getSiteRestoreArtifacts(): array
    {
        return $this->siteRestoreArtifacts;
    }

    public function setSiteRestoreArtifacts(array $siteRestoreArtifacts): self
    {
        $this->siteRestoreArtifacts = $siteRestoreArtifacts;
        return $this;
    }

    public function getSiteRestoreArtifactsBulkAdditionRequests(): ?string
    {
        return $this->siteRestoreArtifactsBulkAdditionRequests;
    }

    public function setSiteRestoreArtifactsBulkAdditionRequests(?string $siteRestoreArtifactsBulkAdditionRequests): self
    {
        $this->siteRestoreArtifactsBulkAdditionRequests = $siteRestoreArtifactsBulkAdditionRequests;
        return $this;
    }

}
