<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsAndConditionsAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermsAndConditionsAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermsAndConditionsAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use TermsAndConditionsAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
