<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInConditions
 */
class SignInConditions
{
    public function __construct(
        /** Type of authentication flow. The possible value is: deviceCodeFlow or authenticationTransfer. Default value is none. */
        public ?AuthenticationFlow $authenticationFlow = null,
        /** Client application type. The possible value is: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other, unknownFutureValue. Default value is all. */
        public ?ConditionalAccessClientApp $clientAppType = null,
        /** Country from where the identity is authenticating. */
        public ?string $country = null,
        /** Information about the device used for the sign-in. */
        public ?DeviceInfo $deviceInfo = null,
        /** Device platform. The possible value is: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux. Default value is all. */
        public ?ConditionalAccessDevicePlatform $devicePlatform = null,
        /** Insider risk associated with the authenticating user. The possible value is: none, minor, moderate, elevated, unknownFutureValue. Default value is none. */
        public ?InsiderRiskLevel $insiderRiskLevel = null,
        /** Ip address of the authenticating identity. */
        public ?string $ipAddress = null,
        /** Risk associated with the service principal. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none. */
        public ?RiskLevel $servicePrincipalRiskLevel = null,
        /** Sign-in risk associated with the user. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none. */
        public ?RiskLevel $signInRiskLevel = null,
        /** The authenticating user's risk level. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none. */
        public ?RiskLevel $userRiskLevel = null
    ) {}
}
