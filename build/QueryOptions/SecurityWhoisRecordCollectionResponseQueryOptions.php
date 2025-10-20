<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityWhoisRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityWhoisRecordCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityWhoisRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
