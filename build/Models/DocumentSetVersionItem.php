<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetVersionItem
 */
class DocumentSetVersionItem
{
    /**
     * The unique identifier for the item.
     */
    private ?string $itemId;

    /**
     * The title of the item.
     */
    private ?string $title;

    /**
     * The version ID of the item.
     */
    private ?string $versionId;

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getVersionId(): ?string
    {
        return $this->versionId;
    }

    public function setVersionId(?string $versionId): self
    {
        $this->versionId = $versionId;
        return $this;
    }

}
