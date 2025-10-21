<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityBlobContainerEvidence
 */
class SecurityBlobContainerEvidence
{
    public function __construct(
        /** The name of the blob container. */
        public ?string $name = null,
        /** The storage which the blob container belongs to. */
        public ?string $storageResource = null,
        /** The full URL representation of the blob container. */
        public ?string $url = null
    ) {}
}
