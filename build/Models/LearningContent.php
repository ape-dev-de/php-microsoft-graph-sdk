<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningContent
 */
class LearningContent
{
    public function __construct(
        /** @var string[] Keywords, topics, and other tags associated with the learning content. Optional. */
        public array $additionalTags = [],
        /** The content web URL for the learning content. Required. */
        public ?string $contentWebUrl = null,
        /** @var string[] The authors, creators, or contributors of the learning content. Optional. */
        public array $contributors = [],
        /** The date and time when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description or summary for the learning content. Optional. */
        public ?string $description = null,
        /** The duration of the learning content in seconds. The value is represented in ISO 8601 format for durations. Optional. */
        public ?string $duration = null,
        /** Unique external content ID for the learning content. Required. */
        public ?string $externalId = null,
        /** The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional. */
        public ?string $format = null,
        /** Indicates whether the content is active or not. Inactive content doesn't show up in the UI. The default value is true. Optional. */
        public ?bool $isActive = null,
        /** Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional. */
        public ?bool $isPremium = null,
        /** Indicates whether the learning content is searchable or not. The default value is true. Optional. */
        public ?bool $isSearchable = null,
        /** The language of the learning content, for example, en-us or fr-fr. Required. */
        public ?string $languageTag = null,
        /** The date and time when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The difficulty level of the learning content. Possible values are: Beginner, Intermediate, Advanced, unknownFutureValue. Optional. */
        public ?string $level = null,
        /** The number of pages of the learning content, for example, 9. Optional. */
        public ?float $numberOfPages = null,
        /** @var string[] The skills tags associated with the learning content. Optional. */
        public array $skillTags = [],
        /** The source name of the learning content, such as LinkedIn Learning or Coursera. Optional. */
        public ?string $sourceName = null,
        /** The URL of learning content thumbnail image. Optional. */
        public ?string $thumbnailWebUrl = null,
        /** The title of the learning content. Required. */
        public ?string $title = null
    ) {}
}
