<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintDocumentUploadProperties
 */
class PrintDocumentUploadProperties
{
    public function __construct(
        /** The document's content (MIME) type. */
        public ?string $contentType = null,
        /** The document's name. */
        public ?string $documentName = null,
        /** The document's size in bytes. */
        public ?string $size = null
    ) {}
}
