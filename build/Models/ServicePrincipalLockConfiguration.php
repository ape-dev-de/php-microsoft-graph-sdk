<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalLockConfiguration
 */
class ServicePrincipalLockConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Enables locking all sensitive properties. The sensitive properties are keyCredentials, passwordCredentials, and tokenEncryptionKeyId. */
    public ?bool $allProperties = null;

    /** Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Sign. */
    public ?bool $credentialsWithUsageSign = null;

    /** Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Verify. This locks OAuth service principals. */
    public ?bool $credentialsWithUsageVerify = null;

    /** Enables or disables service principal lock configuration. To allow the sensitive properties to be updated, update this property to false to disable the lock on the service principal. */
    public ?bool $isEnabled = null;

    /** Locks the tokenEncryptionKeyId property for modification on the service principal. */
    public ?bool $tokenEncryptionKeyId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allProperties'])) {
            $this->allProperties = is_bool($data['allProperties']) ? $data['allProperties'] : (bool)$data['allProperties'];
        }
        if (isset($data['credentialsWithUsageSign'])) {
            $this->credentialsWithUsageSign = is_bool($data['credentialsWithUsageSign']) ? $data['credentialsWithUsageSign'] : (bool)$data['credentialsWithUsageSign'];
        }
        if (isset($data['credentialsWithUsageVerify'])) {
            $this->credentialsWithUsageVerify = is_bool($data['credentialsWithUsageVerify']) ? $data['credentialsWithUsageVerify'] : (bool)$data['credentialsWithUsageVerify'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['tokenEncryptionKeyId'])) {
            $this->tokenEncryptionKeyId = is_bool($data['tokenEncryptionKeyId']) ? $data['tokenEncryptionKeyId'] : (bool)$data['tokenEncryptionKeyId'];
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
