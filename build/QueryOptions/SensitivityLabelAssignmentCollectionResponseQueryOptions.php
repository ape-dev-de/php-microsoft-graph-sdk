<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SensitivityLabelAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SensitivityLabelAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SensitivityLabelAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use SensitivityLabelAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
