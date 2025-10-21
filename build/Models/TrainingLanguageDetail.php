<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingLanguageDetail
 */
class TrainingLanguageDetail
{
    /**
     * Language specific content for the training.
     */
    private ?string $content;

    /**
     * Identity of the user who created the language details.
     */
    private ?string $createdBy;

    /**
     * Date and time when the language details were created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description as defined by the user.
     */
    private ?string $description;

    /**
     * Display name as defined by the user.
     */
    private ?string $displayName;

    /**
     * Indicates whether the training has a default language.
     */
    private ?bool $isDefaultLangauge;

    /**
     * Identity of the user who last modified the details.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time when the trainingLanguageDetail was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Content locale for the training detail.
     */
    private ?string $locale;


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getIsDefaultLangauge(): ?bool
    {
        return $this->isDefaultLangauge;
    }

    public function setIsDefaultLangauge(?bool $isDefaultLangauge): self
    {
        $this->isDefaultLangauge = $isDefaultLangauge;
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

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

}
