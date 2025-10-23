<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEventStatus
 */
class SecurityRetentionEventStatus
{
    /** 
     * The error if the status isn't successful.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** 
     * The status of the distribution. The possible values are: pending, error, success, notAvaliable.
     * @var SecurityEventStatusType|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
