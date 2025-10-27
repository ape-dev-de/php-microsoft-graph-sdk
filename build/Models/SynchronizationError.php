<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationError
 */
class SynchronizationError
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The error code. For example, AzureDirectoryB2BManagementPolicyCheckFailure. */
    public ?string $code = null;

    /** The error message. For example, Policy permitting auto-redemption of invitations not configured. */
    public ?string $message = null;

    /** The action to take to resolve the error. For example, false. */
    public ?bool $tenantActionable = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['tenantActionable'])) {
            $this->tenantActionable = $data['tenantActionable'];
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
