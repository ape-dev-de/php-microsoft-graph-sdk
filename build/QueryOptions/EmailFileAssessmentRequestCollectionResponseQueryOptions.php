<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailFileAssessmentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EmailFileAssessmentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EmailFileAssessmentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use EmailFileAssessmentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
