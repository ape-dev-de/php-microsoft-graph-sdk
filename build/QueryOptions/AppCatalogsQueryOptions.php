<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppCatalogs resources
 *
 * Available select fields:
 * - teamsApps
 */
class AppCatalogsQueryOptions extends QueryOptions
{
    public const FIELD_TEAMS_APPS = 'teamsApps';

    /**
     * Select specific AppCatalogs properties
     * 
     * @param array<string> $select Use AppCatalogsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
