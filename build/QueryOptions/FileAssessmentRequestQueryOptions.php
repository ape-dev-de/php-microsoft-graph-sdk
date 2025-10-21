<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileAssessmentRequest resources
 *
 * Available select fields:
 */
class FileAssessmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileAssessmentRequest
     */

    /**
     * Select specific FileAssessmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
