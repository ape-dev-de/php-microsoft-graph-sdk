<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingSource
 */
class SettingSource
{
    public function __construct(
        /** Not yet documented */
        public ?string $displayName = null,
        /** Not yet documented */
        public ?string $id = null,
        /**  */
        public ?string $sourceType = null
    ) {}
}
