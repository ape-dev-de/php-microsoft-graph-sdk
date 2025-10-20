<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SubjectRightsRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SubjectRightsRequestCollectionResponse properties
     * 
     * @param array<string> $select Use SubjectRightsRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
