<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingValue
 */
class SettingValue
{
    public function __construct(
        /** Name of the setting (as defined by the groupSettingTemplate). */
        public ?string $name = null,
        /** Value of the setting. */
        public ?string $value = null
    ) {}
}
