<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUniversalAppXAppAssignmentSettings resources
 *
 * Available select fields:
 * - useDeviceContext
 */
class WindowsUniversalAppXAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUniversalAppXAppAssignmentSettings
     */
    public const FIELD_USE_DEVICE_CONTEXT = 'useDeviceContext';

    /**
     * Select specific WindowsUniversalAppXAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
