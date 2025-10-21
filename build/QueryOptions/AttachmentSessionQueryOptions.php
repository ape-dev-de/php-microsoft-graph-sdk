<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentSession resources
 *
 * Available select fields:
 */
class AttachmentSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttachmentSession
     */

    /**
     * Select specific AttachmentSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
