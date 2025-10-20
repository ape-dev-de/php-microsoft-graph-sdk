<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryObject
 */
class DirectoryObject
{
    /**
     * Date and time when this object was deleted. Always null when the object hasn't been deleted.
     */
    private ?\DateTimeInterface $deletedDateTime;

    public function getDeletedDateTime(): ?\DateTimeInterface
    {
        return $this->deletedDateTime;
    }

    public function setDeletedDateTime(?\DateTimeInterface $deletedDateTime): self
    {
        $this->deletedDateTime = $deletedDateTime;
        return $this;
    }

}
