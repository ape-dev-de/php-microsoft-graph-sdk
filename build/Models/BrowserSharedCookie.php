<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookie
 */
class BrowserSharedCookie
{
    /**
     * The comment for the shared cookie.
     */
    private ?string $comment;

    /**
     * The date and time when the shared cookie was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The date and time when the shared cookie was deleted.
     */
    private ?\DateTimeInterface $deletedDateTime;

    /**
     * The name of the cookie.
     */
    private ?string $displayName;

    /**
     * The history of modifications applied to the cookie.
     */
    private array $history = [];

    /**
     * Controls whether a cookie is a host-only or domain cookie.
     */
    private ?bool $hostOnly;

    /**
     * The URL of the cookie.
     */
    private ?string $hostOrDomain;

    /**
     * The user who last modified the cookie.
     */
    private ?string $lastModifiedBy;

    /**
     * The date and time when the cookie was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The path of the cookie.
     */
    private ?string $path;

    /**
     */
    private ?string $sourceEnvironment;

    /**
     */
    private ?string $status;


    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDeletedDateTime(): ?\DateTimeInterface
    {
        return $this->deletedDateTime;
    }

    public function setDeletedDateTime(?\DateTimeInterface $deletedDateTime): self
    {
        $this->deletedDateTime = $deletedDateTime;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getHistory(): array
    {
        return $this->history;
    }

    public function setHistory(array $history): self
    {
        $this->history = $history;
        return $this;
    }

    public function getHostOnly(): ?bool
    {
        return $this->hostOnly;
    }

    public function setHostOnly(?bool $hostOnly): self
    {
        $this->hostOnly = $hostOnly;
        return $this;
    }

    public function getHostOrDomain(): ?string
    {
        return $this->hostOrDomain;
    }

    public function setHostOrDomain(?string $hostOrDomain): self
    {
        $this->hostOrDomain = $hostOrDomain;
        return $this;
    }

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

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getSourceEnvironment(): ?string
    {
        return $this->sourceEnvironment;
    }

    public function setSourceEnvironment(?string $sourceEnvironment): self
    {
        $this->sourceEnvironment = $sourceEnvironment;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
