<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestSchedule
 */
class RequestSchedule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * When the eligible or active assignment expires.
     * @var ExpirationPattern|\stdClass|null
     */
    public ExpirationPattern|\stdClass|null $expiration = null;

    /** 
     * The frequency of the  eligible or active assignment. This property is currently unsupported in PIM.
     * @var PatternedRecurrence|\stdClass|null
     */
    public PatternedRecurrence|\stdClass|null $recurrence = null;

    /** When the  eligible or active assignment becomes active. */
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
