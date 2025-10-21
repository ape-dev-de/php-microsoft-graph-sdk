<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemporaryAccessPassAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - defaultLength
 * - defaultLifetimeInMinutes
 * - isUsableOnce
 * - maximumLifetimeInMinutes
 * - minimumLifetimeInMinutes
 * - includeTargets
 */
class TemporaryAccessPassAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TemporaryAccessPassAuthenticationMethodConfiguration
     */
    public const FIELD_DEFAULT_LENGTH = 'defaultLength';
    public const FIELD_DEFAULT_LIFETIME_IN_MINUTES = 'defaultLifetimeInMinutes';
    public const FIELD_IS_USABLE_ONCE = 'isUsableOnce';
    public const FIELD_MAXIMUM_LIFETIME_IN_MINUTES = 'maximumLifetimeInMinutes';
    public const FIELD_MINIMUM_LIFETIME_IN_MINUTES = 'minimumLifetimeInMinutes';
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific TemporaryAccessPassAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
