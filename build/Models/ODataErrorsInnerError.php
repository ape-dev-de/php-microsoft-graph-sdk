<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsInnerError
 */
class ODataErrorsInnerError
{
    /** Request Id as tracked internally by the service */
    public ?string $requestId = null;

    /** Client request Id as sent by the client application. */
    public ?string $clientRequestId = null;

    /** Date when the error occured. */
    public ?\DateTimeInterface $date = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['request-id'])) {
            $this->requestId = $data['request-id'];
        }
        if (isset($data['client-request-id'])) {
            $this->clientRequestId = $data['client-request-id'];
        }
        if (isset($data['date'])) {
            $this->date = is_string($data['date']) ? new \DateTimeImmutable($data['date']) : $data['date'];
        }
    }
}
