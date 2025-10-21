<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsPhone81GeneralConfiguration resources
 *
 * Available select fields:
 */
class WindowsPhone81GeneralConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsPhone81GeneralConfiguration
     */

    /**
     * Select specific WindowsPhone81GeneralConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
