<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecycleBin
 */
class RecycleBin
{
    public function __construct(
        /**  */
        public ?string $settings = null,
        /** @var string[] List of the recycleBinItems deleted by a user. */
        public array $items = []
    ) {}
}
