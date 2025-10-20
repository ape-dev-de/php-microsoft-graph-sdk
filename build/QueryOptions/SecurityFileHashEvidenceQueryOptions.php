<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileHashEvidence resources
 *
 * Available select fields:
 * - algorithm
 * - value
 */
class SecurityFileHashEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_ALGORITHM = 'algorithm';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityFileHashEvidence properties
     * 
     * @param array<string> $select Use SecurityFileHashEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
