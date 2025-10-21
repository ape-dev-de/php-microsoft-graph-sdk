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
    /**
     * Available select fields for ScopeBase
     */
    public const FIELD_IDENTITY = 'identity';

    /**
     * Select specific ScopeBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
