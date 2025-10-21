<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementConfiguration
 */
class AppManagementConfiguration
{
    public function __construct(
        /** Collection of keyCredential restrictions settings to be applied to an application or service principal. */
        public array $keyCredentials = [],
        /** Collection of password restrictions settings to be applied to an application or service principal. */
        public array $passwordCredentials = []
    ) {}
}
