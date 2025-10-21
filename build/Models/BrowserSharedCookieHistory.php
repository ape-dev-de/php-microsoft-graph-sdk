<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookieHistory
 */
class BrowserSharedCookieHistory
{
    /**
     * The comment for the shared cookie.
     */
    private ?string $comment;

    /**
     * The name of the cookie.
     */
    private ?string $displayName;

    /**
     * Controls whether a cookie is a host-only or domain cookie.
     */
    private ?bool $hostOnly;

    /**
     * The URL of the cookie.
     */
    private ?string $hostOrDomain;

    /**
     */
    private ?string $lastModifiedBy;

    /**
     * The path of the cookie.
     */
    private ?string $path;

    /**
     * The date and time when the cookie was last published.
     */
    private ?\DateTimeInterface $publishedDateTime;

    /**
     * Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue.
     */
    private ?string $sourceEnvironment;


    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
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

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getPublishedDateTime(): ?\DateTimeInterface
    {
        return $this->publishedDateTime;
    }

    public function setPublishedDateTime(?\DateTimeInterface $publishedDateTime): self
    {
        $this->publishedDateTime = $publishedDateTime;
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

}
