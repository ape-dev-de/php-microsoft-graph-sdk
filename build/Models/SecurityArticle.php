<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityArticle
 */
class SecurityArticle
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?SecurityFormattedContent $body = null;

    /** The date and time when this article was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** URL of the header image for this article, used for display purposes. */
    public ?string $imageUrl = null;

    /** Indicates whether this article is currently featured by Microsoft. */
    public ?bool $isFeatured = null;

    /** The most recent date and time when this article was updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /**  */
    public ?SecurityFormattedContent $summary = null;

    /** 
     * Tags for this article, communicating keywords, or key concepts.
     * @var string[]
     */
    public array $tags = [];

    /** The title of this article. */
    public ?string $title = null;

    /** 
     * Indicators related to this article.
     * @var SecurityArticleIndicator[]
     */
    public array $indicators = [];


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
        if (isset($data['body'])) {
            $this->body = is_array($data['body']) ? new SecurityFormattedContent($data['body']) : $data['body'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['imageUrl'])) {
            $this->imageUrl = $data['imageUrl'];
        }
        if (isset($data['isFeatured'])) {
            $this->isFeatured = is_bool($data['isFeatured']) ? $data['isFeatured'] : (bool)$data['isFeatured'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['summary'])) {
            $this->summary = is_array($data['summary']) ? new SecurityFormattedContent($data['summary']) : $data['summary'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['indicators'])) {
            $this->indicators = $data['indicators'];
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
