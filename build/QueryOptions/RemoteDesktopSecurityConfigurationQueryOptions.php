<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoteDesktopSecurityConfiguration resources
 *
 * Available select fields:
 * - isRemoteDesktopProtocolEnabled
 * - targetDeviceGroups
 */
class RemoteDesktopSecurityConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RemoteDesktopSecurityConfiguration
     */
    public const FIELD_IS_REMOTE_DESKTOP_PROTOCOL_ENABLED = 'isRemoteDesktopProtocolEnabled';
    public const FIELD_TARGET_DEVICE_GROUPS = 'targetDeviceGroups';

    /**
     * Select specific RemoteDesktopSecurityConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
