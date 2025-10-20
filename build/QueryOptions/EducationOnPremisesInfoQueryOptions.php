<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationOnPremisesInfo resources
 *
 * Available select fields:
 * - immutableId
 */
class EducationOnPremisesInfoQueryOptions extends QueryOptions
{
    public const FIELD_IMMUTABLE_ID = 'immutableId';

    /**
     * Select specific EducationOnPremisesInfo properties
     * 
     * @param array<string> $select Use EducationOnPremisesInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
