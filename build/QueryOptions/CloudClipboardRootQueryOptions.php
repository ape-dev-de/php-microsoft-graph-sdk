<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudClipboardRoot resources
 *
 * Available select fields:
 */
class CloudClipboardRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudClipboardRoot
     */

    /**
     * Select specific CloudClipboardRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
