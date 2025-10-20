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
    public const FIELD_RELAY_STATE = 'relayState';

    /**
     * Select specific SamlSingleSignOnSettings properties
     * 
     * @param array<string> $select Use SamlSingleSignOnSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
