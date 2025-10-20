<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionResourceCollection resources
 *
 * Available select fields:
 * - displayName
 * - resources
 */
class WindowsInformationProtectionResourceCollectionQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_RESOURCES = 'resources';

    /**
     * Select specific WindowsInformationProtectionResourceCollection properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionResourceCollectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
