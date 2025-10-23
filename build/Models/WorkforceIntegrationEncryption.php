<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegrationEncryption
 */
class WorkforceIntegrationEncryption
{
    /** 
     * Possible values are: sharedSecret, unknownFutureValue.
     * @var WorkforceIntegrationEncryptionProtocol|\stdClass|null
     */
    public mixed $protocol = null;

    /** Encryption shared secret. */
    public ?string $secret = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['protocol'])) {
            $this->protocol = is_array($data['protocol']) ? new WorkforceIntegrationEncryptionProtocol($data['protocol']) : $data['protocol'];
        }
        if (isset($data['secret'])) {
            $this->secret = $data['secret'];
        }
    }
}
