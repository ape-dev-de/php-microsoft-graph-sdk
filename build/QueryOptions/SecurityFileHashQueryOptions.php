<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileHash resources
 *
 * Available select fields:
 * - algorithm
 * - value
 */
class SecurityFileHashQueryOptions extends QueryOptions
{
    public const FIELD_ALGORITHM = 'algorithm';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityFileHash properties
     * 
     * @param array<string> $select Use SecurityFileHashQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
