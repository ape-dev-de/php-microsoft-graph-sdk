<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningContent
 */
class LearningContent
{
    /**
     * Keywords, topics, and other tags associated with the learning content. Optional.
     * @var string[]
     */
    private array $additionalTags = [];

    /**
     * The content web URL for the learning content. Required.
     */
    private ?string $contentWebUrl;

    /**
     * The authors, creators, or contributors of the learning content. Optional.
     * @var string[]
     */
    private array $contributors = [];

    /**
     * The date and time when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description or summary for the learning content. Optional.
     */
    private ?string $description;

    /**
     * The duration of the learning content in seconds. The value is represented in ISO 8601 format for durations. Optional.
     */
    private ?string $duration;

    /**
     * Unique external content ID for the learning content. Required.
     */
    private ?string $externalId;

    /**
     * The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
     */
    private ?string $format;

    /**
     * Indicates whether the content is active or not. Inactive content doesn't show up in the UI. The default value is true. Optional.
     */
    private ?bool $isActive;

    /**
     * Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
     */
    private ?bool $isPremium;

    /**
     * Indicates whether the learning content is searchable or not. The default value is true. Optional.
     */
    private ?bool $isSearchable;

    /**
     * The language of the learning content, for example, en-us or fr-fr. Required.
     */
    private ?string $languageTag;

    /**
     * The date and time when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The difficulty level of the learning content. Possible values are: Beginner, Intermediate, Advanced, unknownFutureValue. Optional.
     */
    private ?string $level;

    /**
     * The number of pages of the learning content, for example, 9. Optional.
     */
    private ?float $numberOfPages;

    /**
     * The skills tags associated with the learning content. Optional.
     * @var string[]
     */
    private array $skillTags = [];

    /**
     * The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
     */
    private ?string $sourceName;

    /**
     * The URL of learning content thumbnail image. Optional.
     */
    private ?string $thumbnailWebUrl;

    /**
     * The title of the learning content. Required.
     */
    private ?string $title;


    /**
     * @return string[]
     */
    public function getAdditionalTags(): array
    {
        return $this->additionalTags;
    }

    /**
     * @param string[] $additionalTags
     */
    public function setAdditionalTags(array $additionalTags): self
    {
        $this->additionalTags = $additionalTags;
        return $this;
    }

    public function getContentWebUrl(): ?string
    {
        return $this->contentWebUrl;
    }

    public function setContentWebUrl(?string $contentWebUrl): self
    {
        $this->contentWebUrl = $contentWebUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getContributors(): array
    {
        return $this->contributors;
    }

    /**
     * @param string[] $contributors
     */
    public function setContributors(array $contributors): self
    {
        $this->contributors = $contributors;
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

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getIsPremium(): ?bool
    {
        return $this->isPremium;
    }

    public function setIsPremium(?bool $isPremium): self
    {
        $this->isPremium = $isPremium;
        return $this;
    }

    public function getIsSearchable(): ?bool
    {
        return $this->isSearchable;
    }

    public function setIsSearchable(?bool $isSearchable): self
    {
        $this->isSearchable = $isSearchable;
        return $this;
    }

    public function getLanguageTag(): ?string
    {
        return $this->languageTag;
    }

    public function setLanguageTag(?string $languageTag): self
    {
        $this->languageTag = $languageTag;
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

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function getNumberOfPages(): ?float
    {
        return $this->numberOfPages;
    }

    public function setNumberOfPages(?float $numberOfPages): self
    {
        $this->numberOfPages = $numberOfPages;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSkillTags(): array
    {
        return $this->skillTags;
    }

    /**
     * @param string[] $skillTags
     */
    public function setSkillTags(array $skillTags): self
    {
        $this->skillTags = $skillTags;
        return $this;
    }

    public function getSourceName(): ?string
    {
        return $this->sourceName;
    }

    public function setSourceName(?string $sourceName): self
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    public function getThumbnailWebUrl(): ?string
    {
        return $this->thumbnailWebUrl;
    }

    public function setThumbnailWebUrl(?string $thumbnailWebUrl): self
    {
        $this->thumbnailWebUrl = $thumbnailWebUrl;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
