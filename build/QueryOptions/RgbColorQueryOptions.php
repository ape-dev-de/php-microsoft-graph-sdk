<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RgbColor resources
 *
 * Available select fields:
 * - b
 * - g
 * - r
 */
class RgbColorQueryOptions extends QueryOptions
{
    public const FIELD_B = 'b';
    public const FIELD_G = 'g';
    public const FIELD_R = 'r';

    /**
     * Select specific RgbColor properties
     * 
     * @param array<string> $select Use RgbColorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
