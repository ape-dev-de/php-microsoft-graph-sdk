<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCaseOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityCaseOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityCaseOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityCaseOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
