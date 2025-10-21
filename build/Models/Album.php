<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Album
 */
class Album
{
    public function __construct(
        /** Unique identifier of the driveItem that is the cover of the album. */
        public ?string $coverImageItemId = null
    ) {}
}
