<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OneDriveForBusinessRestoreSession resources
 *
 * Available select fields:
 */
class OneDriveForBusinessRestoreSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OneDriveForBusinessRestoreSession
     */

    /**
     * Select specific OneDriveForBusinessRestoreSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
