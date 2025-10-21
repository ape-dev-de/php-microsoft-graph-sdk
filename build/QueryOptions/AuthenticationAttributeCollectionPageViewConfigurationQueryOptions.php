<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationAttributeCollectionPageViewConfiguration resources
 *
 * Available select fields:
 * - description
 * - inputs
 * - title
 */
class AuthenticationAttributeCollectionPageViewConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationAttributeCollectionPageViewConfiguration
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_INPUTS = 'inputs';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific AuthenticationAttributeCollectionPageViewConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
