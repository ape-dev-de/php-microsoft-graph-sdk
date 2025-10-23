<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInStatus
 */
class SignInStatus
{
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
        if (isset($data['additionalDetails'])) {
            $this->additionalDetails = $data['additionalDetails'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = $data['errorCode'];
        }
        if (isset($data['failureReason'])) {
            $this->failureReason = $data['failureReason'];
        }
    }
}
