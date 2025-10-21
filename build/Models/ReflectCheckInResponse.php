<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReflectCheckInResponse
 */
class ReflectCheckInResponse
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifier for the Reflect check-in. */
        public ?string $checkInId = null,
        /** The question or prompt of the Reflect check-in that this response addresses. */
        public ?string $checkInTitle = null,
        /** ID of the class associated with the Reflect check-in. */
        public ?string $classId = null,
        /** Date and time when the Reflect check-in was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** ID of the user who created the Reflect check-in. */
        public ?string $creatorId = null,
        /** Indicates whether the Reflect check-in is closed (true) or open (false). */
        public ?bool $isClosed = null,
        /** ID of the user who responded to the Reflect check-in. */
        public ?string $responderId = null,
        /**  */
        public ?ResponseEmotionType $responseEmotion = null,
        /**  */
        public ?ResponseFeedbackType $responseFeedback = null,
        /** Date and time when the response to the Reflect check-in was submitted. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $submitDateTime = null
    ) {}
}
