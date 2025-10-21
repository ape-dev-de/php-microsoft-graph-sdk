<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailPayloadDetail
 */
class EmailPayloadDetail
{
    public function __construct(
        /**  */
        public array $coachmarks = [],
        /** Payload content details. */
        public ?string $content = null,
        /** The phishing URL used to target a user. */
        public ?string $phishingUrl = null,
        /** Email address of the user. */
        public ?string $fromEmail = null,
        /** Display name of the user. */
        public ?string $fromName = null,
        /** Indicates whether the sender isn't from the user's organization. */
        public ?bool $isExternalSender = null,
        /** The subject of the email address sent to the user. */
        public ?string $subject = null
    ) {}
}
