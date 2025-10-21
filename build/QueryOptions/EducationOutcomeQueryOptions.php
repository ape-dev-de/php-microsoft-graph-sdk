<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationOutcome resources
 *
 * Available select fields:
 * - lastModifiedBy
 * - lastModifiedDateTime
 */
class EducationOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationOutcome
     */
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific EducationOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
