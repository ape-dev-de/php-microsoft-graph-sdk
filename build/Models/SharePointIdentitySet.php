<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointIdentitySet
 */
class SharePointIdentitySet
{
    public function __construct(
        /** The group associated with this action. Optional. */
        public ?string $group = null,
        /** The SharePoint group associated with this action. Optional. */
        public ?string $siteGroup = null,
        /** The SharePoint user associated with this action. Optional. */
        public ?string $siteUser = null
    ) {}
}
