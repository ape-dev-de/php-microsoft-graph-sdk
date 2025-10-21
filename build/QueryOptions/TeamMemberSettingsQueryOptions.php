<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamMemberSettings resources
 *
 * Available select fields:
 * - allowAddRemoveApps
 * - allowCreatePrivateChannels
 * - allowCreateUpdateChannels
 * - allowCreateUpdateRemoveConnectors
 * - allowCreateUpdateRemoveTabs
 * - allowDeleteChannels
 */
class TeamMemberSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamMemberSettings
     */
    public const FIELD_ALLOW_ADD_REMOVE_APPS = 'allowAddRemoveApps';
    public const FIELD_ALLOW_CREATE_PRIVATE_CHANNELS = 'allowCreatePrivateChannels';
    public const FIELD_ALLOW_CREATE_UPDATE_CHANNELS = 'allowCreateUpdateChannels';
    public const FIELD_ALLOW_CREATE_UPDATE_REMOVE_CONNECTORS = 'allowCreateUpdateRemoveConnectors';
    public const FIELD_ALLOW_CREATE_UPDATE_REMOVE_TABS = 'allowCreateUpdateRemoveTabs';
    public const FIELD_ALLOW_DELETE_CHANNELS = 'allowDeleteChannels';

    /**
     * Select specific TeamMemberSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
