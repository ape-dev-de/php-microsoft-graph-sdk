<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncludeAllAccountTargetContent
 */
class IncludeAllAccountTargetContent
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
            $this->type = is_array($data['type']) ? new AccountTargetContentType($data['type']) : $data['type'];
        }
    }
}
