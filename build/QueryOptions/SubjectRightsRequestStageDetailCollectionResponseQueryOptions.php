<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestStageDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SubjectRightsRequestStageDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SubjectRightsRequestStageDetailCollectionResponse properties
     * 
     * @param array<string> $select Use SubjectRightsRequestStageDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
