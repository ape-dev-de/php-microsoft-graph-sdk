<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContactFolder resources
 *
 * Available select fields:
 */
class ContactFolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContactFolder
     */

    /**
     * Select specific ContactFolder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
