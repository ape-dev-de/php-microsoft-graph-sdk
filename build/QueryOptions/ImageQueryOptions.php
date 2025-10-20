<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Image resources
 *
 * Available select fields:
 * - height
 * - width
 */
class ImageQueryOptions extends QueryOptions
{
    public const FIELD_HEIGHT = 'height';
    public const FIELD_WIDTH = 'width';

    /**
     * Select specific Image properties
     * 
     * @param array<string> $select Use ImageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
