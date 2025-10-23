<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CoachmarkLocation
 */
class CoachmarkLocation
{
    /** Length of coachmark. */
    public ?float $length = null;

    /** Offset of coachmark. */
    public ?float $offset = null;

    /** 
     * Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue.
     * @var CoachmarkLocationType|\stdClass|null
     */
    public mixed $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['length'])) {
            $this->length = $data['length'];
        }
        if (isset($data['offset'])) {
            $this->offset = $data['offset'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
