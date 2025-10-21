<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OAuthConsentAppDetail
 */
class OAuthConsentAppDetail
{
    public function __construct(
        /** App scope. Possible values are: unknown, readCalendar, readContact, readMail, readAllChat, readAllFile, readAndWriteMail, sendMail, unknownFutureValue. */
        public ?OAuthAppScope $appScope = null,
        /** App display logo. */
        public ?string $displayLogo = null,
        /** App name. */
        public ?string $displayName = null
    ) {}
}
