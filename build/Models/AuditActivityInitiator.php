<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditActivityInitiator
 */
class AuditActivityInitiator
{
    public function __construct(
        /** If the resource initiating the activity is an app, this property indicates all the app related information like appId and name. */
        public ?AppIdentity $app = null,
        /** If the resource initiating the activity is a user, this property Indicates all the user related information like user ID and userPrincipalName. */
        public ?UserIdentity $user = null
    ) {}
}
