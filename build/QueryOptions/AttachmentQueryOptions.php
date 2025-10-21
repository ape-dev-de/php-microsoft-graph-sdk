<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Attachment resources
 *
 * Available select fields:
 */
class AttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Attachment
     */

    /**
     * Select specific Attachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
