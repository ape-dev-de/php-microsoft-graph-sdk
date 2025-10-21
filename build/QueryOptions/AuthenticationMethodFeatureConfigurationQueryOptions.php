<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodFeatureConfiguration resources
 *
 * Available select fields:
 * - excludeTarget
 * - includeTarget
 * - state
 */
class AuthenticationMethodFeatureConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodFeatureConfiguration
     */
    public const FIELD_EXCLUDE_TARGET = 'excludeTarget';
    public const FIELD_INCLUDE_TARGET = 'includeTarget';
    public const FIELD_STATE = 'state';

    /**
     * Select specific AuthenticationMethodFeatureConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
