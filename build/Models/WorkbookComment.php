<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookComment
 */
class WorkbookComment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The content of the comment. */
        public ?string $content = null,
        /** The content type of the comment. */
        public ?string $contentType = null,
        /** The list of replies to the comment. Read-only. Nullable. */
        public array $replies = []
    ) {}
}
