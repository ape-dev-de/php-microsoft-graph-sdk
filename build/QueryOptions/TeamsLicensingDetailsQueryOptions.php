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
    public const FIELD_HAS_TEAMS_LICENSE = 'hasTeamsLicense';

    /**
     * Select specific TeamsLicensingDetails properties
     * 
     * @param array<string> $select Use TeamsLicensingDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
