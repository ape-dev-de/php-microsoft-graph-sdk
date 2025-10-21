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
    /**
     * Available select fields for EducationOnPremisesInfo
     */
    public const FIELD_IMMUTABLE_ID = 'immutableId';

    /**
     * Select specific EducationOnPremisesInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
