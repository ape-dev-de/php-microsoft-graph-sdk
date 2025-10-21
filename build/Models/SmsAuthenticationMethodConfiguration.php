<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SmsAuthenticationMethodConfiguration
 */
class SmsAuthenticationMethodConfiguration
{
    public function __construct(
        /** @var string[] A collection of groups that are enabled to use the authentication method. */
        public array $includeTargets = []
    ) {}
}
