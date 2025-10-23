<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccountTargetContent
 */
class AccountTargetContent
{
    /** 
     * The type of account target content. Possible values are: unknown, includeAll, addressBook, unknownFutureValue.
     * @var AccountTargetContentType|\stdClass|null
     */
    public mixed $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
