<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInConditions
 */
class SignInConditions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Type of authentication flow. The possible value is: deviceCodeFlow or authenticationTransfer. Default value is none.
     * @var AuthenticationFlow|\stdClass|null
     */
    public AuthenticationFlow|\stdClass|null $authenticationFlow = null;

    /** 
     * Client application type. The possible value is: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other, unknownFutureValue. Default value is all.
     * @var ConditionalAccessClientApp|\stdClass|null
     */
    public ConditionalAccessClientApp|\stdClass|null $clientAppType = null;

    /** Country from where the identity is authenticating. */
    public ?string $country = null;

    /** 
     * Information about the device used for the sign-in.
     * @var DeviceInfo|\stdClass|null
     */
    public DeviceInfo|\stdClass|null $deviceInfo = null;

    /** 
     * Device platform. The possible value is: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux. Default value is all.
     * @var ConditionalAccessDevicePlatform|\stdClass|null
     */
    public ConditionalAccessDevicePlatform|\stdClass|null $devicePlatform = null;

    /** 
     * Insider risk associated with the authenticating user. The possible value is: none, minor, moderate, elevated, unknownFutureValue. Default value is none.
     * @var InsiderRiskLevel|\stdClass|null
     */
    public InsiderRiskLevel|\stdClass|null $insiderRiskLevel = null;

    /** Ip address of the authenticating identity. */
    public ?string $ipAddress = null;

    /** 
     * Risk associated with the service principal. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @var RiskLevel|\stdClass|null
     */
    public RiskLevel|\stdClass|null $servicePrincipalRiskLevel = null;

    /** 
     * Sign-in risk associated with the user. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @var RiskLevel|\stdClass|null
     */
    public RiskLevel|\stdClass|null $signInRiskLevel = null;

    /** 
     * The authenticating user's risk level. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @var RiskLevel|\stdClass|null
     */
    public RiskLevel|\stdClass|null $userRiskLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['authenticationFlow'])) {
            $this->authenticationFlow = is_array($data['authenticationFlow']) ? new AuthenticationFlow($data['authenticationFlow']) : $data['authenticationFlow'];
        }
        if (isset($data['clientAppType'])) {
            $this->clientAppType = is_string($data['clientAppType']) ? ConditionalAccessClientApp::tryFrom($data['clientAppType']) : $data['clientAppType'];
        }
        if (isset($data['country'])) {
            $this->country = $data['country'];
        }
        if (isset($data['deviceInfo'])) {
            $this->deviceInfo = is_array($data['deviceInfo']) ? new DeviceInfo($data['deviceInfo']) : $data['deviceInfo'];
        }
        if (isset($data['devicePlatform'])) {
            $this->devicePlatform = is_string($data['devicePlatform']) ? ConditionalAccessDevicePlatform::tryFrom($data['devicePlatform']) : $data['devicePlatform'];
        }
        if (isset($data['insiderRiskLevel'])) {
            $this->insiderRiskLevel = is_string($data['insiderRiskLevel']) ? InsiderRiskLevel::tryFrom($data['insiderRiskLevel']) : $data['insiderRiskLevel'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['servicePrincipalRiskLevel'])) {
            $this->servicePrincipalRiskLevel = is_string($data['servicePrincipalRiskLevel']) ? RiskLevel::tryFrom($data['servicePrincipalRiskLevel']) : $data['servicePrincipalRiskLevel'];
        }
        if (isset($data['signInRiskLevel'])) {
            $this->signInRiskLevel = is_string($data['signInRiskLevel']) ? RiskLevel::tryFrom($data['signInRiskLevel']) : $data['signInRiskLevel'];
        }
        if (isset($data['userRiskLevel'])) {
            $this->userRiskLevel = is_string($data['userRiskLevel']) ? RiskLevel::tryFrom($data['userRiskLevel']) : $data['userRiskLevel'];
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
