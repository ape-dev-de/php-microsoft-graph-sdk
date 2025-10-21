<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for KeyCredentialConfiguration resources
 *
 * Available select fields:
 * - maxLifetime
 * - restrictForAppsCreatedAfterDateTime
 * - restrictionType
 * - state
 */
class KeyCredentialConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for KeyCredentialConfiguration
     */
    public const FIELD_MAX_LIFETIME = 'maxLifetime';
    public const FIELD_RESTRICT_FOR_APPS_CREATED_AFTER_DATE_TIME = 'restrictForAppsCreatedAfterDateTime';
    public const FIELD_RESTRICTION_TYPE = 'restrictionType';
    public const FIELD_STATE = 'state';

    /**
     * Select specific KeyCredentialConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
