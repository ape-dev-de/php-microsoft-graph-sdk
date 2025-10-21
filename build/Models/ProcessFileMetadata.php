<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessFileMetadata
 */
class ProcessFileMetadata
{
    public function __construct(
        /** A dictionary containing custom metadata associated with the file, potentially extracted by the calling application. */
        public ?string $customProperties = null,
        /** The unique identifier (for example, Entra User ID or UPN) of the owner of the file. */
        public ?string $ownerId = null
    ) {}
}
