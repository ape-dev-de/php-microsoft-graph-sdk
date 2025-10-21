<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAnnouncement resources
 *
 * Available select fields:
 */
class ServiceAnnouncementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceAnnouncement
     */

    /**
     * Select specific ServiceAnnouncement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
