<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Bundle
 */
class Bundle
{
    public function __construct(
        /** If the bundle is an album, then the album property is included */
        public ?string $album = null,
        /** Number of children contained immediately within this container. */
        public ?float $childCount = null
    ) {}
}
