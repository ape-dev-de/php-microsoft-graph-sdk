<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestHistoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SubjectRightsRequestHistoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SubjectRightsRequestHistoryCollectionResponse properties
     * 
     * @param array<string> $select Use SubjectRightsRequestHistoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
