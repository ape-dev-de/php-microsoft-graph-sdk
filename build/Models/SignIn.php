<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignIn
 */
class SignIn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** App name displayed in the Microsoft Entra admin center.  Supports $filter (eq, startsWith). */
    public ?string $appDisplayName = null;

    /** Unique GUID that represents the app ID in the Microsoft Entra ID.  Supports $filter (eq). */
    public ?string $appId = null;

    /** 
     * Provides a list of conditional access policies that the corresponding sign-in activity triggers. Apps need more Conditional Access-related privileges to read the details of this property. For more information, see Permissions for viewing applied conditional access (CA) policies in sign-ins.
     * @var AppliedConditionalAccessPolicy[]
     */
    public array $appliedConditionalAccessPolicies = [];

    /** Identifies the client used for the sign-in activity. Modern authentication clients include Browser, modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients.  Supports $filter (eq). */
    public ?string $clientAppUsed = null;

    /** 
     * Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue.  Supports $filter (eq).
     * @var ConditionalAccessStatus|\stdClass|null
     */
    public ConditionalAccessStatus|\stdClass|null $conditionalAccessStatus = null;

    /** The request ID sent from the client when the sign-in is initiated. Used to troubleshoot sign-in activity.  Supports $filter (eq). */
    public ?string $correlationId = null;

    /** Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z.  Supports $orderby, $filter (eq, le, and ge). */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Device information from where the sign-in occurred; includes device ID, operating system, and browser.  Supports $filter (eq, startsWith) on browser and operatingSytem properties.
     * @var DeviceDetail|\stdClass|null
     */
    public DeviceDetail|\stdClass|null $deviceDetail = null;

    /** IP address of the client used to sign in.  Supports $filter (eq, startsWith). */
    public ?string $ipAddress = null;

    /** Indicates whether a sign-in is interactive. */
    public ?bool $isInteractive = null;

    /** 
     * Provides the city, state, and country code where the sign-in originated.  Supports $filter (eq, startsWith) on city, state, and countryOrRegion properties.
     * @var SignInLocation|\stdClass|null
     */
    public SignInLocation|\stdClass|null $location = null;

    /** Name of the resource the user signed into.  Supports $filter (eq). */
    public ?string $resourceDisplayName = null;

    /** ID of the resource that the user signed into.  Supports $filter (eq). */
    public ?string $resourceId = null;

    /** 
     * The reason behind a specific state of a risky user, sign-in, or a risk event. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe. Use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.The value none means that Microsoft Entra risk detection did not flag the user or the sign-in as a risky event so far.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @var RiskDetail|\stdClass|null
     */
    public RiskDetail|\stdClass|null $riskDetail = null;

    /** 
     * 
     * @var RiskEventType[]
     */
    public array $riskEventTypes = [];

    /** 
     * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence, generic, or unknownFutureValue.  Supports $filter (eq, startsWith).
     * @var string[]
     */
    public array $riskEventTypes_v2 = [];

    /** 
     * Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq).  Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @var RiskLevel|\stdClass|null
     */
    public RiskLevel|\stdClass|null $riskLevelAggregated = null;

    /** 
     * Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @var RiskLevel|\stdClass|null
     */
    public RiskLevel|\stdClass|null $riskLevelDuringSignIn = null;

    /** 
     * Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.  Supports $filter (eq).
     * @var RiskState|\stdClass|null
     */
    public RiskState|\stdClass|null $riskState = null;

    /** 
     * Sign-in status. Includes the error code and description of the error (if a sign-in failure occurs).  Supports $filter (eq) on errorCode property.
     * @var SignInStatus|\stdClass|null
     */
    public SignInStatus|\stdClass|null $status = null;

    /** Display name of the user that initiated the sign-in.  Supports $filter (eq, startsWith). */
    public ?string $userDisplayName = null;

    /** ID of the user that initiated the sign-in.  Supports $filter (eq). */
    public ?string $userId = null;

    /** User principal name of the user that initiated the sign-in. This value is always in lowercase. For guest users whose values in the user object typically contain #EXT# before the domain part, this property stores the value in both lowercase and the 'true' format. For example, while the user object stores AdeleVance_fabrikam.com#EXT#@contoso.com, the sign-in logs store adelevance@fabrikam.com. Supports $filter (eq, startsWith). */
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
        if (isset($data['appDisplayName'])) {
            $this->appDisplayName = $data['appDisplayName'];
        }
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['appliedConditionalAccessPolicies'])) {
            $this->appliedConditionalAccessPolicies = $data['appliedConditionalAccessPolicies'];
        }
        if (isset($data['clientAppUsed'])) {
            $this->clientAppUsed = $data['clientAppUsed'];
        }
        if (isset($data['conditionalAccessStatus'])) {
            $this->conditionalAccessStatus = is_array($data['conditionalAccessStatus']) ? new ConditionalAccessStatus($data['conditionalAccessStatus']) : $data['conditionalAccessStatus'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deviceDetail'])) {
            $this->deviceDetail = is_array($data['deviceDetail']) ? new DeviceDetail($data['deviceDetail']) : $data['deviceDetail'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['isInteractive'])) {
            $this->isInteractive = $data['isInteractive'];
        }
        if (isset($data['location'])) {
            $this->location = is_array($data['location']) ? new SignInLocation($data['location']) : $data['location'];
        }
        if (isset($data['resourceDisplayName'])) {
            $this->resourceDisplayName = $data['resourceDisplayName'];
        }
        if (isset($data['resourceId'])) {
            $this->resourceId = $data['resourceId'];
        }
        if (isset($data['riskDetail'])) {
            $this->riskDetail = is_array($data['riskDetail']) ? new RiskDetail($data['riskDetail']) : $data['riskDetail'];
        }
        if (isset($data['riskEventTypes'])) {
            $this->riskEventTypes = $data['riskEventTypes'];
        }
        if (isset($data['riskEventTypes_v2'])) {
            $this->riskEventTypes_v2 = $data['riskEventTypes_v2'];
        }
        if (isset($data['riskLevelAggregated'])) {
            $this->riskLevelAggregated = is_array($data['riskLevelAggregated']) ? new RiskLevel($data['riskLevelAggregated']) : $data['riskLevelAggregated'];
        }
        if (isset($data['riskLevelDuringSignIn'])) {
            $this->riskLevelDuringSignIn = is_array($data['riskLevelDuringSignIn']) ? new RiskLevel($data['riskLevelDuringSignIn']) : $data['riskLevelDuringSignIn'];
        }
        if (isset($data['riskState'])) {
            $this->riskState = is_array($data['riskState']) ? new RiskState($data['riskState']) : $data['riskState'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SignInStatus($data['status']) : $data['status'];
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
