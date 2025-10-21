<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReferenceAttachment resources
 *
 * Available select fields:
 */
class ReferenceAttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReferenceAttachment
     */

    /**
     * Select specific ReferenceAttachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
