<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityBlobEvidence
 */
class SecurityBlobEvidence
{
    public function __construct(
        /** The container which the blob belongs to. */
        public ?string $blobContainer = null,
        /** The Etag associated with this blob. */
        public ?string $etag = null,
        /** The file hashes associated with this blob. */
        public array $fileHashes = [],
        /** The name of the blob. */
        public ?string $name = null,
        /** The full URL representation of the blob. */
        public ?string $url = null
    ) {}
}
