<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointIdentitySet
 */
class SharePointIdentitySet
{
    public function __construct(
        /** Optional. The application associated with this action. */
        public ?string $application = null,
        /** Optional. The device associated with this action. */
        public ?string $device = null,
        /** Optional. The user associated with this action. */
        public ?string $user = null,
        /** The group associated with this action. Optional. */
        public ?string $group = null,
        /** The SharePoint group associated with this action. Optional. */
        public ?string $siteGroup = null,
        /** The SharePoint user associated with this action. Optional. */
        public ?string $siteUser = null
    ) {}
}
