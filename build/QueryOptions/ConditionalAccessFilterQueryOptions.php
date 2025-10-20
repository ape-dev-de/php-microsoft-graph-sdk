<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessFilter resources
 *
 * Available select fields:
 * - mode
 * - rule
 */
class ConditionalAccessFilterQueryOptions extends QueryOptions
{
    public const FIELD_MODE = 'mode';
    public const FIELD_RULE = 'rule';

    /**
     * Select specific ConditionalAccessFilter properties
     * 
     * @param array<string> $select Use ConditionalAccessFilterQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
