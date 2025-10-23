<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicErrorDetail
 */
class PublicErrorDetail
{
    /** The error code. */
    public ?string $code = null;

    /** The error message. */
    public ?string $message = null;

    /** The target of the error. */
    public ?string $target = null;


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
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
    }
}
