<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppClipboardSharingLevel resources
 *
 * Available select fields:
 */
class ManagedAppClipboardSharingLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppClipboardSharingLevel
     */

    /**
     * Select specific ManagedAppClipboardSharingLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
