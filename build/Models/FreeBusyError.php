<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FreeBusyError
 */
class FreeBusyError
{
    /** Describes the error. */
    public ?string $message = null;

    /** The response code from querying for the availability of the user, distribution list, or resource. */
    public ?string $responseCode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['responseCode'])) {
            $this->responseCode = $data['responseCode'];
        }
    }
}
