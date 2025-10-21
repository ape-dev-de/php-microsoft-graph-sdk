<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityArticle
 */
class SecurityArticle
{
    public function __construct(
        /**  */
        public ?string $body = null,
        /** The date and time when this article was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** URL of the header image for this article, used for display purposes. */
        public ?string $imageUrl = null,
        /** Indicates whether this article is currently featured by Microsoft. */
        public ?bool $isFeatured = null,
        /** The most recent date and time when this article was updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /**  */
        public ?string $summary = null,
        /** @var string[] Tags for this article, communicating keywords, or key concepts. */
        public array $tags = [],
        /** The title of this article. */
        public ?string $title = null,
        /** @var string[] Indicators related to this article. */
        public array $indicators = []
    ) {}
}
