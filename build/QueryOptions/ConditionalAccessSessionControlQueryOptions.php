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
    /**
     * Available select fields for ConditionalAccessSessionControl
     */
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific ConditionalAccessSessionControl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
