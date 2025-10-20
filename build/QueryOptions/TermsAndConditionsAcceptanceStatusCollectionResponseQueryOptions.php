<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsAndConditionsAcceptanceStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermsAndConditionsAcceptanceStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermsAndConditionsAcceptanceStatusCollectionResponse properties
     * 
     * @param array<string> $select Use TermsAndConditionsAcceptanceStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
