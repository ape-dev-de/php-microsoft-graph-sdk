<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionResourceCollectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsInformationProtectionResourceCollectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsInformationProtectionResourceCollectionCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionResourceCollectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
