<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenter
 */
class VirtualEventPresenter
{
    public function __construct(
        /** Email address of the presenter. */
        public ?string $email = null,
        /** Identity information of the presenter. The supported identities are: communicationsGuestIdentity and communicationsUserIdentity. */
        public ?string $identity = null,
        /** Other details about the presenter. This property returns null when the virtual event type is virtualEventTownhall. */
        public ?string $presenterDetails = null
    ) {}
}
