<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedMobileLobApp
 */
class ManagedMobileLobApp
{
    public function __construct(
        /** The internal committed content version. */
        public ?string $committedContentVersion = null,
        /** The name of the main Lob application file. */
        public ?string $fileName = null,
        /** The total size, including all uploaded files. */
        public ?float $size = null,
        /** @var string[] An abstract base class containing properties for all managed mobile line-of-business apps. */
        public array $contentVersions = []
    ) {}
}
