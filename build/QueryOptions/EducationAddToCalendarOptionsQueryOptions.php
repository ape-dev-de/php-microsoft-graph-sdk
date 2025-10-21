<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAddToCalendarOptions resources
 *
 * Available select fields:
 */
class EducationAddToCalendarOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAddToCalendarOptions
     */

    /**
     * Select specific EducationAddToCalendarOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
