<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamGuestSettings resources
 *
 * Available select fields:
 * - allowCreateUpdateChannels
 * - allowDeleteChannels
 */
class TeamGuestSettingsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_CREATE_UPDATE_CHANNELS = 'allowCreateUpdateChannels';
    public const FIELD_ALLOW_DELETE_CHANNELS = 'allowDeleteChannels';

    /**
     * Select specific TeamGuestSettings properties
     * 
     * @param array<string> $select Use TeamGuestSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
