<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteHistory
 */
class BrowserSiteHistory
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
     * Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue.
     */
    private ?string $compatibilityMode;

    /**
     * The user who last modified the site.
     */
    private ?string $lastModifiedBy;

    /**
     * The merge type of the site. The possible values are: noMerge, default, unknownFutureValue.
     */
    private ?string $mergeType;

    /**
     * The date and time when the site was last published.
     */
    private ?\DateTimeInterface $publishedDateTime;

    /**
     * The history for the site modifications
     */
    private ?string $targetEnvironment;


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

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
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

    public function getPublishedDateTime(): ?\DateTimeInterface
    {
        return $this->publishedDateTime;
    }

    public function setPublishedDateTime(?\DateTimeInterface $publishedDateTime): self
    {
        $this->publishedDateTime = $publishedDateTime;
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

}
