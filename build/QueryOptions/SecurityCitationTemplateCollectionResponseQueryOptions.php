<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCitationTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityCitationTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityCitationTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityCitationTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
