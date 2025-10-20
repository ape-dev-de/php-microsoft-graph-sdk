<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageMultipleChoiceQuestion resources
 *
 * Available select fields:
 * - choices
 * - isMultipleSelectionAllowed
 */
class AccessPackageMultipleChoiceQuestionQueryOptions extends QueryOptions
{
    public const FIELD_CHOICES = 'choices';
    public const FIELD_IS_MULTIPLE_SELECTION_ALLOWED = 'isMultipleSelectionAllowed';

    /**
     * Select specific AccessPackageMultipleChoiceQuestion properties
     * 
     * @param array<string> $select Use AccessPackageMultipleChoiceQuestionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
