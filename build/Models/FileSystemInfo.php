<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileSystemInfo
 */
class FileSystemInfo
{
    /**
     * The UTC date and time the file was created on a client.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The UTC date and time the file was last accessed. Available for the recent file list only.
     */
    private ?\DateTimeInterface $lastAccessedDateTime;

    /**
     * The UTC date and time the file was last modified on a client.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getLastAccessedDateTime(): ?\DateTimeInterface
    {
        return $this->lastAccessedDateTime;
    }

    public function setLastAccessedDateTime(?\DateTimeInterface $lastAccessedDateTime): self
    {
        $this->lastAccessedDateTime = $lastAccessedDateTime;
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

}
