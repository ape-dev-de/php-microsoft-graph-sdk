<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Community resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - groupId
 * - privacy
 * - group
 * - owners
 */
class CommunityQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_PRIVACY = 'privacy';
    public const FIELD_GROUP = 'group';
    public const FIELD_OWNERS = 'owners';

    /**
     * Select specific Community properties
     * 
     * @param array<string> $select Use CommunityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
