<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentType resources
 *
 * Available select fields:
 */
class AttachmentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttachmentType
     */

    /**
     * Select specific AttachmentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
