<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsPstnCallLogRow
 */
class CallRecordsPstnCallLogRow
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique call identifier. GUID. */
    public ?string $id = null;

    /** 
     * The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator can provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft.
     * @var CallRecordsPstnCallDurationSource|\stdClass|null
     */
    public CallRecordsPstnCallDurationSource|\stdClass|null $callDurationSource = null;

    /** Number dialed in E.164 format. */
    public ?string $calleeNumber = null;

    /** Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format. */
    public ?string $callerNumber = null;

    /** Call identifier. Not guaranteed to be unique. */
    public ?string $callId = null;

    /** Indicates whether the call was a PSTN outbound or inbound call and the type of call, such as a call placed by a user or an audio conference. */
    public ?string $callType = null;

    /** Amount of money or cost of the call that is charged to your account. */
    public ?float $charge = null;

    /** ID of the audio conference. */
    public ?string $conferenceId = null;

    /** Connection fee price. */
    public ?float $connectionCharge = null;

    /** Type of currency used to calculate the cost of the call. For details, see (ISO 4217. */
    public ?string $currency = null;

    /** Whether the call was domestic (within a country or region) or international (outside a country or region), based on the user's location. */
    public ?string $destinationContext = null;

    /** Country or region dialed. */
    public ?string $destinationName = null;

    /** How long the call was connected, in seconds. */
    public ?float $duration = null;

    /** Call end time. */
    public ?\DateTimeInterface $endDateTime = null;

    /** User's phone number type, such as a service of toll-free number. */
    public ?string $inventoryType = null;

    /** The license used for the call. */
    public ?string $licenseCapability = null;

    /** The telecommunications operator which provided PSTN services for this call. This might be Microsoft, or it might be a third-party operator via the Operator Connect Program. */
    public ?string $operator = null;

    /** Call start time. */
    public ?\DateTimeInterface $startDateTime = null;

    /** Country code of the tenant. For details, see ISO 3166-1 alpha-2. */
    public ?string $tenantCountryCode = null;

    /** Country code of the user. For details, see ISO 3166-1 alpha-2. */
    public ?string $usageCountryCode = null;

    /** Display name of the user. */
    public ?string $userDisplayName = null;

    /** Calling user's ID in Microsoft Graph. GUID. This and other user info will be null/empty for bot call types (ucapin, ucapout). */
    public ?string $userId = null;

    /** The user principal name (sign-in name) in Microsoft Entra ID. This is usually the same as the user's SIP address, and can be the same as the user's email address. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['callDurationSource'])) {
            $this->callDurationSource = is_string($data['callDurationSource']) ? CallRecordsPstnCallDurationSource::tryFrom($data['callDurationSource']) : $data['callDurationSource'];
        }
        if (isset($data['calleeNumber'])) {
            $this->calleeNumber = $data['calleeNumber'];
        }
        if (isset($data['callerNumber'])) {
            $this->callerNumber = $data['callerNumber'];
        }
        if (isset($data['callId'])) {
            $this->callId = $data['callId'];
        }
        if (isset($data['callType'])) {
            $this->callType = $data['callType'];
        }
        if (isset($data['charge'])) {
            $this->charge = is_numeric($data['charge']) ? (float)$data['charge'] : $data['charge'];
        }
        if (isset($data['conferenceId'])) {
            $this->conferenceId = $data['conferenceId'];
        }
        if (isset($data['connectionCharge'])) {
            $this->connectionCharge = is_numeric($data['connectionCharge']) ? (float)$data['connectionCharge'] : $data['connectionCharge'];
        }
        if (isset($data['currency'])) {
            $this->currency = $data['currency'];
        }
        if (isset($data['destinationContext'])) {
            $this->destinationContext = $data['destinationContext'];
        }
        if (isset($data['destinationName'])) {
            $this->destinationName = $data['destinationName'];
        }
        if (isset($data['duration'])) {
            $this->duration = is_numeric($data['duration']) ? (float)$data['duration'] : $data['duration'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['inventoryType'])) {
            $this->inventoryType = $data['inventoryType'];
        }
        if (isset($data['licenseCapability'])) {
            $this->licenseCapability = $data['licenseCapability'];
        }
        if (isset($data['operator'])) {
            $this->operator = $data['operator'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['tenantCountryCode'])) {
            $this->tenantCountryCode = $data['tenantCountryCode'];
        }
        if (isset($data['usageCountryCode'])) {
            $this->usageCountryCode = $data['usageCountryCode'];
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

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
