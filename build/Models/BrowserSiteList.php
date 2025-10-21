<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteList
 */
class BrowserSiteList
{
    /**
     * The description of the site list.
     */
    private ?string $description;

    /**
     * The name of the site list.
     */
    private ?string $displayName;

    /**
     * The user who last modified the site list.
     */
    private ?string $lastModifiedBy;

    /**
     * The date and time when the site list was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The user who published the site list.
     */
    private ?string $publishedBy;

    /**
     * The date and time when the site list was published.
     */
    private ?\DateTimeInterface $publishedDateTime;

    /**
     * The current revision of the site list.
     */
    private ?string $revision;

    /**
     */
    private ?string $status;

    /**
     * A collection of shared cookies defined for the site list.
     */
    private array $sharedCookies = [];

    /**
     * A singleton entity which is used to specify IE mode site list metadata
     * @var string[]
     */
    private array $sites = [];


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getPublishedBy(): ?string
    {
        return $this->publishedBy;
    }

    public function setPublishedBy(?string $publishedBy): self
    {
        $this->publishedBy = $publishedBy;
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

    public function getRevision(): ?string
    {
        return $this->revision;
    }

    public function setRevision(?string $revision): self
    {
        $this->revision = $revision;
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

    public function getSharedCookies(): array
    {
        return $this->sharedCookies;
    }

    public function setSharedCookies(array $sharedCookies): self
    {
        $this->sharedCookies = $sharedCookies;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSites(): array
    {
        return $this->sites;
    }

    /**
     * @param string[] $sites
     */
    public function setSites(array $sites): self
    {
        $this->sites = $sites;
        return $this;
    }

}
