<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementApplicationConfiguration
 */
class AppManagementApplicationConfiguration
{
    public function __construct(
        /** Collection of keyCredential restrictions settings to be applied to an application or service principal. */
        public array $keyCredentials = [],
        /** @var string[] Collection of password restrictions settings to be applied to an application or service principal. */
        public array $passwordCredentials = []
    ) {}
}
