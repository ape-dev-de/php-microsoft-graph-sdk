<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAppXAppAssignmentSettings resources
 *
 * Available select fields:
 * - useDeviceContext
 */
class WindowsAppXAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsAppXAppAssignmentSettings
     */
    public const FIELD_USE_DEVICE_CONTEXT = 'useDeviceContext';

    /**
     * Select specific WindowsAppXAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
