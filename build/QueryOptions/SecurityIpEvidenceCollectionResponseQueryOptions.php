<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIpEvidenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityIpEvidenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityIpEvidenceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityIpEvidenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
