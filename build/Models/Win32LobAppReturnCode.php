<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppReturnCode
 */
class Win32LobAppReturnCode
{
    /** Return code. */
    public ?float $returnCode = null;

    /**  */
    public ?Win32LobAppReturnCodeType $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['returnCode'])) {
            $this->returnCode = $data['returnCode'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
