<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsMainError
 */
class ODataErrorsMainError
{
    /**  */
    public ?string $code = null;

    /**  */
    public ?string $message = null;

    /**  */
    public ?string $target = null;

    /** 
     * 
     * @var ODataErrorsErrorDetails[]
     */
    public array $details = [];

    /**  */
    public ?ODataErrorsInnerError $innerError = null;


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
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['innerError'])) {
            $this->innerError = is_array($data['innerError']) ? new ODataErrorsInnerError($data['innerError']) : $data['innerError'];
        }
    }
}
