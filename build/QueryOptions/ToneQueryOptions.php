<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Tone resources
 *
 * Available select fields:
 */
class ToneQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Tone
     */

    /**
     * Select specific Tone properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
