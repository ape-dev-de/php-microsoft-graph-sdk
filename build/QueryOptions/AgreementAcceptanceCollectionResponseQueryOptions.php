<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementAcceptanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AgreementAcceptanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AgreementAcceptanceCollectionResponse properties
     * 
     * @param array<string> $select Use AgreementAcceptanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
