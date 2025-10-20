<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkTag resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - memberCount
 * - tagType
 * - teamId
 * - members
 */
class TeamworkTagQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MEMBER_COUNT = 'memberCount';
    public const FIELD_TAG_TYPE = 'tagType';
    public const FIELD_TEAM_ID = 'teamId';
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific TeamworkTag properties
     * 
     * @param array<string> $select Use TeamworkTagQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
