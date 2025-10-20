<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNicEvidenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityNicEvidenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityNicEvidenceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityNicEvidenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
