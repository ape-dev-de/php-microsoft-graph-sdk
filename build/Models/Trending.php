<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Trending
 */
class Trending
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Reference properties of the trending document, such as the url and type of the document. */
        public ?ResourceReference $resourceReference = null,
        /** Properties that you can use to visualize the document in your experience. */
        public ?ResourceVisualization $resourceVisualization = null,
        /** Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value. */
        public ?string $weight = null,
        /** Used for navigating to the trending document. */
        public ?Entity $resource = null
    ) {}
}
