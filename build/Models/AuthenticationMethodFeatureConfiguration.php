<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodFeatureConfiguration
 */
class AuthenticationMethodFeatureConfiguration
{
    public function __construct(
        /** A single entity that is excluded from this feature. */
        public ?string $excludeTarget = null,
        /** A single entity that is included in this feature. */
        public ?string $includeTarget = null,
        /** Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Microsoft Entra ID for the setting. The default value is disabled. */
        public ?string $state = null
    ) {}
}
