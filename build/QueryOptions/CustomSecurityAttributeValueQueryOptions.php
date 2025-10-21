<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomSecurityAttributeValue resources
 *
 * Available select fields:
 */
class CustomSecurityAttributeValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomSecurityAttributeValue
     */

    /**
     * Select specific CustomSecurityAttributeValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
