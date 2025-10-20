<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsApp resources
 *
 * Available select fields:
 * - displayName
 * - distributionMethod
 * - externalId
 * - appDefinitions
 */
class TeamsAppQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DISTRIBUTION_METHOD = 'distributionMethod';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_APP_DEFINITIONS = 'appDefinitions';

    /**
     * Select specific TeamsApp properties
     * 
     * @param array<string> $select Use TeamsAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
