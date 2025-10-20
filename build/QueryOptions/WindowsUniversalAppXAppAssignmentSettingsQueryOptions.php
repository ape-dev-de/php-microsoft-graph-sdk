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
    public const FIELD_USE_DEVICE_CONTEXT = 'useDeviceContext';

    /**
     * Select specific WindowsUniversalAppXAppAssignmentSettings properties
     * 
     * @param array<string> $select Use WindowsUniversalAppXAppAssignmentSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
