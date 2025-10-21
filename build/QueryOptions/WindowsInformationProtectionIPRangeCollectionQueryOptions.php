<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionIPRangeCollection resources
 *
 * Available select fields:
 * - displayName
 * - ranges
 */
class WindowsInformationProtectionIPRangeCollectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionIPRangeCollection
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_RANGES = 'ranges';

    /**
     * Select specific WindowsInformationProtectionIPRangeCollection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
