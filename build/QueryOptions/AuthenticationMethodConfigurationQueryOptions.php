<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - excludeTargets
 * - state
 */
class AuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUDE_TARGETS = 'excludeTargets';
    public const FIELD_STATE = 'state';

    /**
     * Select specific AuthenticationMethodConfiguration properties
     * 
     * @param array<string> $select Use AuthenticationMethodConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
