<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PeopleAdminSettings resources
 *
 * Available select fields:
 * - itemInsights
 * - profileCardProperties
 * - pronouns
 */
class PeopleAdminSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PeopleAdminSettings
     */
    public const FIELD_ITEM_INSIGHTS = 'itemInsights';
    public const FIELD_PROFILE_CARD_PROPERTIES = 'profileCardProperties';
    public const FIELD_PRONOUNS = 'pronouns';

    /**
     * Select specific PeopleAdminSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
