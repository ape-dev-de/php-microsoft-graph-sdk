<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionEventCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityRetentionEventCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityRetentionEventCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityRetentionEventCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
