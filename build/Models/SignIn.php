<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignIn
 */
class SignIn
{
    /**
     * App name displayed in the Microsoft Entra admin center.  Supports $filter (eq, startsWith).
     */
    private ?string $appDisplayName;

    /**
     * Unique GUID that represents the app ID in the Microsoft Entra ID.  Supports $filter (eq).
     */
    private ?string $appId;

    /**
     * Provides a list of conditional access policies that the corresponding sign-in activity triggers. Apps need more Conditional Access-related privileges to read the details of this property. For more information, see Permissions for viewing applied conditional access (CA) policies in sign-ins.
     */
    private array $appliedConditionalAccessPolicies = [];

    /**
     * Identifies the client used for the sign-in activity. Modern authentication clients include Browser, modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients.  Supports $filter (eq).
     */
    private ?string $clientAppUsed;

    /**
     * Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue.  Supports $filter (eq).
     */
    private ?string $conditionalAccessStatus;

    /**
     * The request ID sent from the client when the sign-in is initiated. Used to troubleshoot sign-in activity.  Supports $filter (eq).
     */
    private ?string $correlationId;

    /**
     * Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z.  Supports $orderby, $filter (eq, le, and ge).
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Device information from where the sign-in occurred; includes device ID, operating system, and browser.  Supports $filter (eq, startsWith) on browser and operatingSytem properties.
     */
    private ?string $deviceDetail;

    /**
     * IP address of the client used to sign in.  Supports $filter (eq, startsWith).
     */
    private ?string $ipAddress;

    /**
     * Indicates whether a sign-in is interactive.
     */
    private ?bool $isInteractive;

    /**
     * Provides the city, state, and country code where the sign-in originated.  Supports $filter (eq, startsWith) on city, state, and countryOrRegion properties.
     */
    private ?string $location;

    /**
     * Name of the resource the user signed into.  Supports $filter (eq).
     */
    private ?string $resourceDisplayName;

    /**
     * ID of the resource that the user signed into.  Supports $filter (eq).
     */
    private ?string $resourceId;

    /**
     * The reason behind a specific state of a risky user, sign-in, or a risk event. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe. Use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.The value none means that Microsoft Entra risk detection did not flag the user or the sign-in as a risky event so far.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     */
    private ?string $riskDetail;

    /**
     */
    private array $riskEventTypes = [];

    /**
     * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence, generic, or unknownFutureValue.  Supports $filter (eq, startsWith).
     */
    private ?string $riskEventTypes_v2;

    /**
     * Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in wasn''t enabled for Microsoft Entra ID Protection.  Supports $filter (eq).  Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     */
    private ?string $riskLevelAggregated;

    /**
     * Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in wasn''t enabled for Microsoft Entra ID Protection.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     */
    private ?string $riskLevelDuringSignIn;

    /**
     * Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.  Supports $filter (eq).
     */
    private ?string $riskState;

    /**
     * Sign-in status. Includes the error code and description of the error (if a sign-in failure occurs).  Supports $filter (eq) on errorCode property.
     */
    private ?string $status;

    /**
     * Display name of the user that initiated the sign-in.  Supports $filter (eq, startsWith).
     */
    private ?string $userDisplayName;

    /**
     * ID of the user that initiated the sign-in.  Supports $filter (eq).
     */
    private ?string $userId;

    /**
     * User principal name of the user that initiated the sign-in. This value is always in lowercase. For guest users whose values in the user object typically contain #EXT# before the domain part, this property stores the value in both lowercase and the ''true'' format. For example, while the user object stores AdeleVance_fabrikam.com#EXT#@contoso.com, the sign-in logs store adelevance@fabrikam.com. Supports $filter (eq, startsWith).
     */
    private ?string $userPrincipalName;

    public function getAppDisplayName(): ?string
    {
        return $this->appDisplayName;
    }

    public function setAppDisplayName(?string $appDisplayName): self
    {
        $this->appDisplayName = $appDisplayName;
        return $this;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getAppliedConditionalAccessPolicies(): array
    {
        return $this->appliedConditionalAccessPolicies;
    }

    public function setAppliedConditionalAccessPolicies(array $appliedConditionalAccessPolicies): self
    {
        $this->appliedConditionalAccessPolicies = $appliedConditionalAccessPolicies;
        return $this;
    }

    public function getClientAppUsed(): ?string
    {
        return $this->clientAppUsed;
    }

    public function setClientAppUsed(?string $clientAppUsed): self
    {
        $this->clientAppUsed = $clientAppUsed;
        return $this;
    }

    public function getConditionalAccessStatus(): ?string
    {
        return $this->conditionalAccessStatus;
    }

    public function setConditionalAccessStatus(?string $conditionalAccessStatus): self
    {
        $this->conditionalAccessStatus = $conditionalAccessStatus;
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

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDeviceDetail(): ?string
    {
        return $this->deviceDetail;
    }

    public function setDeviceDetail(?string $deviceDetail): self
    {
        $this->deviceDetail = $deviceDetail;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getIsInteractive(): ?bool
    {
        return $this->isInteractive;
    }

    public function setIsInteractive(?bool $isInteractive): self
    {
        $this->isInteractive = $isInteractive;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getResourceDisplayName(): ?string
    {
        return $this->resourceDisplayName;
    }

    public function setResourceDisplayName(?string $resourceDisplayName): self
    {
        $this->resourceDisplayName = $resourceDisplayName;
        return $this;
    }

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    public function getRiskDetail(): ?string
    {
        return $this->riskDetail;
    }

    public function setRiskDetail(?string $riskDetail): self
    {
        $this->riskDetail = $riskDetail;
        return $this;
    }

    public function getRiskEventTypes(): array
    {
        return $this->riskEventTypes;
    }

    public function setRiskEventTypes(array $riskEventTypes): self
    {
        $this->riskEventTypes = $riskEventTypes;
        return $this;
    }

    public function getRiskEventTypes_v2(): ?string
    {
        return $this->riskEventTypes_v2;
    }

    public function setRiskEventTypes_v2(?string $riskEventTypes_v2): self
    {
        $this->riskEventTypes_v2 = $riskEventTypes_v2;
        return $this;
    }

    public function getRiskLevelAggregated(): ?string
    {
        return $this->riskLevelAggregated;
    }

    public function setRiskLevelAggregated(?string $riskLevelAggregated): self
    {
        $this->riskLevelAggregated = $riskLevelAggregated;
        return $this;
    }

    public function getRiskLevelDuringSignIn(): ?string
    {
        return $this->riskLevelDuringSignIn;
    }

    public function setRiskLevelDuringSignIn(?string $riskLevelDuringSignIn): self
    {
        $this->riskLevelDuringSignIn = $riskLevelDuringSignIn;
        return $this;
    }

    public function getRiskState(): ?string
    {
        return $this->riskState;
    }

    public function setRiskState(?string $riskState): self
    {
        $this->riskState = $riskState;
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
