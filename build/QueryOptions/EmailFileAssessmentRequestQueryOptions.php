<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailFileAssessmentRequest resources
 *
 * Available select fields:
 */
class EmailFileAssessmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailFileAssessmentRequest
     */

    /**
     * Select specific EmailFileAssessmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
