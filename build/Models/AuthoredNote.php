<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthoredNote
 */
class AuthoredNote
{
    public function __construct(
        /** Identity information about the note's author. */
        public ?string $author = null,
        /** The content of the note. */
        public ?string $content = null,
        /** The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null
    ) {}
}
