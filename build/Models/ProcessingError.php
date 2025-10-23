<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessingError
 */
class ProcessingError
{
    /** A service-defined error code string. */
    public ?string $code = null;

    /** 
     * Contains more specific, potentially internal error details.
     * @var ClassificationInnerError|\stdClass|null
     */
    public mixed $innerError = null;

    /** A human-readable representation of the error. */
    public ?string $message = null;

    /** The target of the error (for example, the specific property or item causing the issue). */
    public ?string $target = null;

    /** 
     * A collection of more specific errors contributing to the overall error.
     * @var ClassifcationErrorBase[]
     */
    public array $details = [];

    /**  */
    public ?ContentProcessingErrorType $errorType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['innerError'])) {
            $this->innerError = $data['innerError'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['errorType'])) {
            $this->errorType = $data['errorType'];
        }
    }
}
