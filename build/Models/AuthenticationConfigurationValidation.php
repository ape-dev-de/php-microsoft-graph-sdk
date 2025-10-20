<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConfigurationValidation
 */
class AuthenticationConfigurationValidation
{
    /**
     * Errors in the validation result of a customAuthenticationExtension.
     */
    private array $errors = [];

    /**
     * Warnings in the validation result of a customAuthenticationExtension.
     */
    private ?string $warnings;

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    public function getWarnings(): ?string
    {
        return $this->warnings;
    }

    public function setWarnings(?string $warnings): self
    {
        $this->warnings = $warnings;
        return $this;
    }

}
