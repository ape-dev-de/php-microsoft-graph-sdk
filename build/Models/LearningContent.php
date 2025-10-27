<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningContent
 */
class LearningContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Keywords, topics, and other tags associated with the learning content. Optional.
     * @var string[]
     */
    public array $additionalTags = [];

    /** The content web URL for the learning content. Required. */
    public ?string $contentWebUrl = null;

    /** 
     * The authors, creators, or contributors of the learning content. Optional.
     * @var string[]
     */
    public array $contributors = [];

    /** The date and time when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description or summary for the learning content. Optional. */
    public ?string $description = null;

    /** The duration of the learning content in seconds. The value is represented in ISO 8601 format for durations. Optional. */
    public ?string $duration = null;

    /** Unique external content ID for the learning content. Required. */
    public ?string $externalId = null;

    /** The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional. */
    public ?string $format = null;

    /** Indicates whether the content is active or not. Inactive content doesn't show up in the UI. The default value is true. Optional. */
    public ?bool $isActive = null;

    /** Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional. */
    public ?bool $isPremium = null;

    /** Indicates whether the learning content is searchable or not. The default value is true. Optional. */
    public ?bool $isSearchable = null;

    /** The language of the learning content, for example, en-us or fr-fr. Required. */
    public ?string $languageTag = null;

    /** The date and time when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The difficulty level of the learning content. Possible values are: Beginner, Intermediate, Advanced, unknownFutureValue. Optional.
     * @var Level|\stdClass|null
     */
    public Level|\stdClass|null $level = null;

    /** The number of pages of the learning content, for example, 9. Optional. */
    public ?float $numberOfPages = null;

    /** 
     * The skills tags associated with the learning content. Optional.
     * @var string[]
     */
    public array $skillTags = [];

    /** The source name of the learning content, such as LinkedIn Learning or Coursera. Optional. */
    public ?string $sourceName = null;

    /** The URL of learning content thumbnail image. Optional. */
    public ?string $thumbnailWebUrl = null;

    /** The title of the learning content. Required. */
    public ?string $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['additionalTags'])) {
            $this->additionalTags = $data['additionalTags'];
        }
        if (isset($data['contentWebUrl'])) {
            $this->contentWebUrl = $data['contentWebUrl'];
        }
        if (isset($data['contributors'])) {
            $this->contributors = $data['contributors'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['duration'])) {
            $this->duration = $data['duration'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
        if (isset($data['isActive'])) {
            $this->isActive = is_bool($data['isActive']) ? $data['isActive'] : (bool)$data['isActive'];
        }
        if (isset($data['isPremium'])) {
            $this->isPremium = is_bool($data['isPremium']) ? $data['isPremium'] : (bool)$data['isPremium'];
        }
        if (isset($data['isSearchable'])) {
            $this->isSearchable = is_bool($data['isSearchable']) ? $data['isSearchable'] : (bool)$data['isSearchable'];
        }
        if (isset($data['languageTag'])) {
            $this->languageTag = $data['languageTag'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['level'])) {
            $this->level = is_array($data['level']) ? new Level($data['level']) : $data['level'];
        }
        if (isset($data['numberOfPages'])) {
            $this->numberOfPages = is_numeric($data['numberOfPages']) ? (float)$data['numberOfPages'] : $data['numberOfPages'];
        }
        if (isset($data['skillTags'])) {
            $this->skillTags = $data['skillTags'];
        }
        if (isset($data['sourceName'])) {
            $this->sourceName = $data['sourceName'];
        }
        if (isset($data['thumbnailWebUrl'])) {
            $this->thumbnailWebUrl = $data['thumbnailWebUrl'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
