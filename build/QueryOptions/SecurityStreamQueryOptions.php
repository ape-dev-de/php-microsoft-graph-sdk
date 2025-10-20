<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityStream resources
 *
 * Available select fields:
 * - name
 */
class SecurityStreamQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';

    /**
     * Select specific SecurityStream properties
     * 
     * @param array<string> $select Use SecurityStreamQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
