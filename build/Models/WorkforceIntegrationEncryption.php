<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegrationEncryption
 */
class WorkforceIntegrationEncryption
{
    public function __construct(
        /** Possible values are: sharedSecret, unknownFutureValue. */
        public ?WorkforceIntegrationEncryptionProtocol $protocol = null,
        /** Encryption shared secret. */
        public ?string $secret = null
    ) {}
}
