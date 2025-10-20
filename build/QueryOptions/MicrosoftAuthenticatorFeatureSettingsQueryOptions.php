<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorFeatureSettings resources
 *
 * Available select fields:
 * - displayAppInformationRequiredState
 * - displayLocationInformationRequiredState
 */
class MicrosoftAuthenticatorFeatureSettingsQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_APP_INFORMATION_REQUIRED_STATE = 'displayAppInformationRequiredState';
    public const FIELD_DISPLAY_LOCATION_INFORMATION_REQUIRED_STATE = 'displayLocationInformationRequiredState';

    /**
     * Select specific MicrosoftAuthenticatorFeatureSettings properties
     * 
     * @param array<string> $select Use MicrosoftAuthenticatorFeatureSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
