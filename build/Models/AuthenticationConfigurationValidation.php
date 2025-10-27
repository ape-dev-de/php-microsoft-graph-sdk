<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConfigurationValidation
 */
class AuthenticationConfigurationValidation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Errors in the validation result of a customAuthenticationExtension.
     * @var GenericError[]
     */
    public array $errors = [];

    /** 
     * Warnings in the validation result of a customAuthenticationExtension.
     * @var GenericError[]
     */
    public array $warnings = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['errors'])) {
            $this->errors = $data['errors'];
        }
        if (isset($data['warnings'])) {
            $this->warnings = $data['warnings'];
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
