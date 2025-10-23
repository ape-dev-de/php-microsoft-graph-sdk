<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessFilter
 */
class ConditionalAccessFilter
{
    /**  */
    public ?FilterMode $mode = null;

    /** Rule syntax is similar to that used for membership rules for groups in Microsoft Entra ID. For details, see rules with multiple expressions */
    public ?string $rule = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['mode'])) {
            $this->mode = $data['mode'];
        }
        if (isset($data['rule'])) {
            $this->rule = $data['rule'];
        }
    }
}
