<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UrlAssessmentRequest resources
 *
 * Available select fields:
 */
class UrlAssessmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UrlAssessmentRequest
     */

    /**
     * Select specific UrlAssessmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
