<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentSettings resources
 *
 * Available select fields:
 */
class EducationAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentSettings
     */

    /**
     * Select specific EducationAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
