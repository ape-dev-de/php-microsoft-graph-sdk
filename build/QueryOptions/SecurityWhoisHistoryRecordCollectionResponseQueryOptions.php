<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisHistoryRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityWhoisHistoryRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityWhoisHistoryRecordCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityWhoisHistoryRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
