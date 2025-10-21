<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * File
 */
class File
{
    public function __construct(
        /** Hashes of the file's binary content, if available. Read-only. */
        public ?Hashes $hashes = null,
        /** The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only. */
        public ?string $mimeType = null,
        /**  */
        public ?bool $processingMetadata = null
    ) {}
}
