<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileEvidenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityFileEvidenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityFileEvidenceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityFileEvidenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
