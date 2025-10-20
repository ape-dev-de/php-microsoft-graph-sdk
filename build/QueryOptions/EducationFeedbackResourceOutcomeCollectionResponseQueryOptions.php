<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedbackResourceOutcomeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationFeedbackResourceOutcomeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationFeedbackResourceOutcomeCollectionResponse properties
     * 
     * @param array<string> $select Use EducationFeedbackResourceOutcomeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
