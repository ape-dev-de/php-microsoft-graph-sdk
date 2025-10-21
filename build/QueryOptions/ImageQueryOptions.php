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
    /**
     * Available select fields for Image
     */
    public const FIELD_HEIGHT = 'height';
    public const FIELD_WIDTH = 'width';

    /**
     * Select specific Image properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
