<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConfigurationSettingItem
 */
class AppConfigurationSettingItem
{
    public function __construct(
        /** app configuration key. */
        public ?string $appConfigKey = null,
        /**  */
        public ?string $appConfigKeyType = null,
        /** app configuration key value. */
        public ?string $appConfigKeyValue = null
    ) {}
}
