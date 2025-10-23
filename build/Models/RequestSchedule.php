<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestSchedule
 */
class RequestSchedule
{
    /** 
     * When the eligible or active assignment expires.
     * @var ExpirationPattern|\stdClass|null
     */
    public mixed $expiration = null;

    /** 
     * The frequency of the  eligible or active assignment. This property is currently unsupported in PIM.
     * @var PatternedRecurrence|\stdClass|null
     */
    public mixed $recurrence = null;

    /** When the  eligible or active assignment becomes active. */
    public ?\DateTimeInterface $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}
