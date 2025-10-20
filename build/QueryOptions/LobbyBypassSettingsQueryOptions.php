<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LobbyBypassSettings resources
 *
 * Available select fields:
 * - isDialInBypassEnabled
 * - scope
 */
class LobbyBypassSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_DIAL_IN_BYPASS_ENABLED = 'isDialInBypassEnabled';
    public const FIELD_SCOPE = 'scope';

    /**
     * Select specific LobbyBypassSettings properties
     * 
     * @param array<string> $select Use LobbyBypassSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
