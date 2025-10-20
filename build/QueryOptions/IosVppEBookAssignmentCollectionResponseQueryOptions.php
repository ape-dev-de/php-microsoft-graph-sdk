<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppEBookAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosVppEBookAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosVppEBookAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use IosVppEBookAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
