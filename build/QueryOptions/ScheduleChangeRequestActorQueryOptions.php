<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleChangeRequestActor resources
 *
 * Available select fields:
 */
class ScheduleChangeRequestActorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScheduleChangeRequestActor
     */

    /**
     * Select specific ScheduleChangeRequestActor properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
