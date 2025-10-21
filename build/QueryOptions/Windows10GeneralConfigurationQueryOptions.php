<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10GeneralConfiguration resources
 *
 * Available select fields:
 */
class Windows10GeneralConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10GeneralConfiguration
     */

    /**
     * Select specific Windows10GeneralConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
