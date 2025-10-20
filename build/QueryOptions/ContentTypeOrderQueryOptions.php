<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentTypeOrder resources
 *
 * Available select fields:
 * - default
 * - position
 */
class ContentTypeOrderQueryOptions extends QueryOptions
{
    public const FIELD_DEFAULT = 'default';
    public const FIELD_POSITION = 'position';

    /**
     * Select specific ContentTypeOrder properties
     * 
     * @param array<string> $select Use ContentTypeOrderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
