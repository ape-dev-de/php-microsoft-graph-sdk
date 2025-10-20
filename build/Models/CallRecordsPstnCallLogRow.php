<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsPstnCallLogRow
 */
class CallRecordsPstnCallLogRow
{
    /**
     * The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator can provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft.
     */
    private ?string $callDurationSource;

    /**
     * Number dialed in E.164 format.
     */
    private ?string $calleeNumber;

    /**
     * Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format.
     */
    private ?string $callerNumber;

    /**
     * Call identifier. Not guaranteed to be unique.
     */
    private ?string $callId;

    /**
     * Indicates whether the call was a PSTN outbound or inbound call and the type of call, such as a call placed by a user or an audio conference.
     */
    private ?string $callType;

    /**
     * Amount of money or cost of the call that is charged to your account.
     */
    private ?float $charge;

    /**
     * ID of the audio conference.
     */
    private ?string $conferenceId;

    /**
     * Connection fee price.
     */
    private ?float $connectionCharge;

    /**
     * Type of currency used to calculate the cost of the call. For details, see (ISO 4217.
     */
    private ?string $currency;

    /**
     * Whether the call was domestic (within a country or region) or international (outside a country or region), based on the user''s location.
     */
    private ?string $destinationContext;

    /**
     * Country or region dialed.
     */
    private ?string $destinationName;

    /**
     * How long the call was connected, in seconds.
     */
    private ?float $duration;

    /**
     * Call end time.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * Unique call identifier. GUID.
     */
    private ?string $id;

    /**
     * User''s phone number type, such as a service of toll-free number.
     */
    private ?string $inventoryType;

    /**
     * The license used for the call.
     */
    private ?string $licenseCapability;

    /**
     * The telecommunications operator which provided PSTN services for this call. This might be Microsoft, or it might be a third-party operator via the Operator Connect Program.
     */
    private ?string $operator;

    /**
     * Call start time.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Country code of the tenant. For details, see ISO 3166-1 alpha-2.
     */
    private ?string $tenantCountryCode;

    /**
     * Country code of the user. For details, see ISO 3166-1 alpha-2.
     */
    private ?string $usageCountryCode;

    /**
     * Display name of the user.
     */
    private ?string $userDisplayName;

    /**
     * Calling user''s ID in Microsoft Graph. GUID. This and other user info will be null/empty for bot call types (ucapin, ucapout).
     */
    private ?string $userId;

    /**
     * The user principal name (sign-in name) in Microsoft Entra ID. This is usually the same as the user''s SIP address, and can be the same as the user''s email address.
     */
    private ?string $userPrincipalName;

    public function getCallDurationSource(): ?string
    {
        return $this->callDurationSource;
    }

    public function setCallDurationSource(?string $callDurationSource): self
    {
        $this->callDurationSource = $callDurationSource;
        return $this;
    }

    public function getCalleeNumber(): ?string
    {
        return $this->calleeNumber;
    }

    public function setCalleeNumber(?string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
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

    public function getCallId(): ?string
    {
        return $this->callId;
    }

    public function setCallId(?string $callId): self
    {
        $this->callId = $callId;
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

    public function getCharge(): ?float
    {
        return $this->charge;
    }

    public function setCharge(?float $charge): self
    {
        $this->charge = $charge;
        return $this;
    }

    public function getConferenceId(): ?string
    {
        return $this->conferenceId;
    }

    public function setConferenceId(?string $conferenceId): self
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }

    public function getConnectionCharge(): ?float
    {
        return $this->connectionCharge;
    }

    public function setConnectionCharge(?float $connectionCharge): self
    {
        $this->connectionCharge = $connectionCharge;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getDestinationContext(): ?string
    {
        return $this->destinationContext;
    }

    public function setDestinationContext(?string $destinationContext): self
    {
        $this->destinationContext = $destinationContext;
        return $this;
    }

    public function getDestinationName(): ?string
    {
        return $this->destinationName;
    }

    public function setDestinationName(?string $destinationName): self
    {
        $this->destinationName = $destinationName;
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getInventoryType(): ?string
    {
        return $this->inventoryType;
    }

    public function setInventoryType(?string $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    public function getLicenseCapability(): ?string
    {
        return $this->licenseCapability;
    }

    public function setLicenseCapability(?string $licenseCapability): self
    {
        $this->licenseCapability = $licenseCapability;
        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
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

    public function getTenantCountryCode(): ?string
    {
        return $this->tenantCountryCode;
    }

    public function setTenantCountryCode(?string $tenantCountryCode): self
    {
        $this->tenantCountryCode = $tenantCountryCode;
        return $this;
    }

    public function getUsageCountryCode(): ?string
    {
        return $this->usageCountryCode;
    }

    public function setUsageCountryCode(?string $usageCountryCode): self
    {
        $this->usageCountryCode = $usageCountryCode;
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
