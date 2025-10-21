<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomSecurityAttributeDefinition resources
 *
 * Available select fields:
 */
class CustomSecurityAttributeDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomSecurityAttributeDefinition
     */

    /**
     * Select specific CustomSecurityAttributeDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
