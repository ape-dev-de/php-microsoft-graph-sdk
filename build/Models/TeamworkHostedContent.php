<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkHostedContent
 */
class TeamworkHostedContent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Write only. Bytes for the hosted content (such as images). */
        public ?string $contentBytes = null,
        /** Write only. Content type. such as image/png, image/jpg. */
        public ?string $contentType = null
    ) {}
}
