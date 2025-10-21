<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InstallIntent resources
 *
 * Available select fields:
 */
class InstallIntentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InstallIntent
     */

    /**
     * Select specific InstallIntent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
