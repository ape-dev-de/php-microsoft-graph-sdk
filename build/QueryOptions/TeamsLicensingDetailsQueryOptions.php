<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsLicensingDetails resources
 *
 * Available select fields:
 * - hasTeamsLicense
 */
class TeamsLicensingDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsLicensingDetails
     */
    public const FIELD_HAS_TEAMS_LICENSE = 'hasTeamsLicense';

    /**
     * Select specific TeamsLicensingDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
