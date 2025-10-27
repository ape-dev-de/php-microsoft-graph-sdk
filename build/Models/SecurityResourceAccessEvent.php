<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResourceAccessEvent
 */
class SecurityResourceAccessEvent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The time of the access event. */
    public ?\DateTimeInterface $accessDateTime = null;

    /** The identifier of the user account. */
    public ?string $accountId = null;

    /** IP address of the resource. */
    public ?string $ipAddress = null;

    /** The protocol and host name pairs describing the connection. */
    public ?string $resourceIdentifier = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accessDateTime'])) {
            $this->accessDateTime = is_string($data['accessDateTime']) ? new \DateTimeImmutable($data['accessDateTime']) : $data['accessDateTime'];
        }
        if (isset($data['accountId'])) {
            $this->accountId = $data['accountId'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['resourceIdentifier'])) {
            $this->resourceIdentifier = $data['resourceIdentifier'];
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
