<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScopeBase resources
 *
 * Available select fields:
 * - identity
 */
class ScopeBaseQueryOptions extends QueryOptions
{
    public const FIELD_IDENTITY = 'identity';

    /**
     * Select specific ScopeBase properties
     * 
     * @param array<string> $select Use ScopeBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
