<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SensitivityLabelCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SensitivityLabelCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SensitivityLabelCollectionResponse properties
     * 
     * @param array<string> $select Use SensitivityLabelCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
