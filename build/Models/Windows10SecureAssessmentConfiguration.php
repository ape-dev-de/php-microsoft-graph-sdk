<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10SecureAssessmentConfiguration
 */
class Windows10SecureAssessmentConfiguration
{
    /**
     * Indicates whether or not to allow the app from printing during the test.
     */
    private ?bool $allowPrinting;

    /**
     * Indicates whether or not to allow screen capture capability during a test.
     */
    private ?bool $allowScreenCapture;

    /**
     * Indicates whether or not to allow text suggestions during the test.
     */
    private ?bool $allowTextSuggestion;

    /**
     * The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
     */
    private ?string $configurationAccount;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the secureAssessment resource.
     */
    private ?string $launchUri;

    public function getAllowPrinting(): ?bool
    {
        return $this->allowPrinting;
    }

    public function setAllowPrinting(?bool $allowPrinting): self
    {
        $this->allowPrinting = $allowPrinting;
        return $this;
    }

    public function getAllowScreenCapture(): ?bool
    {
        return $this->allowScreenCapture;
    }

    public function setAllowScreenCapture(?bool $allowScreenCapture): self
    {
        $this->allowScreenCapture = $allowScreenCapture;
        return $this;
    }

    public function getAllowTextSuggestion(): ?bool
    {
        return $this->allowTextSuggestion;
    }

    public function setAllowTextSuggestion(?bool $allowTextSuggestion): self
    {
        $this->allowTextSuggestion = $allowTextSuggestion;
        return $this;
    }

    public function getConfigurationAccount(): ?string
    {
        return $this->configurationAccount;
    }

    public function setConfigurationAccount(?string $configurationAccount): self
    {
        $this->configurationAccount = $configurationAccount;
        return $this;
    }

    public function getLaunchUri(): ?string
    {
        return $this->launchUri;
    }

    public function setLaunchUri(?string $launchUri): self
    {
        $this->launchUri = $launchUri;
        return $this;
    }

}
