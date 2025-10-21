<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileAttachment
 */
class FileAttachment
{
    public function __construct(
        /** The base64-encoded contents of the file. */
        public ?string $contentBytes = null,
        /** The ID of the attachment in the Exchange store. */
        public ?string $contentId = null,
        /** Don't use this property as it isn't supported. */
        public ?string $contentLocation = null
    ) {}
}
