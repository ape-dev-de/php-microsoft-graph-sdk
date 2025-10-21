<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingTemplateValue
 */
class SettingTemplateValue
{
    public function __construct(
        /** Default value for the setting. */
        public ?string $defaultValue = null,
        /** Description of the setting. */
        public ?string $description = null,
        /** Name of the setting. */
        public ?string $name = null,
        /** Type of the setting. */
        public ?string $type = null
    ) {}
}
