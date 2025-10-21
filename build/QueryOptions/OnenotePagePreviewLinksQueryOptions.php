<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenotePagePreviewLinks resources
 *
 * Available select fields:
 * - previewImageUrl
 */
class OnenotePagePreviewLinksQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenotePagePreviewLinks
     */
    public const FIELD_PREVIEW_IMAGE_URL = 'previewImageUrl';

    /**
     * Select specific OnenotePagePreviewLinks properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
