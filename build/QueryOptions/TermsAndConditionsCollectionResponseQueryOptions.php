<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsAndConditionsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermsAndConditionsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermsAndConditionsCollectionResponse properties
     * 
     * @param array<string> $select Use TermsAndConditionsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
