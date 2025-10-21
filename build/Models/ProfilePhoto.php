<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProfilePhoto
 */
class ProfilePhoto
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The height of the photo. Read-only. */
        public ?float $height = null,
        /** The width of the photo. Read-only. */
        public ?float $width = null
    ) {}
}
