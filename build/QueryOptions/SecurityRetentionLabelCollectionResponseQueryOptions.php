<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionLabelCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityRetentionLabelCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityRetentionLabelCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityRetentionLabelCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
