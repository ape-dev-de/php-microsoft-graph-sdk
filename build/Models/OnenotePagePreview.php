<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePagePreview
 */
class OnenotePagePreview
{
    public function __construct(
        /**  */
        public ?OnenotePagePreviewLinks $links = null,
        /**  */
        public ?string $previewText = null
    ) {}
}
