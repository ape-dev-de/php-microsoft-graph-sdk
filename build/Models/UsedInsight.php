<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsedInsight
 */
class UsedInsight
{
    /**
     * Information about when the item was last viewed or modified by the user. Read-only.
     */
    private ?string $lastUsed;

    /**
     * Reference properties of the used document, such as the URL and type of the document. Read-only
     */
    private ?string $resourceReference;

    /**
     * Properties that you can use to visualize the document in your experience. Read-only
     */
    private ?string $resourceVisualization;

    /**
     * Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     */
    private ?string $resource;

    public function getLastUsed(): ?string
    {
        return $this->lastUsed;
    }

    public function setLastUsed(?string $lastUsed): self
    {
        $this->lastUsed = $lastUsed;
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
