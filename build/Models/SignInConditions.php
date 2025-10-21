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
     */
    private ?string $authenticationFlow;

    /**
     * Client application type. The possible value is: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other, unknownFutureValue. Default value is all.
     */
    private ?string $clientAppType;

    /**
     * Country from where the identity is authenticating.
     */
    private ?string $country;

    /**
     * Information about the device used for the sign-in.
     */
    private ?string $deviceInfo;

    /**
     * Device platform. The possible value is: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux. Default value is all.
     */
    private ?string $devicePlatform;

    /**
     * Insider risk associated with the authenticating user. The possible value is: none, minor, moderate, elevated, unknownFutureValue. Default value is none.
     */
    private ?string $insiderRiskLevel;

    /**
     * Ip address of the authenticating identity.
     */
    private ?string $ipAddress;

    /**
     * Risk associated with the service principal. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     */
    private ?string $servicePrincipalRiskLevel;

    /**
     * Sign-in risk associated with the user. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     */
    private ?string $signInRiskLevel;

    /**
     * The authenticating user''s risk level. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     */
    private ?string $userRiskLevel;


    public function getAuthenticationFlow(): ?string
    {
        return $this->authenticationFlow;
    }

    public function setAuthenticationFlow(?string $authenticationFlow): self
    {
        $this->authenticationFlow = $authenticationFlow;
        return $this;
    }

    public function getClientAppType(): ?string
    {
        return $this->clientAppType;
    }

    public function setClientAppType(?string $clientAppType): self
    {
        $this->clientAppType = $clientAppType;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function getDeviceInfo(): ?string
    {
        return $this->deviceInfo;
    }

    public function setDeviceInfo(?string $deviceInfo): self
    {
        $this->deviceInfo = $deviceInfo;
        return $this;
    }

    public function getDevicePlatform(): ?string
    {
        return $this->devicePlatform;
    }

    public function setDevicePlatform(?string $devicePlatform): self
    {
        $this->devicePlatform = $devicePlatform;
        return $this;
    }

    public function getInsiderRiskLevel(): ?string
    {
        return $this->insiderRiskLevel;
    }

    public function setInsiderRiskLevel(?string $insiderRiskLevel): self
    {
        $this->insiderRiskLevel = $insiderRiskLevel;
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

    public function getServicePrincipalRiskLevel(): ?string
    {
        return $this->servicePrincipalRiskLevel;
    }

    public function setServicePrincipalRiskLevel(?string $servicePrincipalRiskLevel): self
    {
        $this->servicePrincipalRiskLevel = $servicePrincipalRiskLevel;
        return $this;
    }

    public function getSignInRiskLevel(): ?string
    {
        return $this->signInRiskLevel;
    }

    public function setSignInRiskLevel(?string $signInRiskLevel): self
    {
        $this->signInRiskLevel = $signInRiskLevel;
        return $this;
    }

    public function getUserRiskLevel(): ?string
    {
        return $this->userRiskLevel;
    }

    public function setUserRiskLevel(?string $userRiskLevel): self
    {
        $this->userRiskLevel = $userRiskLevel;
        return $this;
    }

}
