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
    /**
     * Available select fields for TeamGuestSettings
     */
    public const FIELD_ALLOW_CREATE_UPDATE_CHANNELS = 'allowCreateUpdateChannels';
    public const FIELD_ALLOW_DELETE_CHANNELS = 'allowDeleteChannels';

    /**
     * Select specific TeamGuestSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
