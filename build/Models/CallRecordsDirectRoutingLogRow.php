<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsDirectRoutingLogRow
 */
class CallRecordsDirectRoutingLogRow
{
    /** Unique call identifier. GUID. */
    public ?string $id = null;

    /** Number of the user or bot who received the call. E.164 format, but might include other data. */
    public ?string $calleeNumber = null;

    /** In addition to the SIP codes, Microsoft has subcodes that indicate the specific issue. */
    public ?float $callEndSubReason = null;

    /** Number of the user or bot who made the call. E.164 format, but might include other data. */
    public ?string $callerNumber = null;

    /** Call type and direction. */
    public ?string $callType = null;

    /** Identifier for the call that you can use when calling Microsoft Support. GUID. */
    public ?string $correlationId = null;

    /** Duration of the call in seconds. */
    public ?float $duration = null;

    /** Only exists for successful (fully established) calls. Time when call ended. */
    public ?\DateTimeInterface $endDateTime = null;

    /** Only exists for failed (not fully established) calls. */
    public ?\DateTimeInterface $failureDateTime = null;

    /** The final response code with which the call ended. For more information, see RFC 3261. */
    public ?float $finalSipCode = null;

    /** Description of the SIP code and Microsoft subcode. */
    public ?string $finalSipCodePhrase = null;

    /** The date and time when the initial invite was sent. */
    public ?\DateTimeInterface $inviteDateTime = null;

    /** Indicates whether the trunk was enabled for media bypass. */
    public ?bool $mediaBypassEnabled = null;

    /** The datacenter used for media path in a nonbypass call. */
    public ?string $mediaPathLocation = null;

    /** The datacenter used for signaling for both bypass and nonbypass calls. */
    public ?string $signalingLocation = null;

    /** Call start time.For failed and unanswered calls, this value can be equal to the invite or failure time. */
    public ?\DateTimeInterface $startDateTime = null;

    /** Success or attempt. */
    public ?bool $successfulCall = null;

    /** Fully qualified domain name of the session border controller. */
    public ?string $trunkFullyQualifiedDomainName = null;

    /** Display name of the user. */
    public ?string $userDisplayName = null;

    /** Calling user's ID in Microsoft Graph. This and other user information is null/empty for bot call types. GUID. */
    public ?string $userId = null;

    /** UserPrincipalName (sign-in name) in Microsoft Entra ID. This value is usually the same as the user's SIP Address, and can be the same as the user's email address. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['calleeNumber'])) {
            $this->calleeNumber = $data['calleeNumber'];
        }
        if (isset($data['callEndSubReason'])) {
            $this->callEndSubReason = $data['callEndSubReason'];
        }
        if (isset($data['callerNumber'])) {
            $this->callerNumber = $data['callerNumber'];
        }
        if (isset($data['callType'])) {
            $this->callType = $data['callType'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['duration'])) {
            $this->duration = $data['duration'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['failureDateTime'])) {
            $this->failureDateTime = is_string($data['failureDateTime']) ? new \DateTimeImmutable($data['failureDateTime']) : $data['failureDateTime'];
        }
        if (isset($data['finalSipCode'])) {
            $this->finalSipCode = $data['finalSipCode'];
        }
        if (isset($data['finalSipCodePhrase'])) {
            $this->finalSipCodePhrase = $data['finalSipCodePhrase'];
        }
        if (isset($data['inviteDateTime'])) {
            $this->inviteDateTime = is_string($data['inviteDateTime']) ? new \DateTimeImmutable($data['inviteDateTime']) : $data['inviteDateTime'];
        }
        if (isset($data['mediaBypassEnabled'])) {
            $this->mediaBypassEnabled = $data['mediaBypassEnabled'];
        }
        if (isset($data['mediaPathLocation'])) {
            $this->mediaPathLocation = $data['mediaPathLocation'];
        }
        if (isset($data['signalingLocation'])) {
            $this->signalingLocation = $data['signalingLocation'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['successfulCall'])) {
            $this->successfulCall = $data['successfulCall'];
        }
        if (isset($data['trunkFullyQualifiedDomainName'])) {
            $this->trunkFullyQualifiedDomainName = $data['trunkFullyQualifiedDomainName'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
