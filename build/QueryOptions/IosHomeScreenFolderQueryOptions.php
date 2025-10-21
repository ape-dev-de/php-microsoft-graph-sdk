<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenFolder resources
 *
 * Available select fields:
 */
class IosHomeScreenFolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosHomeScreenFolder
     */

    /**
     * Select specific IosHomeScreenFolder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
