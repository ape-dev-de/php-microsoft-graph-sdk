<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCategory resources
 *
 * Available select fields:
 * - description
 * - displayName
 */
class DeviceCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceCategory
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific DeviceCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
