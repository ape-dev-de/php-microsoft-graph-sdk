<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseSitePage
 */
class BaseSitePage
{
    public function __construct(
        /** The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue. */
        public ?string $pageLayout = null,
        /** The publishing status and the MM.mm version of the page. */
        public ?string $publishingState = null,
        /** Title of the sitePage. */
        public ?string $title = null
    ) {}
}
