<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetDeviceGroup resources
 *
 * Available select fields:
 * - displayName
 */
class TargetDeviceGroupQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific TargetDeviceGroup properties
     * 
     * @param array<string> $select Use TargetDeviceGroupQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
