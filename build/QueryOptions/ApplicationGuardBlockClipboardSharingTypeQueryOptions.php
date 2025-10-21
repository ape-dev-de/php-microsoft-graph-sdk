<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationGuardBlockClipboardSharingType resources
 *
 * Available select fields:
 */
class ApplicationGuardBlockClipboardSharingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApplicationGuardBlockClipboardSharingType
     */

    /**
     * Select specific ApplicationGuardBlockClipboardSharingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
