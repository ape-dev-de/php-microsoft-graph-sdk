<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReflectCheckInResponse
 */
class ReflectCheckInResponse
{
    /**
     * Identifier for the Reflect check-in.
     */
    private ?string $checkInId;

    /**
     * The question or prompt of the Reflect check-in that this response addresses.
     */
    private ?string $checkInTitle;

    /**
     * ID of the class associated with the Reflect check-in.
     */
    private ?string $classId;

    /**
     * Date and time when the Reflect check-in was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * ID of the user who created the Reflect check-in.
     */
    private ?string $creatorId;

    /**
     * Indicates whether the Reflect check-in is closed (true) or open (false).
     */
    private ?bool $isClosed;

    /**
     * ID of the user who responded to the Reflect check-in.
     */
    private ?string $responderId;

    /**
     */
    private ?string $responseEmotion;

    /**
     */
    private ?string $responseFeedback;

    /**
     * Date and time when the response to the Reflect check-in was submitted. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $submitDateTime;


    public function getCheckInId(): ?string
    {
        return $this->checkInId;
    }

    public function setCheckInId(?string $checkInId): self
    {
        $this->checkInId = $checkInId;
        return $this;
    }

    public function getCheckInTitle(): ?string
    {
        return $this->checkInTitle;
    }

    public function setCheckInTitle(?string $checkInTitle): self
    {
        $this->checkInTitle = $checkInTitle;
        return $this;
    }

    public function getClassId(): ?string
    {
        return $this->classId;
    }

    public function setClassId(?string $classId): self
    {
        $this->classId = $classId;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getCreatorId(): ?string
    {
        return $this->creatorId;
    }

    public function setCreatorId(?string $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }

    public function getIsClosed(): ?bool
    {
        return $this->isClosed;
    }

    public function setIsClosed(?bool $isClosed): self
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    public function getResponderId(): ?string
    {
        return $this->responderId;
    }

    public function setResponderId(?string $responderId): self
    {
        $this->responderId = $responderId;
        return $this;
    }

    public function getResponseEmotion(): ?string
    {
        return $this->responseEmotion;
    }

    public function setResponseEmotion(?string $responseEmotion): self
    {
        $this->responseEmotion = $responseEmotion;
        return $this;
    }

    public function getResponseFeedback(): ?string
    {
        return $this->responseFeedback;
    }

    public function setResponseFeedback(?string $responseFeedback): self
    {
        $this->responseFeedback = $responseFeedback;
        return $this;
    }

    public function getSubmitDateTime(): ?\DateTimeInterface
    {
        return $this->submitDateTime;
    }

    public function setSubmitDateTime(?\DateTimeInterface $submitDateTime): self
    {
        $this->submitDateTime = $submitDateTime;
        return $this;
    }

}
