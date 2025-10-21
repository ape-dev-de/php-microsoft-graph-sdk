<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageSecurityState
 */
class MessageSecurityState
{
    public function __construct(
        /**  */
        public ?string $connectingIP = null,
        /**  */
        public ?string $deliveryAction = null,
        /**  */
        public ?string $deliveryLocation = null,
        /**  */
        public ?string $directionality = null,
        /**  */
        public ?string $internetMessageId = null,
        /**  */
        public ?string $messageFingerprint = null,
        /**  */
        public ?\DateTimeInterface $messageReceivedDateTime = null,
        /**  */
        public ?string $messageSubject = null,
        /**  */
        public ?string $networkMessageId = null
    ) {}
}
