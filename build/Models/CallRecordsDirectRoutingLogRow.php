<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsDirectRoutingLogRow
 */
class CallRecordsDirectRoutingLogRow
{
    /**
     * Number of the user or bot who received the call. E.164 format, but might include other data.
     */
    private ?string $calleeNumber;

    /**
     * In addition to the SIP codes, Microsoft has subcodes that indicate the specific issue.
     */
    private ?float $callEndSubReason;

    /**
     * Number of the user or bot who made the call. E.164 format, but might include other data.
     */
    private ?string $callerNumber;

    /**
     * Call type and direction.
     */
    private ?string $callType;

    /**
     * Identifier for the call that you can use when calling Microsoft Support. GUID.
     */
    private ?string $correlationId;

    /**
     * Duration of the call in seconds.
     */
    private ?float $duration;

    /**
     * Only exists for successful (fully established) calls. Time when call ended.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * Only exists for failed (not fully established) calls.
     */
    private ?\DateTimeInterface $failureDateTime;

    /**
     * The final response code with which the call ended. For more information, see RFC 3261.
     */
    private ?float $finalSipCode;

    /**
     * Description of the SIP code and Microsoft subcode.
     */
    private ?string $finalSipCodePhrase;

    /**
     * Unique call identifier. GUID.
     */
    private ?string $id;

    /**
     * The date and time when the initial invite was sent.
     */
    private ?\DateTimeInterface $inviteDateTime;

    /**
     * Indicates whether the trunk was enabled for media bypass.
     */
    private ?bool $mediaBypassEnabled;

    /**
     * The datacenter used for media path in a nonbypass call.
     */
    private ?string $mediaPathLocation;

    /**
     * The datacenter used for signaling for both bypass and nonbypass calls.
     */
    private ?string $signalingLocation;

    /**
     * Call start time.For failed and unanswered calls, this value can be equal to the invite or failure time.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Success or attempt.
     */
    private ?bool $successfulCall;

    /**
     * Fully qualified domain name of the session border controller.
     */
    private ?string $trunkFullyQualifiedDomainName;

    /**
     * Display name of the user.
     */
    private ?string $userDisplayName;

    /**
     * Calling user's ID in Microsoft Graph. This and other user information is null/empty for bot call types. GUID.
     */
    private ?string $userId;

    /**
     * UserPrincipalName (sign-in name) in Microsoft Entra ID. This value is usually the same as the user''s SIP Address, and can be the same as the user''s email address.
     */
    private ?string $userPrincipalName;


    public function getCalleeNumber(): ?string
    {
        return $this->calleeNumber;
    }

    public function setCalleeNumber(?string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
        return $this;
    }

    public function getCallEndSubReason(): ?float
    {
        return $this->callEndSubReason;
    }

    public function setCallEndSubReason(?float $callEndSubReason): self
    {
        $this->callEndSubReason = $callEndSubReason;
        return $this;
    }

    public function getCallerNumber(): ?string
    {
        return $this->callerNumber;
    }

    public function setCallerNumber(?string $callerNumber): self
    {
        $this->callerNumber = $callerNumber;
        return $this;
    }

    public function getCallType(): ?string
    {
        return $this->callType;
    }

    public function setCallType(?string $callType): self
    {
        $this->callType = $callType;
        return $this;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(?string $correlationId): self
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getFailureDateTime(): ?\DateTimeInterface
    {
        return $this->failureDateTime;
    }

    public function setFailureDateTime(?\DateTimeInterface $failureDateTime): self
    {
        $this->failureDateTime = $failureDateTime;
        return $this;
    }

    public function getFinalSipCode(): ?float
    {
        return $this->finalSipCode;
    }

    public function setFinalSipCode(?float $finalSipCode): self
    {
        $this->finalSipCode = $finalSipCode;
        return $this;
    }

    public function getFinalSipCodePhrase(): ?string
    {
        return $this->finalSipCodePhrase;
    }

    public function setFinalSipCodePhrase(?string $finalSipCodePhrase): self
    {
        $this->finalSipCodePhrase = $finalSipCodePhrase;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getInviteDateTime(): ?\DateTimeInterface
    {
        return $this->inviteDateTime;
    }

    public function setInviteDateTime(?\DateTimeInterface $inviteDateTime): self
    {
        $this->inviteDateTime = $inviteDateTime;
        return $this;
    }

    public function getMediaBypassEnabled(): ?bool
    {
        return $this->mediaBypassEnabled;
    }

    public function setMediaBypassEnabled(?bool $mediaBypassEnabled): self
    {
        $this->mediaBypassEnabled = $mediaBypassEnabled;
        return $this;
    }

    public function getMediaPathLocation(): ?string
    {
        return $this->mediaPathLocation;
    }

    public function setMediaPathLocation(?string $mediaPathLocation): self
    {
        $this->mediaPathLocation = $mediaPathLocation;
        return $this;
    }

    public function getSignalingLocation(): ?string
    {
        return $this->signalingLocation;
    }

    public function setSignalingLocation(?string $signalingLocation): self
    {
        $this->signalingLocation = $signalingLocation;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getSuccessfulCall(): ?bool
    {
        return $this->successfulCall;
    }

    public function setSuccessfulCall(?bool $successfulCall): self
    {
        $this->successfulCall = $successfulCall;
        return $this;
    }

    public function getTrunkFullyQualifiedDomainName(): ?string
    {
        return $this->trunkFullyQualifiedDomainName;
    }

    public function setTrunkFullyQualifiedDomainName(?string $trunkFullyQualifiedDomainName): self
    {
        $this->trunkFullyQualifiedDomainName = $trunkFullyQualifiedDomainName;
        return $this;
    }

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
