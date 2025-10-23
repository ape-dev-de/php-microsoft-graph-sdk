<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassificationInnerError
 */
class ClassificationInnerError
{
    /** The activity ID associated with the request that generated the error. */
    public ?string $activityId = null;

    /** The client request ID, if provided by the caller. */
    public ?string $clientRequestId = null;

    /** A more specific, potentially internal, error code string. */
    public ?string $code = null;

    /** The date and time the inner error occurred. */
    public ?\DateTimeInterface $errorDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['activityId'])) {
            $this->activityId = $data['activityId'];
        }
        if (isset($data['clientRequestId'])) {
            $this->clientRequestId = $data['clientRequestId'];
        }
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['errorDateTime'])) {
            $this->errorDateTime = $data['errorDateTime'];
        }
    }
}
