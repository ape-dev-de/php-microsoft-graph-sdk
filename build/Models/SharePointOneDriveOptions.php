<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointOneDriveOptions
 */
class SharePointOneDriveOptions
{
    public function __construct(
        /** The type of search content. The possible values are: sharedContent, privateContent, unknownFutureValue. Read-only. */
        public ?string $includeContent = null
    ) {}
}
