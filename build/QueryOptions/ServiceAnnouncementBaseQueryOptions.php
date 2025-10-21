<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAnnouncementBase resources
 *
 * Available select fields:
 */
class ServiceAnnouncementBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceAnnouncementBase
     */

    /**
     * Select specific ServiceAnnouncementBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
