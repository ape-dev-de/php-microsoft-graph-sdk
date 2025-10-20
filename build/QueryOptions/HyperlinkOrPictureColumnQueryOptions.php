<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HyperlinkOrPictureColumn resources
 *
 * Available select fields:
 * - isPicture
 */
class HyperlinkOrPictureColumnQueryOptions extends QueryOptions
{
    public const FIELD_IS_PICTURE = 'isPicture';

    /**
     * Select specific HyperlinkOrPictureColumn properties
     * 
     * @param array<string> $select Use HyperlinkOrPictureColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
