<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicError
 */
class PublicError
{
    /** Represents the error code. */
    public ?string $code = null;

    /** 
     * Details of the error.
     * @var PublicErrorDetail[]
     */
    public array $details = [];

    /** 
     * Details of the inner error.
     * @var PublicInnerError|\stdClass|null
     */
    public mixed $innerError = null;

    /** A non-localized message for the developer. */
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
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['innerError'])) {
            $this->innerError = is_array($data['innerError']) ? new PublicInnerError($data['innerError']) : $data['innerError'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
    }
}
