<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationTerm resources
 *
 * Available select fields:
 * - displayName
 * - endDate
 * - externalId
 * - startDate
 */
class EducationTermQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationTerm
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_END_DATE = 'endDate';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_START_DATE = 'startDate';

    /**
     * Select specific EducationTerm properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
