<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalActivityResult
 */
class ExternalConnectorsExternalActivityResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when the particular activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $startDateTime = null;

    /**  */
    public ?ExternalConnectorsExternalActivityType $type = null;

    /** 
     * Represents an identity used to identify who is responsible for the activity.
     * @var ExternalConnectorsIdentity|\stdClass|null
     */
    public ExternalConnectorsIdentity|\stdClass|null $performedBy = null;

    /** 
     * Error information that explains the failure to process an external activity.
     * @var PublicError|\stdClass|null
     */
    public PublicError|\stdClass|null $error = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new ExternalConnectorsExternalActivityType($data['type']) : $data['type'];
        }
        if (isset($data['performedBy'])) {
            $this->performedBy = is_array($data['performedBy']) ? new ExternalConnectorsIdentity($data['performedBy']) : $data['performedBy'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
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
