<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGuestsOrExternalUsers
 */
class ConditionalAccessGuestsOrExternalUsers
{
    public function __construct(
        /** The tenant IDs of the selected types of external users. Either all B2B tenant or a collection of tenant IDs. External tenants can be specified only when the property guestOrExternalUserTypes isn't null or an empty String. */
        public ?ConditionalAccessExternalTenants $externalTenants = null,
        /**  */
        public ?ConditionalAccessGuestOrExternalUserTypes $guestOrExternalUserTypes = null
    ) {}
}
