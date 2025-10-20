<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedLabelCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AssignedLabelCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AssignedLabelCollectionResponse properties
     * 
     * @param array<string> $select Use AssignedLabelCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
