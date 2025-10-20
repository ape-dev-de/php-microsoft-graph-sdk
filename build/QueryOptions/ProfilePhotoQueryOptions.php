<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProfilePhoto resources
 *
 * Available select fields:
 * - height
 * - width
 */
class ProfilePhotoQueryOptions extends QueryOptions
{
    public const FIELD_HEIGHT = 'height';
    public const FIELD_WIDTH = 'width';

    /**
     * Select specific ProfilePhoto properties
     * 
     * @param array<string> $select Use ProfilePhotoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
