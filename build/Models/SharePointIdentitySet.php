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
        public ?Identity $application = null,
        /** Optional. The device associated with this action. */
        public ?Identity $device = null,
        /** Optional. The user associated with this action. */
        public ?Identity $user = null,
        /** The group associated with this action. Optional. */
        public ?Identity $group = null,
        /** The SharePoint group associated with this action. Optional. */
        public ?SharePointIdentity $siteGroup = null,
        /** The SharePoint user associated with this action. Optional. */
        public ?SharePointIdentity $siteUser = null
    ) {}
}
