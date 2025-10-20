<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UrlAssessmentRequest resources
 *
 * Available select fields:
 * - url
 */
class UrlAssessmentRequestQueryOptions extends QueryOptions
{
    public const FIELD_URL = 'url';

    /**
     * Select specific UrlAssessmentRequest properties
     * 
     * @param array<string> $select Use UrlAssessmentRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
