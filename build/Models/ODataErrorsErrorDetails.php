<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsErrorDetails
 */
class ODataErrorsErrorDetails
{
    /**  */
    public ?string $code = null;

    /**  */
    public ?string $message = null;

    /**  */
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
