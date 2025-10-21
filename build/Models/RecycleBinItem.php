<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecycleBinItem
 */
class RecycleBinItem
{
    /**
     * Date and time when the item was deleted. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $deletedDateTime;

    /**
     * Relative URL of the list or folder that originally contained the item.
     */
    private ?string $deletedFromLocation;

    /**
     * Size of the item in bytes.
     */
    private ?string $size;


    public function getDeletedDateTime(): ?\DateTimeInterface
    {
        return $this->deletedDateTime;
    }

    public function setDeletedDateTime(?\DateTimeInterface $deletedDateTime): self
    {
        $this->deletedDateTime = $deletedDateTime;
        return $this;
    }

    public function getDeletedFromLocation(): ?string
    {
        return $this->deletedFromLocation;
    }

    public function setDeletedFromLocation(?string $deletedFromLocation): self
    {
        $this->deletedFromLocation = $deletedFromLocation;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;
        return $this;
    }

}
