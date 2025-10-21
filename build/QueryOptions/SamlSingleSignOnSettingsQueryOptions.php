<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SamlSingleSignOnSettings resources
 *
 * Available select fields:
 * - relayState
 */
class SamlSingleSignOnSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SamlSingleSignOnSettings
     */
    public const FIELD_RELAY_STATE = 'relayState';

    /**
     * Select specific SamlSingleSignOnSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
