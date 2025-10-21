<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileAttachment resources
 *
 * Available select fields:
 */
class FileAttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileAttachment
     */

    /**
     * Select specific FileAttachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
