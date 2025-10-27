<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInStatus
 */
class SignInStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Provides additional details on the sign-in activity */
    public ?string $additionalDetails = null;

    /** Provides the 5-6 digit error code that's generated during a sign-in failure. Check out the list of error codes and messages. */
    public ?float $errorCode = null;

    /** Provides the error message or the reason for failure for the corresponding sign-in activity. Check out the list of error codes and messages. */
    public ?string $failureReason = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['additionalDetails'])) {
            $this->additionalDetails = $data['additionalDetails'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = is_numeric($data['errorCode']) ? (float)$data['errorCode'] : $data['errorCode'];
        }
        if (isset($data['failureReason'])) {
            $this->failureReason = $data['failureReason'];
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
