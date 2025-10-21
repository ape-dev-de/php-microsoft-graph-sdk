<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareOathAuthenticationMethodConfiguration
 */
class SoftwareOathAuthenticationMethodConfiguration
{
    public function __construct(
        /** @var string[] A collection of groups that are enabled to use the authentication method. Expanded by default. */
        public array $includeTargets = []
    ) {}
}
