<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListItem
 */
class ListItem
{
    /**
     * The content type of this list item
     */
    private ?string $contentType;

    /**
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     */
    private ?string $sharepointIds;

    /**
     * Analytics about the view activities that took place on this item.
     */
    private ?string $analytics;

    /**
     * Version information for a document set version created by a user.
     */
    private array $documentSetVersions = [];

    /**
     * For document libraries, the driveItem relationship exposes the listItem as a driveItem
     */
    private ?string $driveItem;

    /**
     * The values of the columns set on this list item.
     */
    private ?string $fields;

    /**
     * The list of previous versions of the list item.
     */
    private ?string $versions;

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getSharepointIds(): ?string
    {
        return $this->sharepointIds;
    }

    public function setSharepointIds(?string $sharepointIds): self
    {
        $this->sharepointIds = $sharepointIds;
        return $this;
    }

    public function getAnalytics(): ?string
    {
        return $this->analytics;
    }

    public function setAnalytics(?string $analytics): self
    {
        $this->analytics = $analytics;
        return $this;
    }

    public function getDocumentSetVersions(): array
    {
        return $this->documentSetVersions;
    }

    public function setDocumentSetVersions(array $documentSetVersions): self
    {
        $this->documentSetVersions = $documentSetVersions;
        return $this;
    }

    public function getDriveItem(): ?string
    {
        return $this->driveItem;
    }

    public function setDriveItem(?string $driveItem): self
    {
        $this->driveItem = $driveItem;
        return $this;
    }

    public function getFields(): ?string
    {
        return $this->fields;
    }

    public function setFields(?string $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function getVersions(): ?string
    {
        return $this->versions;
    }

    public function setVersions(?string $versions): self
    {
        $this->versions = $versions;
        return $this;
    }

}
