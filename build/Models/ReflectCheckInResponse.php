<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReflectCheckInResponse
 */
class ReflectCheckInResponse
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Identifier for the Reflect check-in. */
    public ?string $checkInId = null;

    /** The question or prompt of the Reflect check-in that this response addresses. */
    public ?string $checkInTitle = null;

    /** ID of the class associated with the Reflect check-in. */
    public ?string $classId = null;

    /** Date and time when the Reflect check-in was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** ID of the user who created the Reflect check-in. */
    public ?string $creatorId = null;

    /** Indicates whether the Reflect check-in is closed (true) or open (false). */
    public ?bool $isClosed = null;

    /** ID of the user who responded to the Reflect check-in. */
    public ?string $responderId = null;

    /**  */
    public ?ResponseEmotionType $responseEmotion = null;

    /**  */
    public ?ResponseFeedbackType $responseFeedback = null;

    /** Date and time when the response to the Reflect check-in was submitted. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $submitDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['checkInId'])) {
            $this->checkInId = $data['checkInId'];
        }
        if (isset($data['checkInTitle'])) {
            $this->checkInTitle = $data['checkInTitle'];
        }
        if (isset($data['classId'])) {
            $this->classId = $data['classId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['creatorId'])) {
            $this->creatorId = $data['creatorId'];
        }
        if (isset($data['isClosed'])) {
            $this->isClosed = $data['isClosed'];
        }
        if (isset($data['responderId'])) {
            $this->responderId = $data['responderId'];
        }
        if (isset($data['responseEmotion'])) {
            $this->responseEmotion = $data['responseEmotion'];
        }
        if (isset($data['responseFeedback'])) {
            $this->responseFeedback = $data['responseFeedback'];
        }
        if (isset($data['submitDateTime'])) {
            $this->submitDateTime = is_string($data['submitDateTime']) ? new \DateTimeImmutable($data['submitDateTime']) : $data['submitDateTime'];
        }
    }
}
