<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookCommentReply
 */
class WorkbookCommentReply
{
    public function __construct(
        /** The content of the reply. */
        public ?string $content = null,
        /** The content type for the reply. */
        public ?string $contentType = null
    ) {}
}
