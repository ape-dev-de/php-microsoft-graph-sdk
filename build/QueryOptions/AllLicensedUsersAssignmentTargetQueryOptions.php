<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllLicensedUsersAssignmentTarget resources
 *
 * Available select fields:
 */
class AllLicensedUsersAssignmentTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllLicensedUsersAssignmentTarget
     */

    /**
     * Select specific AllLicensedUsersAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
