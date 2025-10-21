<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityHistoryItem
 */
class ActivityHistoryItem
{
    /**
     * Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime.
     */
    private ?float $activeDurationSeconds;

    /**
     * Set by the server. DateTime in UTC when the object was created on the server.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Optional. UTC DateTime when the activityHistoryItem will undergo hard-delete. Can be set by the client.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Optional. UTC DateTime when the activityHistoryItem (activity session) was last understood as active or finished - if null, activityHistoryItem status should be Ongoing.
     */
    private ?\DateTimeInterface $lastActiveDateTime;

    /**
     * Set by the server. DateTime in UTC when the object was modified on the server.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Required. UTC DateTime when the activityHistoryItem (activity session) was started. Required for timeline history.
     */
    private ?\DateTimeInterface $startedDateTime;

    /**
     * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     */
    private ?string $status;

    /**
     * Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation.
     */
    private ?string $userTimezone;

    /**
     */
    private ?string $activity;


    public function getActiveDurationSeconds(): ?float
    {
        return $this->activeDurationSeconds;
    }

    public function setActiveDurationSeconds(?float $activeDurationSeconds): self
    {
        $this->activeDurationSeconds = $activeDurationSeconds;
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

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getLastActiveDateTime(): ?\DateTimeInterface
    {
        return $this->lastActiveDateTime;
    }

    public function setLastActiveDateTime(?\DateTimeInterface $lastActiveDateTime): self
    {
        $this->lastActiveDateTime = $lastActiveDateTime;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getStartedDateTime(): ?\DateTimeInterface
    {
        return $this->startedDateTime;
    }

    public function setStartedDateTime(?\DateTimeInterface $startedDateTime): self
    {
        $this->startedDateTime = $startedDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getUserTimezone(): ?string
    {
        return $this->userTimezone;
    }

    public function setUserTimezone(?string $userTimezone): self
    {
        $this->userTimezone = $userTimezone;
        return $this;
    }

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

}
