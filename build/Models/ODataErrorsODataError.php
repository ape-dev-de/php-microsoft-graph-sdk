<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsODataError
 */
class ODataErrorsODataError
{
    /**  */
    public ?ODataErrorsMainError $error = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new ODataErrorsMainError($data['error']) : $data['error'];
        }
    }
}
