<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TaskFileAttachment
 */
class TaskFileAttachment
{
    public function __construct(
        /** The base64-encoded contents of the file. */
        public ?string $contentBytes = null
    ) {}
}
