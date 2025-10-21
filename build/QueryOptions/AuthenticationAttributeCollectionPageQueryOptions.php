<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationAttributeCollectionPage resources
 *
 * Available select fields:
 * - views
 */
class AuthenticationAttributeCollectionPageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationAttributeCollectionPage
     */
    public const FIELD_VIEWS = 'views';

    /**
     * Select specific AuthenticationAttributeCollectionPage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
