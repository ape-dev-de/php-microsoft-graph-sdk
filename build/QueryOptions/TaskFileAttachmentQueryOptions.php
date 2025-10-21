<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TaskFileAttachment resources
 *
 * Available select fields:
 */
class TaskFileAttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TaskFileAttachment
     */

    /**
     * Select specific TaskFileAttachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
