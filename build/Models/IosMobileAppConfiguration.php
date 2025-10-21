<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMobileAppConfiguration
 */
class IosMobileAppConfiguration
{
    public function __construct(
        /** mdm app configuration Base64 binary. */
        public ?string $encodedSettingXml = null,
        /** @var string[] Contains properties, inherited properties and actions for iOS mobile app configurations. */
        public array $settings = []
    ) {}
}
