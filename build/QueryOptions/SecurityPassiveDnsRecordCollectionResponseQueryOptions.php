<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityPassiveDnsRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityPassiveDnsRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityPassiveDnsRecordCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityPassiveDnsRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
