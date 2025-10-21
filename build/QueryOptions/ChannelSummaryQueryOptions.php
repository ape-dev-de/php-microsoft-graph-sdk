<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelSummary resources
 *
 * Available select fields:
 * - guestsCount
 * - hasMembersFromOtherTenants
 * - membersCount
 * - ownersCount
 */
class ChannelSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelSummary
     */
    public const FIELD_GUESTS_COUNT = 'guestsCount';
    public const FIELD_HAS_MEMBERS_FROM_OTHER_TENANTS = 'hasMembersFromOtherTenants';
    public const FIELD_MEMBERS_COUNT = 'membersCount';
    public const FIELD_OWNERS_COUNT = 'ownersCount';

    /**
     * Select specific ChannelSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
