<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OfferShiftRequest
 */
class OfferShiftRequest
{
    public function __construct(
        /** The date and time when the recipient approved or declined the request. */
        public ?\DateTimeInterface $recipientActionDateTime = null,
        /** The message sent by the recipient regarding the request. */
        public ?string $recipientActionMessage = null,
        /** The recipient's user ID. */
        public ?string $recipientUserId = null,
        /** The sender's shift ID. */
        public ?string $senderShiftId = null
    ) {}
}
