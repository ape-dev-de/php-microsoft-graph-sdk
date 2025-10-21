<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthoredNote resources
 *
 * Available select fields:
 */
class AuthoredNoteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthoredNote
     */

    /**
     * Select specific AuthoredNote properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
