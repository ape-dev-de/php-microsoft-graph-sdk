<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserTeamwork resources
 *
 * Available select fields:
 * - locale
 * - region
 * - associatedTeams
 * - installedApps
 */
class UserTeamworkQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserTeamwork
     */
    public const FIELD_LOCALE = 'locale';
    public const FIELD_REGION = 'region';
    public const FIELD_ASSOCIATED_TEAMS = 'associatedTeams';
    public const FIELD_INSTALLED_APPS = 'installedApps';

    /**
     * Select specific UserTeamwork properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
