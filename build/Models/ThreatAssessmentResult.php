<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentResult
 */
class ThreatAssessmentResult
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The result message for each threat assessment. */
    public ?string $message = null;

    /** 
     * The threat assessment result type. Possible values are: checkPolicy, rescan.
     * @var ThreatAssessmentResultType|\stdClass|null
     */
    public mixed $resultType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['resultType'])) {
            $this->resultType = is_array($data['resultType']) ? new ThreatAssessmentResultType($data['resultType']) : $data['resultType'];
        }
    }
}
