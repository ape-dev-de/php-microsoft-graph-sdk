<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UrlAssessmentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UrlAssessmentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UrlAssessmentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use UrlAssessmentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
