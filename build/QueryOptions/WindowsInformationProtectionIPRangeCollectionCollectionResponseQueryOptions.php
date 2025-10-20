<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionIPRangeCollectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsInformationProtectionIPRangeCollectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsInformationProtectionIPRangeCollectionCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionIPRangeCollectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
