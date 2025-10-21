<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointRestoreSession resources
 *
 * Available select fields:
 */
class SharePointRestoreSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharePointRestoreSession
     */

    /**
     * Select specific SharePointRestoreSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
