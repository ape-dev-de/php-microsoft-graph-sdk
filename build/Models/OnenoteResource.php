<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteResource
 */
class OnenoteResource
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The endpoint where you can get details about the page. Read-only. */
        public ?string $self = null,
        /** The content stream */
        public ?string $content = null,
        /** The URL for downloading the content */
        public ?string $contentUrl = null
    ) {}
}
