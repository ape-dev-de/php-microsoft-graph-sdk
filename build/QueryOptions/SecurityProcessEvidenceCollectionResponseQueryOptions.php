<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityProcessEvidenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityProcessEvidenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityProcessEvidenceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityProcessEvidenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
