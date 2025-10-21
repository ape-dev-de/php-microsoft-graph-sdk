<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSolutionRoot resources
 *
 * Available select fields:
 * - workingTimeSchedule
 */
class UserSolutionRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSolutionRoot
     */
    public const FIELD_WORKING_TIME_SCHEDULE = 'workingTimeSchedule';

    /**
     * Select specific UserSolutionRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
