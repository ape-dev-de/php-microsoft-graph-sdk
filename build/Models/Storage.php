<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Storage
 */
class Storage
{
    public function __construct(
        /**  */
        public ?string $fileStorage = null,
        /**  */
        public ?string $settings = null
    ) {}
}
