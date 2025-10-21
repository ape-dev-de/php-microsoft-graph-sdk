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
    /**
     * Available select fields for ContentTypeOrder
     */
    public const FIELD_DEFAULT = 'default';
    public const FIELD_POSITION = 'position';

    /**
     * Select specific ContentTypeOrder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
