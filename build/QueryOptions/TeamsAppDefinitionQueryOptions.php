<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppDefinition resources
 *
 * Available select fields:
 * - authorization
 * - createdBy
 * - description
 * - displayName
 * - lastModifiedDateTime
 * - publishingState
 * - shortDescription
 * - teamsAppId
 * - version
 * - bot
 */
class TeamsAppDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppDefinition
     */
    public const FIELD_AUTHORIZATION = 'authorization';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PUBLISHING_STATE = 'publishingState';
    public const FIELD_SHORT_DESCRIPTION = 'shortDescription';
    public const FIELD_TEAMS_APP_ID = 'teamsAppId';
    public const FIELD_VERSION = 'version';
    public const FIELD_BOT = 'bot';

    /**
     * Select specific TeamsAppDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
