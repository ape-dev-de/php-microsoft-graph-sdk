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
        /** Contains properties for App configuration setting item. */
        public ?string $appConfigKeyValue = null
    ) {}
}
