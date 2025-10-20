<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VerifiedDomainCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VerifiedDomainCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VerifiedDomainCollectionResponse properties
     * 
     * @param array<string> $select Use VerifiedDomainCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
