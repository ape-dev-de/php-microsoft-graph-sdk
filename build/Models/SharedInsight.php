<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedInsight
 */
class SharedInsight
{
    /**
     * Details about the shared item. Read only.
     */
    private ?string $lastShared;

    /**
     * Reference properties of the shared document, such as the url and type of the document. Read-only
     */
    private ?string $resourceReference;

    /**
     * Properties that you can use to visualize the document in your experience. Read-only
     */
    private ?string $resourceVisualization;

    /**
     */
    private array $sharingHistory = [];

    /**
     */
    private ?string $lastSharedMethod;

    /**
     * Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     */
    private ?string $resource;

    public function getLastShared(): ?string
    {
        return $this->lastShared;
    }

    public function setLastShared(?string $lastShared): self
    {
        $this->lastShared = $lastShared;
        return $this;
    }

    public function getResourceReference(): ?string
    {
        return $this->resourceReference;
    }

    public function setResourceReference(?string $resourceReference): self
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    public function getResourceVisualization(): ?string
    {
        return $this->resourceVisualization;
    }

    public function setResourceVisualization(?string $resourceVisualization): self
    {
        $this->resourceVisualization = $resourceVisualization;
        return $this;
    }

    public function getSharingHistory(): array
    {
        return $this->sharingHistory;
    }

    public function setSharingHistory(array $sharingHistory): self
    {
        $this->sharingHistory = $sharingHistory;
        return $this;
    }

    public function getLastSharedMethod(): ?string
    {
        return $this->lastSharedMethod;
    }

    public function setLastSharedMethod(?string $lastSharedMethod): self
    {
        $this->lastSharedMethod = $lastSharedMethod;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

}
