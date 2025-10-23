<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultInfo
 */
class ResultInfo
{
    /** The result code. */
    public ?float $code = null;

    /** The message. */
    public ?string $message = null;

    /** The result subcode. */
    public ?float $subcode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['subcode'])) {
            $this->subcode = $data['subcode'];
        }
    }
}
