<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAnnouncementAttachment resources
 *
 * Available select fields:
 */
class ServiceAnnouncementAttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceAnnouncementAttachment
     */

    /**
     * Select specific ServiceAnnouncementAttachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
