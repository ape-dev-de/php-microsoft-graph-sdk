<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsAndConditionsAssignment resources
 *
 * Available select fields:
 * - target
 */
class TermsAndConditionsAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific TermsAndConditionsAssignment properties
     * 
     * @param array<string> $select Use TermsAndConditionsAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
