<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSite
 */
class BrowserSite
{
    /**
     * Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
     */
    private ?bool $allowRedirect;

    /**
     * The comment for the site.
     */
    private ?string $comment;

    /**
     */
    private ?string $compatibilityMode;

    /**
     * The date and time when the site was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The date and time when the site was deleted.
     */
    private ?\DateTimeInterface $deletedDateTime;

    /**
     * The history of modifications applied to the site.
     */
    private array $history = [];

    /**
     * The user who last modified the site.
     */
    private ?string $lastModifiedBy;

    /**
     * The date and time when the site was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     */
    private ?string $mergeType;

    /**
     */
    private ?string $status;

    /**
     */
    private ?string $targetEnvironment;

    /**
     * Singleton entity which is used to specify IE mode site metadata
     */
    private ?string $webUrl;


    public function getAllowRedirect(): ?bool
    {
        return $this->allowRedirect;
    }

    public function setAllowRedirect(?bool $allowRedirect): self
    {
        $this->allowRedirect = $allowRedirect;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getCompatibilityMode(): ?string
    {
        return $this->compatibilityMode;
    }

    public function setCompatibilityMode(?string $compatibilityMode): self
    {
        $this->compatibilityMode = $compatibilityMode;
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

    public function getHistory(): array
    {
        return $this->history;
    }

    public function setHistory(array $history): self
    {
        $this->history = $history;
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

    public function getMergeType(): ?string
    {
        return $this->mergeType;
    }

    public function setMergeType(?string $mergeType): self
    {
        $this->mergeType = $mergeType;
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

    public function getTargetEnvironment(): ?string
    {
        return $this->targetEnvironment;
    }

    public function setTargetEnvironment(?string $targetEnvironment): self
    {
        $this->targetEnvironment = $targetEnvironment;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
