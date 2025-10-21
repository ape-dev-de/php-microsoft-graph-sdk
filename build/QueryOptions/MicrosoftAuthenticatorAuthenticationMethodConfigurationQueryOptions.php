<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - featureSettings
 * - isSoftwareOathEnabled
 * - includeTargets
 */
class MicrosoftAuthenticatorAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftAuthenticatorAuthenticationMethodConfiguration
     */
    public const FIELD_FEATURE_SETTINGS = 'featureSettings';
    public const FIELD_IS_SOFTWARE_OATH_ENABLED = 'isSoftwareOathEnabled';
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
