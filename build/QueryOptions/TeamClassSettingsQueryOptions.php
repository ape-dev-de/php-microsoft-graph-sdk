<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamClassSettings resources
 *
 * Available select fields:
 * - notifyGuardiansAboutAssignments
 */
class TeamClassSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamClassSettings
     */
    public const FIELD_NOTIFY_GUARDIANS_ABOUT_ASSIGNMENTS = 'notifyGuardiansAboutAssignments';

    /**
     * Select specific TeamClassSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
