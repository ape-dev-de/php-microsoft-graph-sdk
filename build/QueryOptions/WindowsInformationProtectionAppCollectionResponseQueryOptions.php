<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsInformationProtectionAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsInformationProtectionAppCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
