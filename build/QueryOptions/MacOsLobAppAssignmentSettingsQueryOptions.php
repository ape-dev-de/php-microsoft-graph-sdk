<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOsLobAppAssignmentSettings resources
 *
 * Available select fields:
 * - uninstallOnDeviceRemoval
 */
class MacOsLobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOsLobAppAssignmentSettings
     */
    public const FIELD_UNINSTALL_ON_DEVICE_REMOVAL = 'uninstallOnDeviceRemoval';

    /**
     * Select specific MacOsLobAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
