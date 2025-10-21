<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudClipboardItem resources
 *
 * Available select fields:
 */
class CloudClipboardItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudClipboardItem
     */

    /**
     * Select specific CloudClipboardItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
