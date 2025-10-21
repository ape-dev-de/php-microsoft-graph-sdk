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
     * @var string[]
     */
    private array $warnings = [];


    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }

    /**
     * @param string[] $warnings
     */
    public function setWarnings(array $warnings): self
    {
        $this->warnings = $warnings;
        return $this;
    }

}
