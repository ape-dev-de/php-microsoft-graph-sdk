<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInConditions
 */
class SignInConditions
{
    /** 
     * Type of authentication flow. The possible value is: deviceCodeFlow or authenticationTransfer. Default value is none.
     * @var AuthenticationFlow|\stdClass|null
     */
    public mixed $authenticationFlow = null;

    /** 
     * Client application type. The possible value is: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other, unknownFutureValue. Default value is all.
     * @var ConditionalAccessClientApp|\stdClass|null
     */
    public mixed $clientAppType = null;

    /** Country from where the identity is authenticating. */
    public ?string $country = null;

    /** 
     * Information about the device used for the sign-in.
     * @var DeviceInfo|\stdClass|null
     */
    public mixed $deviceInfo = null;

    /** 
     * Device platform. The possible value is: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux. Default value is all.
     * @var ConditionalAccessDevicePlatform|\stdClass|null
     */
    public mixed $devicePlatform = null;

    /** 
     * Insider risk associated with the authenticating user. The possible value is: none, minor, moderate, elevated, unknownFutureValue. Default value is none.
     * @var InsiderRiskLevel|\stdClass|null
     */
    public mixed $insiderRiskLevel = null;

    /** Ip address of the authenticating identity. */
    public ?string $ipAddress = null;

    /** 
     * Risk associated with the service principal. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @var RiskLevel|\stdClass|null
     */
    public mixed $servicePrincipalRiskLevel = null;

    /** 
     * Sign-in risk associated with the user. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @var RiskLevel|\stdClass|null
     */
    public mixed $signInRiskLevel = null;

    /** 
     * The authenticating user's risk level. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @var RiskLevel|\stdClass|null
     */
    public mixed $userRiskLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['authenticationFlow'])) {
            $this->authenticationFlow = $data['authenticationFlow'];
        }
        if (isset($data['clientAppType'])) {
            $this->clientAppType = $data['clientAppType'];
        }
        if (isset($data['country'])) {
            $this->country = $data['country'];
        }
        if (isset($data['deviceInfo'])) {
            $this->deviceInfo = $data['deviceInfo'];
        }
        if (isset($data['devicePlatform'])) {
            $this->devicePlatform = $data['devicePlatform'];
        }
        if (isset($data['insiderRiskLevel'])) {
            $this->insiderRiskLevel = $data['insiderRiskLevel'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['servicePrincipalRiskLevel'])) {
            $this->servicePrincipalRiskLevel = $data['servicePrincipalRiskLevel'];
        }
        if (isset($data['signInRiskLevel'])) {
            $this->signInRiskLevel = $data['signInRiskLevel'];
        }
        if (isset($data['userRiskLevel'])) {
            $this->userRiskLevel = $data['userRiskLevel'];
        }
    }
}
