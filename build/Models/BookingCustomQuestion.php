<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomQuestion
 */
class BookingCustomQuestion
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     * @var AnswerInputType|\stdClass|null
     */
    public mixed $answerInputType = null;

    /** 
     * List of possible answer values.
     * @var string[]
     */
    public array $answerOptions = [];

    /** The date, time, and time zone when the custom question was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The question. */
    public ?string $displayName = null;

    /** The date, time, and time zone when the custom question was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['answerInputType'])) {
            $this->answerInputType = is_array($data['answerInputType']) ? new AnswerInputType($data['answerInputType']) : $data['answerInputType'];
        }
        if (isset($data['answerOptions'])) {
            $this->answerOptions = $data['answerOptions'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
    }
}
