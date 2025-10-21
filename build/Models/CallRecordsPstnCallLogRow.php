<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsPstnCallLogRow
 */
class CallRecordsPstnCallLogRow
{
    public function __construct(
        /** Unique call identifier. GUID. */
        public ?string $id = null,
        /** The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator can provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft. */
        public ?string $callDurationSource = null,
        /** Number dialed in E.164 format. */
        public ?string $calleeNumber = null,
        /** Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format. */
        public ?string $callerNumber = null,
        /** Call identifier. Not guaranteed to be unique. */
        public ?string $callId = null,
        /** Indicates whether the call was a PSTN outbound or inbound call and the type of call, such as a call placed by a user or an audio conference. */
        public ?string $callType = null,
        /** Amount of money or cost of the call that is charged to your account. */
        public ?float $charge = null,
        /** ID of the audio conference. */
        public ?string $conferenceId = null,
        /** Connection fee price. */
        public ?float $connectionCharge = null,
        /** Type of currency used to calculate the cost of the call. For details, see (ISO 4217. */
        public ?string $currency = null,
        /** Whether the call was domestic (within a country or region) or international (outside a country or region), based on the user''s location. */
        public ?string $destinationContext = null,
        /** Country or region dialed. */
        public ?string $destinationName = null,
        /** How long the call was connected, in seconds. */
        public ?float $duration = null,
        /** Call end time. */
        public ?\DateTimeInterface $endDateTime = null,
        /** User''s phone number type, such as a service of toll-free number. */
        public ?string $inventoryType = null,
        /** The license used for the call. */
        public ?string $licenseCapability = null,
        /** The telecommunications operator which provided PSTN services for this call. This might be Microsoft, or it might be a third-party operator via the Operator Connect Program. */
        public ?string $operator = null,
        /** Call start time. */
        public ?\DateTimeInterface $startDateTime = null,
        /** Country code of the tenant. For details, see ISO 3166-1 alpha-2. */
        public ?string $tenantCountryCode = null,
        /** Country code of the user. For details, see ISO 3166-1 alpha-2. */
        public ?string $usageCountryCode = null,
        /** Display name of the user. */
        public ?string $userDisplayName = null,
        /** Calling user''s ID in Microsoft Graph. GUID. This and other user info will be null/empty for bot call types (ucapin, ucapout). */
        public ?string $userId = null,
        /** The user principal name (sign-in name) in Microsoft Entra ID. This is usually the same as the user''s SIP address, and can be the same as the user''s email address. */
        public ?string $userPrincipalName = null
    ) {}
}
