<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsTabConfiguration resources
 *
 * Available select fields:
 * - contentUrl
 * - entityId
 * - removeUrl
 * - websiteUrl
 */
class TeamsTabConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_URL = 'contentUrl';
    public const FIELD_ENTITY_ID = 'entityId';
    public const FIELD_REMOVE_URL = 'removeUrl';
    public const FIELD_WEBSITE_URL = 'websiteUrl';

    /**
     * Select specific TeamsTabConfiguration properties
     * 
     * @param array<string> $select Use TeamsTabConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
