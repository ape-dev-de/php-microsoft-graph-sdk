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
        public ?FileStorage $fileStorage = null,
        /**  */
        public ?StorageSettings $settings = null
    ) {}
}
