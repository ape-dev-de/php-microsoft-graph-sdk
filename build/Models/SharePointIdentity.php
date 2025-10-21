<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointIdentity
 */
class SharePointIdentity
{
    public function __construct(
        /** The sign in name of the SharePoint identity. */
        public ?string $loginName = null
    ) {}
}
