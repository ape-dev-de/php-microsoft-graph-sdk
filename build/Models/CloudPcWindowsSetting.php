<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcWindowsSetting
 */
class CloudPcWindowsSetting
{
    public function __construct(
        /** The Windows language or region tag to use for language pack configuration and localization of the Cloud PC. The default value is en-US, which corresponds to English (United States). */
        public ?string $locale = null
    ) {}
}
