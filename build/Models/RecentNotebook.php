<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecentNotebook
 */
class RecentNotebook
{
    /**
     * The name of the notebook.
     */
    private ?string $displayName;

    /**
     * The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $lastAccessedTime;

    /**
     * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it''s installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     */
    private ?string $links;

    /**
     * The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive.
     */
    private ?string $sourceService;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLastAccessedTime(): ?\DateTimeInterface
    {
        return $this->lastAccessedTime;
    }

    public function setLastAccessedTime(?\DateTimeInterface $lastAccessedTime): self
    {
        $this->lastAccessedTime = $lastAccessedTime;
        return $this;
    }

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(?string $links): self
    {
        $this->links = $links;
        return $this;
    }

    public function getSourceService(): ?string
    {
        return $this->sourceService;
    }

    public function setSourceService(?string $sourceService): self
    {
        $this->sourceService = $sourceService;
        return $this;
    }

}
