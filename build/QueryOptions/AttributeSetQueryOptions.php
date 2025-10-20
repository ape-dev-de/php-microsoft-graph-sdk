<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeSet resources
 *
 * Available select fields:
 * - description
 * - maxAttributesPerSet
 */
class AttributeSetQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_MAX_ATTRIBUTES_PER_SET = 'maxAttributesPerSet';

    /**
     * Select specific AttributeSet properties
     * 
     * @param array<string> $select Use AttributeSetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
