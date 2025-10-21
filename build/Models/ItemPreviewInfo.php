<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemPreviewInfo
 */
class ItemPreviewInfo
{
    public function __construct(
        /**  */
        public ?string $getUrl = null,
        /**  */
        public ?string $postParameters = null,
        /**  */
        public ?string $postUrl = null
    ) {}
}
