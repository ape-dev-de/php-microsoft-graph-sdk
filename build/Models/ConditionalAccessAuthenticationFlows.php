<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessAuthenticationFlows
 */
class ConditionalAccessAuthenticationFlows
{
    /**  */
    public ?ConditionalAccessTransferMethods $transferMethods = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['transferMethods'])) {
            $this->transferMethods = $data['transferMethods'];
        }
    }
}
