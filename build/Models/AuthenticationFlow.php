<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlow
 */
class AuthenticationFlow
{
    /** 
     * Represents the transfer methods in scope for the policy. The possible values are: none, deviceCodeFlow, authenticationTransfer, unknownFutureValue. Default value is none.
     * @var ConditionalAccessTransferMethods|\stdClass|null
     */
    public mixed $transferMethod = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['transferMethod'])) {
            $this->transferMethod = $data['transferMethod'];
        }
    }
}
