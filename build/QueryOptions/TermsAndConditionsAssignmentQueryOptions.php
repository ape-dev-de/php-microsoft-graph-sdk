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
    /**
     * Available select fields for TermsAndConditionsAssignment
     */
    public const FIELD_TARGET = 'target';

    /**
     * Select specific TermsAndConditionsAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
