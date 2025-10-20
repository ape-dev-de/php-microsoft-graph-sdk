<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessSessionControl resources
 *
 * Available select fields:
 * - isEnabled
 */
class ConditionalAccessSessionControlQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific ConditionalAccessSessionControl properties
     * 
     * @param array<string> $select Use ConditionalAccessSessionControlQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
