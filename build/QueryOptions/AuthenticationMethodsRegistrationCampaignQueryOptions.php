<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodsRegistrationCampaign resources
 *
 * Available select fields:
 * - excludeTargets
 * - includeTargets
 * - snoozeDurationInDays
 * - state
 */
class AuthenticationMethodsRegistrationCampaignQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUDE_TARGETS = 'excludeTargets';
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';
    public const FIELD_SNOOZE_DURATION_IN_DAYS = 'snoozeDurationInDays';
    public const FIELD_STATE = 'state';

    /**
     * Select specific AuthenticationMethodsRegistrationCampaign properties
     * 
     * @param array<string> $select Use AuthenticationMethodsRegistrationCampaignQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
