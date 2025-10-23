<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DlpActionInfo
 */
class DlpActionInfo
{
    /** 
     * The type of DLP action. Possible value is restrictAccessAction.
     * @var DlpAction|\stdClass|null
     */
    public mixed $action = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['action'])) {
            $this->action = $data['action'];
        }
    }
}
