<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionEventTypeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityRetentionEventTypeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityRetentionEventTypeCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityRetentionEventTypeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
