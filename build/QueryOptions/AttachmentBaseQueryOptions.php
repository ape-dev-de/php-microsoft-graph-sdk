<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentBase resources
 *
 * Available select fields:
 */
class AttachmentBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttachmentBase
     */

    /**
     * Select specific AttachmentBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
