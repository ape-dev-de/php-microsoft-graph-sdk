<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyBinding resources
 *
 * Available select fields:
 * - exclusions
 * - inclusions
 */
class PolicyBindingQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUSIONS = 'exclusions';
    public const FIELD_INCLUSIONS = 'inclusions';

    /**
     * Select specific PolicyBinding properties
     * 
     * @param array<string> $select Use PolicyBindingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
