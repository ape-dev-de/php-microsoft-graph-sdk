<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppAssignmentSettings resources
 *
 * Available select fields:
 * - autoUpdateSettings
 * - deliveryOptimizationPriority
 * - installTimeSettings
 * - notifications
 * - restartSettings
 */
class Win32LobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    public const FIELD_AUTO_UPDATE_SETTINGS = 'autoUpdateSettings';
    public const FIELD_DELIVERY_OPTIMIZATION_PRIORITY = 'deliveryOptimizationPriority';
    public const FIELD_INSTALL_TIME_SETTINGS = 'installTimeSettings';
    public const FIELD_NOTIFICATIONS = 'notifications';
    public const FIELD_RESTART_SETTINGS = 'restartSettings';

    /**
     * Select specific Win32LobAppAssignmentSettings properties
     * 
     * @param array<string> $select Use Win32LobAppAssignmentSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
