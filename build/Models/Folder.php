<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Folder
 */
class Folder
{
    public function __construct(
        /** Number of children contained immediately within this container. */
        public ?float $childCount = null,
        /** A collection of properties defining the recommended view for the folder. */
        public ?string $view = null
    ) {}
}
