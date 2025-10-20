<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedbackOutcomeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationFeedbackOutcomeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationFeedbackOutcomeCollectionResponse properties
     * 
     * @param array<string> $select Use EducationFeedbackOutcomeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
