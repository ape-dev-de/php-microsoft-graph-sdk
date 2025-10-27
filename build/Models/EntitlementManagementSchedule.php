<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagementSchedule
 */
class EntitlementManagementSchedule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * When the access should expire.
     * @var ExpirationPattern|\stdClass|null
     */
    public mixed $expiration = null;

    /** 
     * The recurring access review pattern. Not used in access requests.
     * @var PatternedRecurrence|\stdClass|null
     */
    public mixed $recurrence = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['expiration'])) {
            $this->expiration = is_array($data['expiration']) ? new ExpirationPattern($data['expiration']) : $data['expiration'];
        }
        if (isset($data['recurrence'])) {
            $this->recurrence = is_array($data['recurrence']) ? new PatternedRecurrence($data['recurrence']) : $data['recurrence'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
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
