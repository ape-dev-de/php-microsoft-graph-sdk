<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DlpAction resources
 *
 * Available select fields:
 */
class DlpActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DlpAction
     */

    /**
     * Select specific DlpAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
