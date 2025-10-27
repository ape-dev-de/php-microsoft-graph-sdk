<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegrationEncryption
 */
class WorkforceIntegrationEncryption
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Possible values are: sharedSecret, unknownFutureValue.
     * @var WorkforceIntegrationEncryptionProtocol|\stdClass|null
     */
    public WorkforceIntegrationEncryptionProtocol|\stdClass|null $protocol = null;

    /** Encryption shared secret. */
    public ?string $secret = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['protocol'])) {
            $this->protocol = is_array($data['protocol']) ? new WorkforceIntegrationEncryptionProtocol($data['protocol']) : $data['protocol'];
        }
        if (isset($data['secret'])) {
            $this->secret = $data['secret'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
