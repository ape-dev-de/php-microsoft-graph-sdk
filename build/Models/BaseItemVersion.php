<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseItemVersion
 */
class BaseItemVersion
{
    /**
     * Identity of the user which last modified the version. Read-only.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time the version was last modified. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Indicates the publication status of this particular version. Read-only.
     */
    private ?string $publication;


    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getPublication(): ?string
    {
        return $this->publication;
    }

    public function setPublication(?string $publication): self
    {
        $this->publication = $publication;
        return $this;
    }

}
