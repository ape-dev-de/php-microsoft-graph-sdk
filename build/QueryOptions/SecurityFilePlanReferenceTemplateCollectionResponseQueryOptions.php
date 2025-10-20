<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanReferenceTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityFilePlanReferenceTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityFilePlanReferenceTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityFilePlanReferenceTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
