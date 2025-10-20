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
    public const FIELD_ITEM_INSIGHTS = 'itemInsights';
    public const FIELD_PROFILE_CARD_PROPERTIES = 'profileCardProperties';
    public const FIELD_PRONOUNS = 'pronouns';

    /**
     * Select specific PeopleAdminSettings properties
     * 
     * @param array<string> $select Use PeopleAdminSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
