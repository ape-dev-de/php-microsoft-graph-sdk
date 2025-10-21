<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftStoreForBusinessAppAssignmentSettings resources
 *
 * Available select fields:
 * - useDeviceContext
 */
class MicrosoftStoreForBusinessAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftStoreForBusinessAppAssignmentSettings
     */
    public const FIELD_USE_DEVICE_CONTEXT = 'useDeviceContext';

    /**
     * Select specific MicrosoftStoreForBusinessAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
