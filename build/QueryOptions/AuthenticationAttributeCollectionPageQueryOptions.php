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
    public const FIELD_VIEWS = 'views';

    /**
     * Select specific AuthenticationAttributeCollectionPage properties
     * 
     * @param array<string> $select Use AuthenticationAttributeCollectionPageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
