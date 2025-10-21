<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10TeamGeneralConfiguration resources
 *
 * Available select fields:
 */
class Windows10TeamGeneralConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10TeamGeneralConfiguration
     */

    /**
     * Select specific Windows10TeamGeneralConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
